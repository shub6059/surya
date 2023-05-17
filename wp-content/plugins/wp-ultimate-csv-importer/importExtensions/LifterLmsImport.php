<?php

/******************************************************************************************
 * Copyright (C) Smackcoders. - All Rights Reserved under Smackcoders Proprietary License
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * You can contact Smackcoders at email address info@smackcoders.com.
 *******************************************************************************************/

namespace Smackcoders\FCSV;

if (!defined('ABSPATH'))
	exit; // Exit if accessed directly

class LifterLmsImport
{
	private static $lifterlms_instance = null;

	public static function getInstance()
	{
		if (LifterLmsImport::$lifterlms_instance == null) {
			LifterLmsImport::$lifterlms_instance = new LifterLmsImport;
			return LifterLmsImport::$lifterlms_instance;
		}
		return LifterLmsImport::$lifterlms_instance;
    }
    
    public function set_lifterlms_values($header_array, $value_array, $map, $post_id, $type, $mode){
        $post_values = [];
		$helpers_instance = ImportHelpers::getInstance();
		$post_values = $helpers_instance->get_header_values($map, $header_array, $value_array);


		$this->lifterlms_values_import($post_values, $post_id, $type, $mode);
    }

    public function lifterlms_values_import($post_values, $post_id, $type, $mode){
        global $wpdb;	
		if($type == 'course'){

            if(isset($post_values['curriculum_name'])){                
                if(isset($post_values['lesson_name'])){
                    $get_lesson_names = explode('|', $post_values['lesson_name']);

                }
               
                if(isset($post_values['quiz_name'])){
                    $get_quiz_names = explode('|', $post_values['quiz_name']);
                }
      
                $temp = 0;
                foreach($get_curriculum_names as $curriculum_name){
                    $curriculums_description = isset($get_curriculum_description[$temp]) ? $get_curriculum_description[$temp] : '';
    
                    if($mode == 'Insert'){
                        $wpdb->insert( 
                            "{$wpdb->prefix}lifterlms_sections", 
                            array("section_name" => $curriculum_name, "section_course_id" => $post_id, "section_description" => $curriculums_description),
                            array('%s', '%d', '%s')
                        );
                        $inserted_section_id = $wpdb->insert_id;
                    }
                    if($mode == 'Update'){
                        $curriculumname = trim($curriculum_name);
                        $check_assigned_to_course_id =$wpdb->get_results("SELECT * FROM {$wpdb->prefix}liftetlms_sections WHERE section_name ='$curriculumname'");
                        if(empty($check_assigned_to_course_id)){
                            $wpdb->insert( 
                                "{$wpdb->prefix}lifterlms_sections", 
                                array("section_name" => $curriculum_name, "section_course_id" => $post_id, "section_description" => $curriculums_description),
                                array('%s', '%d', '%s')
                            );
                            $inserted_section_id = $wpdb->insert_id;
                        }
                        else{
                            $inserted_section_id = $check_assigned_to_course_id[0]->section_id;
                        }

                    }

                    if(isset($post_values['lesson_name'])){
                        $individual_lesson_names = explode(',', $get_lesson_names[$temp]);

                        if(isset($post_values['lesson_description'])){
                            $indivdual_lesson_description = explode(',', $get_lesson_description[$temp]);
                        }
                       
                        $get_all_lesson_names = $wpdb->get_results("SELECT post_title FROM {$wpdb->prefix}posts WHERE post_type = 'lesson' AND post_status = 'publish' ", ARRAY_A);
                        $all_lesson_names = array_column($get_all_lesson_names, 'post_title');

                        $i = 0;
                        foreach($individual_lesson_names as $lesson_name){
                            $lesson_names = trim($lesson_name);
                            if($mode == 'Insert'){
                                if(in_array($lesson_names, $all_lesson_names)){
                                    $lesson_post_id = $wpdb->get_var("SELECT ID from {$wpdb->prefix}posts WHERE post_title = '$lesson_names' and post_type = 'lesson' ");   
                                
                                    $check_assigned_to_course = $wpdb->get_var("SELECT section_id FROM {$wpdb->prefix}lifterlms_section_items WHERE item_id = $lesson_post_id AND item_type = 'lesson' ");
                                    if(empty($check_assigned_to_course)){
                                        LifterLmsImport::$lifterlms_instance->insert_lesson_details($inserted_section_id, $lesson_post_id, $post_values, $mode);
                                    }

                                }else{
                                    $lessons_description = isset($indivdual_lesson_description[$i]) ? $indivdual_lesson_description[$i] : '';

                                    $lesson_post_id = LifterLmsImport::$lifterlms_instance->insert_post($lesson_names, $lessons_description, 'lesson');
                                    LifterLmsImport::$lifterlms_instance->insert_lesson_details($inserted_section_id, $lesson_post_id, $post_values, $mode);
                                }   
                            }
                            if($mode == 'Update'){ 
                                if(in_array($lesson_names, $all_lesson_names)){
                                    $lesson_post_id = $wpdb->get_var("SELECT ID from {$wpdb->prefix}posts WHERE post_title = '$lesson_names' and post_type = 'lesson' ");   
                                    $check_assigned_to_course = $wpdb->get_var("SELECT section_id FROM {$wpdb->prefix}lifterlms_section_items WHERE item_id = $lesson_post_id AND item_type = 'lesson' ");
                                    if(empty($check_assigned_to_course)){
                                        LifterLmsImport::$lifterlms_instance->insert_lesson_details($inserted_section_id, $lesson_post_id, $post_values, $mode);
                                    }
                                }else{
                                    $lessons_description = isset($indivdual_lesson_description[$i]) ? $indivdual_lesson_description[$i] : '';
                                    $lesson_post_id = LifterLmsImport::$lifterlms_instance->insert_post($lesson_names, $lessons_description, 'lesson');
                                    LifterLmsImport::$lifterlms_instance->insert_lesson_details($inserted_section_id, $lesson_post_id, $post_values, $mode);
                                }
                                
                            }  
                            $i++;
                        }   
                    }
        
                    if(isset($post_values['quiz_name'])){
                        $individual_quiz_names = explode(',', $get_quiz_names[$temp]);

                        if(isset($post_values['quiz_description'])){
                            $individual_quiz_description = explode(',', $get_quiz_description[$temp]);
                        }
                        else{
                            $individual_quiz_description = [];
                        }
    
                        $get_all_quiz_names = $wpdb->get_results("SELECT post_title FROM {$wpdb->prefix}posts WHERE post_type = 'llms_quiz' AND post_status = 'publish' ", ARRAY_A);
                        $all_quiz_names = array_column($get_all_quiz_names, 'post_title');

                        $j = 0;
                        foreach($individual_quiz_names as $quiz_names){
                            if($mode == 'Insert'){
                                if(in_array($quiz_names, $all_quiz_names)){
                                    $quiz_post_id = $wpdb->get_var("SELECT ID FROM {$wpdb->prefix}posts WHERE post_title = '$quiz_names' and post_type = 'llms_quiz' ");   
                                
                                    $check_assigned_to_course = $wpdb->get_var("SELECT section_id FROM {$wpdb->prefix}lifterlms_section_items WHERE item_id = $quiz_post_id AND item_type = 'llms_quiz' ");
                                    if(empty($check_assigned_to_course)){
                                        LifterLmsImport::$lifterlms_instance->insert_quiz_details($type,$inserted_section_id, $quiz_post_id, $post_values, $mode);
                                    }
                                }else{
                                    $quizs_description = isset($individual_quiz_description[$j]) ? $individual_quiz_description[$j] : '';

                                    $quiz_post_id = LifterLmsImport::$lifterlms_instance->insert_post($quiz_names, $quizs_description, 'llms_quiz');
                                    LifterLmsImport::$lifterlms_instance->insert_quiz_details($type,$inserted_section_id, $quiz_post_id, $post_values, $mode);
                                }  
                            }
                            if($mode == 'Update'){
                                $quizs_description = isset($individual_quiz_description[$j]) ? $individual_quiz_description[$j] : '';
                                if(isset($get_existing_quiz_ids[$j])){ 
                                    LifterLmsImport::$lifterlms_instance->update_post($quiz_names, $quizs_description, 'llms_quiz', $get_existing_quiz_ids[$j]);
                                    LifterLmsImport::$lifterlms_instance->insert_quiz_details($type,$inserted_section_id, $get_existing_quiz_ids[$j], $post_values, $mode);
                                }
                            }
                            $j++;
                        }
                    }
                    $temp++;
                } }  
            }
            if(isset($post_values['_llms_requirements'])){
                $llms_requi = $post_values['_llms_requirements'];
                $llms_require = explode('|',$llms_requi);
                $llms_requirements = $llms_require;
            }
            if(isset($post_values['_llms_target_audiences'])){
                $llms_target = $post_values['_llms_target_audiences'];
                $llms_target = explode('|',$llms_target);
                $llms_target_audiences = $llms_target;
            }
            if(isset($post_values['_llms_key_features'])){
                $llms_key_feature = $post_values['_llms_key_features'];
                $llms_key = explode('|',$llms_key_feature);
                $llms_key_features = $llms_key;
            }
            if(isset($post_values['_llms_faqs'])){
                $llms_faqs = $post_values['_llms_faqs'];
                $llms_faq = explode('|',$llms_faqs);
                $llms_faq_value = array();
                foreach($llms_faq as $llms_faq_values){
                    $llms_faq_value[] = explode(',',$llms_faq_values);

                }
                
            }

            $lifter_course_setting_array = [];
            $lifter_course_setting_array['_llms_instructors'] = isset($post_values['_llms_instructors']) ? $post_values['_llms_instructors'] :'';
            $lifter_course_setting_array['_llms_sales_page_content_type'] = isset($post_values['_llms_sales_page_content_type']) ? $post_values['_llms_sales_page_content_type'] : '' ;
            $lifter_course_setting_array['_llms_sales_page_content_page_id'] = isset($post_values['_llms_sales_page_content_page_id']) ? $post_values['_llms_sales_page_content_page_id'] : '' ;
            $lifter_course_setting_array['_llms_sales_page_content_url'] = isset($post_values['_llms_sales_page_content_url']) ? $post_values['_llms_sales_page_content_url'] : '' ;
            $lifter_course_setting_array['_llms_length'] = isset($post_values['_llms_length']) ? $post_values['_llms_length'] : '';
            $lifter_course_setting_array['_llms_post_course_difficulty'] = isset($post_values['_llms_post_course_difficulty']) ? $post_values['_llms_post_course_difficulty'] : '';
            $lifter_course_setting_array['_llms_video_embed'] = isset($post_values['_llms_video_embed']) ? $post_values['_llms_video_embed'] : '';
            $lifter_course_setting_array['_llms_tile_featured_video'] = isset($post_values['_llms_tile_featured_video']) ? $post_values['_llms_tile_featured_video'] : '';
            $lifter_course_setting_array['_llms_audio_embed'] = isset($post_values['_llms_audio_embed']) ? $post_values['_llms_audio_embed'] : '' ;
            $lifter_course_setting_array['_llms_content_restricted_message'] = isset($post_values['_llms_content_restricted_message']) ? $post_values['_llms_content_restricted_message'] : '' ;
            $lifter_course_setting_array['_llms_enrollment_period'] = isset($post_values['_llms_enrollment_period']) ? $post_values['_llms_enrollment_period'] : '' ;
            $lifter_course_setting_array['_llms_enrollment_start_date'] = isset($post_values['_llms_enrollment_start_date']) ? $post_values['_llms_enrollment_start_date'] : '';
            $lifter_course_setting_array['_llms_enrollment_end_date'] = isset($post_values['_llms_enrollment_end_date']) ? $post_values['_llms_enrollment_end_date'] : '' ;
            $lifter_course_setting_array['_llms_enrollment_opens_message'] = isset($post_values['_llms_enrollment_opens_message']) ? $post_values['_llms_enrollment_opens_message'] : '';
            $lifter_course_setting_array['_llms_enrollment_closed_message'] = isset($post_values['_llms_enrollment_closed_message']) ? $post_values['_llms_enrollment_closed_message'] : '';
            $lifter_course_setting_array['_llms_time_period'] = isset($post_values['_llms_time_period']) ? $post_values['_llms_time_period'] : '';
            $lifter_course_setting_array['_llms_start_date'] = isset($post_values['_llms_start_date']) ? $post_values['_llms_start_date'] : '';
            $lifter_course_setting_array['_llms_end_date'] = isset($post_values['_llms_end_date']) ? $post_values['_llms_end_date'] : '';
            $lifter_course_setting_array['_llms_course_opens_message'] = isset($post_values['_llms_course_opens_message']) ? $post_values['_llms_course_opens_message'] : '';
            $lifter_course_setting_array['_llms_course_closed_message'] = isset($post_values['_llms_course_closed_message']) ? $post_values['_llms_course_closed_message'] : '';
            $lifter_course_setting_array['_llms_has_prerequisite'] = isset($post_values['_llms_has_prerequisite']) ? $post_values['_llms_has_prerequisite'] : '';
            $lifter_course_setting_array['_llms_prerequisite'] = isset($post_values['_llms_prerequisite']) ? $post_values['_llms_prerequisite'] : '';
            $lifter_course_setting_array['_llms_prerequisite_track'] = isset($post_values['_llms_prerequisite_track']) ? $post_values['_llms_prerequisite_track'] : '';
            $lifter_course_setting_array['_llms_enable_capacity'] = isset($post_values['_llms_enable_capacity']) ? $post_values['_llms_enable_capacity'] : '';
            $lifter_course_setting_array['_llms_capacity'] = isset($post_values['_llms_capacity']) ? $post_values['_llms_capacity'] : '';
            $lifter_course_setting_array['_llms_capacity_message'] = isset($post_values['_llms_capacity_message']) ? $post_values['_llms_capacity_message'] : '';
            $lifter_course_setting_array['_llms_reviews_enabled'] = isset($post_values['_llms_reviews_enabled']) ? $post_values['_llms_reviews_enabled'] : '';
            $lifter_course_setting_array['_llms_display_reviews'] = isset($post_values['_llms_display_reviews']) ? $post_values['_llms_display_reviews'] : '';
            $lifter_course_setting_array['_llms_num_reviews'] = isset($post_values['_llms_num_reviews']) ? $post_values['_llms_num_reviews'] : '';
            $lifter_course_setting_array['_llms_multiple_reviews_disabled'] = isset($post_values['_llms_multiple_reviews_disabled']) ? $post_values['_llms_multiple_reviews_disabled'] : '';
                        
            foreach ($lifter_course_setting_array as $course_key => $course_value) {
                update_post_meta($post_id, $course_key, $course_value);
            }
		

        if($type == 'lesson' || $type == 'llms_quiz' || $type == 'llms_coupon'){

            if($type == 'lesson'){
                LifterLmsImport::$lifterlms_instance->insert_lesson_details($get_section_id, $post_id, $post_values, $mode);
            }
            if($type == 'llms_quiz'){
                LifterLmsImport::$lifterlms_instance->insert_quiz_details($type,$get_section_id, $post_id, $post_values, $mode);
            }  
            if($type == 'llms_coupon'){
                LifterLmsImport::$lifterlms_instance->insert_question_details($type,$get_section_id, $post_id, $post_values, 0, $mode, 'new');
            }
        }
   
        if($type == 'llms_review'){
            LifterLmsImport::$lifterlms_instance->insert_order_details($post_id, $post_values, $mode);
        }
	}
	
