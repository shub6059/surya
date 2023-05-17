<?php

class WCP_Questionaire_Model 
{
	public static $db;

	public function __construct()
	{
	
	}

	public static function get_all_schools($limit=0 ,$page=0,$total_pages=0,$query='')
	{
		global $wpdb;
		$filters ='';
		if(!empty($query))
		{
			$filters ="AND
						education_agency_name LIKE '%".$query."%'
						OR unique_school_id LIKE '%".$query."%'
						OR school_name LIKE '%".$query."%'
						OR location LIKE '%".$query."%'
						OR city LIKE '%".$query."%'
						OR state LIKE '%".$query."%'
						OR zip LIKE '%".$query."%'
						OR pubpriv LIKE '%".$query."%'
						";
		}
			
		$limit= '';
		if(!empty($limit))
		{
			$limit ='LIMIT '.$limit;
		}

		$offset= '';
		if(!empty($offset))
		{
			$offset ='OFFSET '.($page*$limit);
		}

		$schools = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix .'school_data where unique_school_id !="" '.$filters.' '.$limit.' '.($offset).' ', OBJECT );
		return $schools;
	}


	public static function get_all_schools_fulltext($limit=0 ,$page=0,$total_pages=0,$query='')
	{
		global $wpdb;
		$filters ='';
		if(!empty($query))
		{
			$filters ="AND
						education_agency_name LIKE '%".$query."%'
						OR unique_school_id LIKE '%".$query."%'
						OR school_name LIKE '%".$query."%'
						OR location LIKE '%".$query."%'
						OR city LIKE '%".$query."%'
						OR state LIKE '%".$query."%'
						OR zip LIKE '%".$query."%'
						OR pubpriv LIKE '%".$query."%'
						";
		}
			
		$limit= '';
		if(!empty($limit))
		{
			$limit ='LIMIT '.$limit;
		}

		$offset= '';
		if(!empty($offset))
		{
			$offset ='OFFSET '.($page*$limit);
		}

		$schools = $wpdb->get_results( 'SELECT * FROM '.$wpdb->prefix .'school_data where unique_school_id !="" AND MATCH(*) ANGAINST(\'+'.$query.'\' IN BOOLEAN MODE) '.$limit.' '.($offset).' ', OBJECT );
		return $schools;
	}

	public static function get_schools_count($query)
	{
		global $wpdb;
		$filters ='';
		if(!empty($query))
		{
			$filters ="AND
						education_agency_name LIKE '%".$query."%'
						OR unique_school_id LIKE '%".$query."%'
						OR school_name LIKE '%".$query."%'
						OR location LIKE '%".$query."%'
						OR city LIKE '%".$query."%'
						OR state LIKE '%".$query."%'
						OR zip LIKE '%".$query."%'
						OR pubpriv LIKE '%".$query."%'
						";
		}

		$total = $wpdb->get_results( 'SELECT count(*) as total FROM '.$wpdb->prefix .'school_data where unique_school_id !="" '.$filters.' ',object);
		return $total[0]->total;
	}
}