    public function insert_lesson_details($inserted_section_id, $lesson_post_id, $post_values, $mode){
        global $wpdb;
        if($mode == 'Insert'){
            if(isset($inserted_section_id)){
                LifterLmsImport::$lifterlms_instance->insert_to_lifterlms_section_items($inserted_section_id, $lesson_post_id, 'lesson');
            }
        }
        if($mode == 'Update'){
            if(isset($inserted_section_id)){ 
                LifterLmsImport::$lifterlms_instance->insert_to_lifterlms_section_items($inserted_section_id, $lesson_post_id, 'lesson');
            }
        }



        $lesson_meta_array['_llms_reviews_enabled'] = isset($post_values['_llms_reviews_enabled']) ? $post_values['_llms_reviews_enabled'] : '';
        $lesson_meta_array['_llms_display_reviews'] = isset($post_values['_llms_display_reviews']) ? $post_values['_llms_display_reviews'] : '';
        $lesson_meta_array['_llms_num_reviews'] = isset($post_values['_llms_num_reviews']) ? $post_values['_llms_num_reviews'] : '';
        $lesson_meta_array['_llms_multiple_reviews_disabled'] = isset($post_values['_llms_multiple_reviews_disabled']) ? $post_values['_llms_multiple_reviews_disabled'] : '';
        $lesson_meta_array['_llms_video_embed'] = isset($post_values['_llms_video_embed']) ? $post_values['_llms_video_embed'] : '';
        $lesson_meta_array['_llms_audio_embed'] = isset($post_values['_llms_audio_embed']) ? $post_values['_llms_audio_embed'] : '';
        $lesson_meta_array['_llms_free_lesson'] = isset($post_values['_llms_free_lesson']) ? $post_values['_llms_free_lesson'] : '';
        $lesson_meta_array['_llms_has_prerequisite'] = isset($post_values['_llms_has_prerequisite']) ? $post_values['_llms_has_prerequisite'] : '';
        $lesson_meta_array['_llms_prerequisite'] = isset($post_values['_llms_prerequisite']) ? $post_values['_llms_prerequisite'] : '';
        $lesson_meta_array['_llms_drip_method'] = isset($post_values['_llms_drip_method']) ? $post_values['_llms_drip_method'] : '';
        $lesson_meta_array['_llms_days_before_available'] = isset($post_values['_llms_days_before_available']) ? $post_values['_llms_days_before_available'] : '';
        $lesson_meta_array['_llms_date_available'] = isset($post_values['_llms_date_available']) ? $post_values['_llms_date_available'] : '';
        $lesson_meta_array['_llms_time_available'] = isset($post_values['_llms_time_available']) ? $post_values['_llms_time_available'] : '';
        $lesson_meta_array['_llms_require_passing_grade'] = isset($post_values['_llms_require_passing_grade']) ? $post_values['_llms_require_passing_grade'] : '';
        $lesson_meta_array['_thumbnail_id'] = isset($post_values['_thumbnail_id']) ? $post_values['_thumbnail_id'] : '';
        $lesson_meta_array['_llms_order'] = isset($post_values['_llms_order']) ? $post_values['_llms_order'] : '';
        $lesson_meta_array['_llms_parent_course'] = isset($post_values['_llms_parent_course']) ? $post_values['_llms_parent_course'] : '';
        $lesson_meta_array['_llms_parent_section'] = isset($post_values['_llms_parent_section']) ? $post_values['_llms_parent_section'] : '';
        $lesson_meta_array['_llms_require_assignment_passing_grade'] = isset($post_values['_llms_require_assignment_passing_grade']) ? $post_values['_llms_require_assignment_passing_grade'] : '';
        $lesson_meta_array['_llms_points'] = isset($post_values['_llms_points']) ? $post_values['_llms_points'] : '';
        $lesson_meta_array['_llms_quiz_enabled'] = isset($post_values['_llms_quiz_enabled']) ? $post_values['_llms_quiz_enabled'] : '';
        $lesson_meta_array['_llms_lesson_id'] = isset($post_values['_llms_lesson_id']) ? $post_values['_llms_lesson_id'] : '';
        $lesson_meta_array['_llms_allowed_attempts'] = isset($post_values['_llms_allowed_attempts']) ? $post_values['_llms_allowed_attempts'] : '';
        $lesson_meta_array['_llms_limit_attempts'] = isset($post_values['_llms_limit_attempts']) ? $post_values['_llms_limit_attempts'] : '';
        $lesson_meta_array['_llms_limit_time'] = isset($post_values['_llms_limit_time']) ? $post_values['_llms_limit_time'] : '';
        $lesson_meta_array['_llms_passing_percent'] = isset($post_values['_llms_passing_percent']) ? $post_values['_llms_passing_percent'] : '';
        $lesson_meta_array['_llms_show_correct_answer'] = isset($post_values['_llms_show_correct_answer']) ? $post_values['_llms_show_correct_answer'] : '';
        $lesson_meta_array['_llms_time_limit'] = isset($post_values['_llms_time_limit']) ? $post_values['_llms_time_limit'] : '';
        $lesson_meta_array['_llms_quiz'] = isset($post_values['_llms_quiz']) ? $post_values['_llms_quiz'] : '';

        foreach ($lesson_meta_array as $lesson_key => $lesson_value) {
            update_post_meta($lesson_post_id, $lesson_key, $lesson_value);
        }
    }

    public function insert_quiz_details($type,$inserted_section_id, $quiz_post_id, $post_values, $mode){
        global $wpdb;
             
        if($mode == 'Update'){
            $check_for_same_section_id = $wpdb->get_var("SELECT section_id FROM {$wpdb->prefix}lifterlms_section_items WHERE item_id = $quiz_post_id AND item_type = 'llms_quiz' ");
            if(!empty($check_for_same_section_id) && $inserted_section_id == $check_for_same_section_id){
                $get_section_item_id = $wpdb->get_var("SELECT section_item_id FROM {$wpdb->prefix}lifterlms_section_items WHERE section_id = $check_for_same_section_id AND item_id = $quiz_post_id AND item_type = 'llmsquiz' ");
                LifterLmsImport::$lifterlms_instance->update_to_lifterlms_section_items($inserted_section_id, $quiz_post_id, 'llms_quiz', $get_section_item_id );
            }
        }
        
        if($mode == 'Insert'){
            if(!empty($inserted_section_id)){
                LifterLmsImport::$lifterlms_instance->insert_to_lifterlms_section_items($inserted_section_id, $quiz_post_id, 'llms_quiz');
            }
        }
                                
        $quiz_meta_array['_llms_duration'] = isset($post_values['_llms_duration']) ? $post_values['_llms_duration'] : '10 minute';
        $quiz_meta_array['_llms_minus_points'] = isset($post_values['_llms_minus_points']) ? $post_values['_llms_minus_points'] : 0;
        $quiz_meta_array['_llms_minus_skip_questions'] = isset($post_values['_llms_minus_skip_questions']) ? $post_values['_llms_minus_skip_questions'] : 'no';
        $quiz_meta_array['_llms_passing_grade'] = isset($post_values['_llms_passing_grade']) ? $post_values['_llms_passing_grade'] : 80;
        $quiz_meta_array['_llms_retake_count'] = isset($post_values['_llms_quiz_retake_count']) ? $post_values['_llms_quiz_retake_count'] : 0;                        
        $quiz_meta_array['_llms_instant_check'] = isset($post_values['_llms_instant_check']) ? $post_values['_llms_instant_check'] : 'no';
        $quiz_meta_array['_llms_negative_marking'] = isset($post_values['_llms_negative_marking']) ? $post_values['_llms_negative_marking'] : 'no';
        $quiz_meta_array['_llms_pagination'] = isset($post_values['_llms_pagination']) ? $post_values['_llms_pagination'] : 1;
        $quiz_meta_array['_llms_show_correct_review'] = isset($post_values['_llms_show_correct_review']) ? $post_values['_llms_show_correct_review'] : 'yes';
        $quiz_meta_array['_llms_review'] = isset($post_values['_llms_review']) ? $post_values['_llms_review'] : 'yes';
        
        foreach ($quiz_meta_array as $quiz_key => $quiz_value) {
            update_post_meta($quiz_post_id, $quiz_key, $quiz_value);
        }

        if(isset($post_values['question_title'])){
            $get_question_titles = explode(',', $post_values['question_title']);
            $get_question_descriptions = explode(',', $post_values['question_description']);

            $get_all_question_titles = $wpdb->get_results("SELECT post_title FROM {$wpdb->prefix}posts WHERE post_type = 'llms_question' AND post_status = 'publish' ", ARRAY_A);
            $all_questions_title = array_column($get_all_question_titles, 'post_title');
           
            $temp = 0;
            foreach($get_question_titles as $question_titles){
            
                if($mode == 'Insert'){
                    if(in_array($question_titles, $all_questions_title)){
                        $question_post_id = $wpdb->get_var("SELECT ID from {$wpdb->prefix}posts WHERE post_title = '$question_titles' AND post_type = 'llms_question' AND post_status = 'publish' ");       
                        
                        $post_values['quiz_id'] = $quiz_post_id;
                        $check_assigned_to_quiz = $wpdb->get_var("SELECT quiz_question_id FROM {$wpdb->prefix}lifterlms_quiz_questions WHERE question_id = $question_post_id  ");
                        if(empty($check_assigned_to_quiz)){
                            LifterLmsImport::$lifterlms_instance->insert_question_details($type,$inserted_section_id, $question_post_id, $post_values, $temp, $mode, 'existing');
                        }

                    }else{
                        $question_description = isset($get_question_descriptions[$temp]) ? $get_question_descriptions[$temp] : '';
                
                        $question_post_id = LifterLmsImport::$lifterlms_instance->insert_post($question_titles, $question_description, 'llms_question');
                        $post_values['quiz_id'] = $quiz_post_id;
                        LifterLmsImport::$lifterlms_instance->insert_question_details($type,$inserted_section_id, $question_post_id, $post_values, $temp, $mode, 'existing');
                    }
                }

                if($mode == 'Update'){  
                    if(in_array($question_titles, $all_questions_title)){
                        $question_post_id = $wpdb->get_var("SELECT ID from {$wpdb->prefix}posts WHERE post_title = '$question_titles' AND post_type = 'llms_question' AND post_status = 'publish' ");       
                        $post_values['quiz_id'] = $quiz_post_id;
                        $check_assigned_to_quiz = $wpdb->get_var("SELECT quiz_question_id FROM {$wpdb->prefix}lifterlms_quiz_questions WHERE question_id = $question_post_id  ");
                        if(empty($check_assigned_to_quiz)){
                            LifterLmsImport::$lifterlms_instance->insert_question_details($type,$inserted_section_id, $question_post_id, $post_values, $temp, $mode, 'existing');
                        }
                    }else{
                        $question_description = isset($get_question_descriptions[$temp]) ? $get_question_descriptions[$temp] : '';
                        $question_post_id = LifterLmsImport::$lifterlms_instance->insert_post($question_titles, $question_description, 'llms_question');
                        $post_values['quiz_id'] = $quiz_post_id;
                        LifterLmsImport::$lifterlms_instance->insert_question_details($type,$inserted_section_id, $question_post_id, $post_values, $temp, $mode, 'existing');
                    }
                }  

                $temp++;
            }
        }    
    }

    public function insert_question_details($type,$inserted_section_id, $question_post_id, $post_values, $temp, $mode, $condition){
        global $wpdb;

        if(isset($post_values['mark'])){
            $llms_question_mark = explode(',',$post_values['mark']);
        }
        if(isset($post_values['explanation'])){
            $llms_question_explanation = explode(',',$post_values['explanation']);
        }
        if(isset($post_values['hint'])){
            $llms_question_hint = explode(',',$post_values['hint']);
        }
        if(isset($post_values['type'])){
            $llms_question_type = explode(',',$post_values['type']);
        }

        $question_meta_array['_llms_enable_trial_discount'] = isset($post_values['_llms_enable_trial_discount']) ? $post_values['_llms_enable_trial_discount'] : '';
        $question_meta_array['_llms_trial_amount'] = isset($post_values['_llms_trial_amount']) ? $post_values['_llms_trial_amount'] : '';
        $question_meta_array['_llms_coupon_courses'] = isset($post_values['_llms_coupon_courses']) ? $post_values['_llms_coupon_courses'] : '';
        $question_meta_array['_llms_coupon_membership'] = isset($post_values['_llms_coupon_membership']) ? $post_values['_llms_coupon_membership'] : '';
        $question_meta_array['_llms_coupon_amount'] = isset($post_values['_llms_coupon_amount']) ? $post_values['_llms_coupon_amount'] : '';
        $question_meta_array['_llms_usage_limit'] = isset($post_values['_llms_usage_limit']) ? $post_values['_llms_usage_limit'] : '';
        $question_meta_array['_llms_discount_type'] = isset($post_values['_llms_discount_type']) ? $post_values['_llms_discount_type'] : '';
        $question_meta_array['_llms_description'] = isset($post_values['_llms_description']) ? $post_values['_llms_description'] : '';
        $question_meta_array['_llms_expiration_date'] = isset($post_values['_llms_expiration_date']) ? $post_values['_llms_expiration_date'] : '';
        $question_meta_array['_llms_plan_type'] = isset($post_values['_llms_plan_type']) ? $post_values['_llms_plan_type'] : '';

        foreach ($question_meta_array as $question_key => $question_value) {
            update_post_meta($question_post_id, $question_key, $question_value);
        }

        if(isset($post_values['quiz_id'])){
            $quiz_id = $post_values['quiz_id'];
            $question_order = 1;

            $get_question_order = $wpdb->get_var("SELECT question_order FROM {$wpdb->prefix}lifterlms_quiz_questions WHERE quiz_id = $quiz_id ORDER BY quiz_question_id DESC LIMIT 1");
            if(!empty($get_question_order)){
                $question_order = $get_question_order + 1;
            }

            if($mode == 'Insert'){
                LifterLmsImport::$lifterlms_instance->insert_to_lifterlms_quiz_questions($quiz_id, $question_post_id, $question_order);
            }

            if($mode == 'Update'){
              
                LifterLmsImport::$lifterlms_instance->insert_to_lifterlms_quiz_questions($quiz_id, $question_post_id, $question_order);
                
                if($condition == 'new'){
                    if(!empty($inserted_section_id)){
                        $check_for_same_section_id = $wpdb->get_var("SELECT section_id FROM {$wpdb->prefix}lifterlms_section_items WHERE item_id = $quiz_id AND item_type = 'llms_quiz' ");
                        if(!empty($check_for_same_section_id) && $inserted_section_id == $check_for_same_section_id){
                            $get_section_item_id = $wpdb->get_var("SELECT section_item_id FROM {$wpdb->prefix}lifterlms_section_items WHERE section_id = $check_for_same_section_id AND item_id = $quiz_id AND item_type = 'llms_quiz' ");
                           
                            LifterLmsImport::$lifterlms_instance->update_to_lifterlms_section_items($inserted_section_id, $quiz_id, 'llms_quiz', $get_section_item_id);
                        }
                       
                    }
                }
            }

            if(!empty($inserted_section_id)){
                $check_assigned_to_course = $wpdb->get_var("SELECT section_item_id FROM {$wpdb->prefix}lifterlms_section_items WHERE section_id = $inserted_section_id AND item_id = $quiz_id AND item_type = 'llms_quiz' ");
                $check_assigned_to_another_course = $wpdb->get_var("SELECT section_id FROM {$wpdb->prefix}lifterlms_section_items WHERE item_id = $quiz_id AND item_type = 'llms_quiz' ");
                
                if(empty($check_assigned_to_course) && empty($check_assigned_to_another_course)){
                    LifterLmsImport::$lifterlms_instance->insert_to_lifterlms_section_items($inserted_section_id, $quiz_id, 'llms_quiz');
                }
            }
        }

        if($type == 'llms_quiz'){
            if(isset($post_values['question_options'])){
                $get_separate_question_options = explode(',', $post_values['question_options']);
                $get_question_titles = explode(',', $post_values['question_title']);
                $i=0;
                $get_separate_options =array();
                foreach($get_separate_question_options as $get_separate_question_option){
                    $key=$get_question_titles[$i];
                    $get_separate_options[$key] = explode('->', $get_separate_question_option); 
                    $i++;
                }  
                foreach($get_separate_options as $option_key=> $option_values){
                   foreach($option_values as $option_value){
                       $post_type_values = $wpdb->get_results("SELECT post_title FROM {$wpdb->prefix}posts WHERE id = $question_post_id ", ARRAY_A);
                        $get_title_options_value = explode('|', $option_value);
                        if($option_key == $post_type_values[0]['post_title']){
                            $wpdb->insert( 
                                "{$wpdb->prefix}lifterlms_question_answers", 
                                array("question_id" => $question_post_id, "title" => $get_title_options_value[0], "is_true"=>$get_title_options_value[1]),
                                array('%d', '%s','%s')
                            );
                        } 
                    }
                   
                }
                
            }
        }
        else{
            if(isset($post_values['question_options'])){  
                $get_separate_options = explode('->', $post_values['question_options']);
                foreach($get_separate_options as $option_values){
                    $get_title_options = explode('|', $option_values);
                    $wpdb->insert( 
                        "{$wpdb->prefix}lifterlms_question_answers", 
                        array("question_id" => $question_post_id, "title" => $get_title_options[0], "is_true"=>$get_title_options[1]),
                        array('%d', '%s','%s')
                    );
                }
            }
        }
    }

    public function insert_order_details($order_id, $post_values, $mode){
    
        global $wpdb;
        $order_key = strtoupper( uniqid( 'ORDER' ) );
        $order_currency = get_option("_order_currency");

        $order_meta_array = [];
        if(isset($post_values['user_id'])){
            $order_meta_array['_user_id'] = $post_values['user_id'];
        }
        else{
            $order_meta_array['_user_id'] = get_current_user_id();
        }

        $order_meta_array['_thumbnail_id'] = isset($post_values['_thumbnail_id']) ? $post_values['_thumbnail_id'] : '';
        $order_meta_array['_llms_reviews_enabled'] = isset($post_values['_llms_reviews_enabled']) ? $post_values['_llms_reviews_enabled'] : '';
        $order_meta_array['_llms_display_reviews'] = isset($post_values['_llms_display_reviews']) ? $post_values['_llms_display_reviews'] : '';
        $order_meta_array['_llms_num_reviews'] = isset($post_values['_llms_num_reviews']) ? $post_values['_llms_num_reviews'] : '';
        $order_meta_array['_llms_multiple_reviews_disabled'] = isset($post_values['_llms_multiple_reviews_disabled']) ? $post_values['_llms_multiple_reviews_disabled'] : '';

        foreach($order_meta_array as $order_key => $order_value){
            update_post_meta($order_id, $order_key, $order_value);
        }

        if(isset($post_values['item_id'])){

            $order_item_ids = explode(',', $post_values['item_id']);
            $order_item_quantity = explode(',', $post_values['item_quantity']);
            $order_item_subtotal = explode(',', $post_values['_item_subtotal']);
            $order_item_total = explode(',', $post_values['_item_total']);

            $temp = 0;
            foreach($order_item_ids as $order_item_id){
                $order_name = $wpdb->get_var("SELECT post_title FROM {$wpdb->prefix}posts WHERE ID = $order_item_id ");
            
                $wpdb->insert( 
                    "{$wpdb->prefix}lifterlms_order_items", 
                    array("order_item_name" => $order_name, "order_id" => $order_id),
                    array('%s', '%d')
                );
                $llms_order_item_id = $wpdb->insert_id;

                $order_item_meta_array = [];
                $order_item_meta_array['_course_id'] = $order_item_id;
                $order_item_meta_array['_quantity'] = $order_item_quantity[$temp];
                $order_item_meta_array['_subtotal'] = $order_item_subtotal[$temp];
                $order_item_meta_array['_total'] = $order_item_total[$temp];
        
                foreach($order_item_meta_array as $order_item_meta_key => $order_item_meta_value){
                    if(empty($order_item_meta_value)){
                        $order_item_meta_value = 'NULL';
                    }
                    $wpdb->insert( 
                        "{$wpdb->prefix}lifterlms_order_itemmeta", 
                        array("lifterlms_order_item_id" => $llms_order_item_id, "meta_key" => $order_item_meta_key, "meta_value" => $order_item_meta_value),
                        array('%d', '%s', '%s')
                    );
                }
                $temp++;
            }
        }	
    }

    public function lifterlms_orders_import($data_array , $mode , $check, $unikey_value , $unikey_name , $line_number){
        $returnArr = array();	
        global $wpdb;
        $helpers_instance = ImportHelpers::getInstance();
        $core_instance = CoreFieldsImport::getInstance();
        global $core_instance;

        $log_table_name = $wpdb->prefix ."import_detail_log";

        $updated_row_counts = $helpers_instance->update_count($unikey_value,$unikey_name);
        $created_count = $updated_row_counts['created'];
        $updated_count = $updated_row_counts['updated'];
        $skipped_count = $updated_row_counts['skipped'];
        
        $data_array['post_type'] = 'llms_order';
        if(isset($data_array['order_status'])) {
            $data_array['post_status'] = $data_array['order_status'];
        }
        /* Assign order date */
        if(!isset( $data_array['order_date'] )) {
            $data_array['post_date'] = current_time('Y-m-d H:i:s');
        } else {
            if(strtotime( $data_array['order_date'] )) {
                $data_array['post_date'] = date( 'Y-m-d H:i:s', strtotime( $data_array['order_date'] ) );
            } else {
                $data_array['post_date'] = current_time('Y-m-d H:i:s');
            }
        }
        if ($mode == 'Insert') {	
            $retID = wp_insert_post( $data_array );
            $mode_of_affect = 'Inserted';
            
            if(is_wp_error($retID) || $retID == '') {
                $core_instance->detailed_log[$line_number]['Message'] = "Can't insert this LLLMS Order. " . $retID->get_error_message();
                $wpdb->get_results("UPDATE $log_table_name SET skipped = $skipped_count WHERE $unikey_name = '$unikey_value'");
                return array('MODE' => $mode, 'ERROR_MSG' => $retID->get_error_message());
            }
            $core_instance->detailed_log[$line_number]['Message'] = 'Inserted LLMS Order ID: ' . $retID;
            $wpdb->get_results("UPDATE $log_table_name SET created = $created_count WHERE $unikey_name = '$unikey_value'");

        } 
        else {
            if ($mode == 'Update') {
				if($check == 'ORDER_ID'){
					$orderid = $data_array['ORDER_ID'];
					$post_type = 'llms_order';
					$update_query = "select ID from {$wpdb->prefix}posts where ID = '$orderid' and post_type = '$post_type' order by ID DESC";
					$ID_result = $wpdb->get_results($update_query);

					if (is_array($ID_result) && !empty($ID_result)) {
						$retID = $ID_result[0]->ID;
						$data_array['ID'] = $retID;
						wp_update_post($data_array);
						$mode_of_affect = 'Updated';

						$core_instance->detailed_log[$line_number]['Message'] = 'Updated Order ID: ' . $retID;
						$wpdb->get_results("UPDATE $log_table_name SET updated = $updated_count WHERE $unikey_name = '$unikey_value'");	
					} else{
						//$retID = wp_insert_post( $data_array );
						$mode_of_affect = 'Skipped';
						$core_instance->detailed_log[$line_number]['Message'] = "Skipped " ;
						$wpdb->get_results("UPDATE $log_table_name SET skipped = $skipped_count WHERE $unikey_name = '$unikey_value'");
                        $returnArr['MODE'] = $mode_of_affect;
				        return $returnArr;
                       
					}
				}else{
                    $mode_of_affect = 'Skipped';
					$core_instance->detailed_log[$line_number]['Message'] = "Skipped " ;
					$wpdb->get_results("UPDATE $log_table_name SET skipped = $skipped_count WHERE $unikey_name = '$unikey_value'");
					$returnArr['MODE'] = $mode_of_affect;
				    return $returnArr;
				}
			} 
		}
        $returnArr['ID'] = $retID;
        $returnArr['MODE'] = $mode_of_affect;
        return $returnArr;
    }

    public function insert_to_lifterlms_section_items($inserted_section_id, $post_id, $type){
        global $wpdb;
        $wpdb->insert( 
            "{$wpdb->prefix}lifterlms_section_items", 
            array("section_id" => $inserted_section_id, "item_id" => $post_id, "item_type" => "$type"),
            array('%d', '%d', '%s')
        );
    }

    public function update_to_lifterlms_section_items($inserted_section_id, $post_id, $type, $get_section_item_id){
        global $wpdb;
        $wpdb->update( 
            $wpdb->prefix.'lifterlms_section_items', 
            array('section_id' => $inserted_section_id,'item_id' => $post_id, "item_type" => "$type"),
            array( 'section_item_id' => $get_section_item_id )
        );
    }

    public function insert_to_lifterlms_quiz_questions($quiz_id, $question_post_id, $question_order){
        global $wpdb;
        $wpdb->insert( 
            "{$wpdb->prefix}lifterlms_quiz_questions", 
            array("quiz_id" => $quiz_id, "question_id" => $question_post_id, "question_order" => $question_order),
            array('%d', '%d', '%d')
        );
    }

    public function insert_post($post_title, $post_content, $post_type){
        $post_array['post_title'] = $post_title;
        $post_array['post_content'] = $post_content;
        $post_array['post_type'] = $post_type;
        $post_array['post_status'] = 'publish';

        $post_id = wp_insert_post($post_array);
        return $post_id;
    }

    public function update_post($post_title, $post_content, $post_type, $id){
        $update_array['post_title'] = $post_title;
        $update_array['post_content'] = $post_content;
        $update_array['post_type'] = $post_type;
        $update_array['post_status'] = 'publish';
        $update_array['ID'] = $id;

        wp_update_post($update_array);
    }
}