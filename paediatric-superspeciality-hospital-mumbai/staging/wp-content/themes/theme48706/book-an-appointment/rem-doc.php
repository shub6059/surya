<?php /* Template Name: Remove Doctor */ ?>
<?php #get_header(); ?>
<?php 
	$dbhost = "localhost";
    $dbname = "surya_suryasite";
    $dbuser = "surya";
    $dbpass = "Xsc0mp@098";
    $db = "";

	try {

		$db = new PDO("mysql:host=$dbhost;dbname=$dbname;", $dbuser, $dbpass);

	} catch (PDOException $e) {
		echo $e;
	} 
	if(isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) # && $_SESSION['role'] === 'admin')
	{
		$table = $_REQUEST['from'];
		//$callingScript = $_REQUEST['calling_script'];

		$allowedTables = array(
			'wp_custom_doctors'
			);

		if(in_array($table, $allowedTables))
		{
//			else
//			{
				$res = deleteRow($_REQUEST['id'], $table);
//			}

			if($res)
			{
				echo "Deleted successfully";
			}
			else
			{
				echo "Failed to delete";
			}
		}
		
	}
	else{
		echo "Seems like you've landed here by mistake... Please click the back button...";
	}


function deleteRow($rowId='', $table='')
{
	$allowedTables = array(
			'wp_custom_doctors'
			);

	// checks if the row id is numeric and the table is in the allowed tables list
	if(!empty($rowId) && is_numeric($rowId) && !empty($table) && in_array($table, $allowedTables))
	{	
		global $db;
		
		$sql = "DELETE FROM $table WHERE id=:id LIMIT 1";

		//echo $sql;
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $rowId, PDO::PARAM_INT);

		
		if($stmt->execute())
		{
			if($stmt->rowCount() == 1)
			{
				echo "Deleted successfully";
				return true;
			}
			else
			{
				return $stmt->ErrorInfo();
			}

		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
 ?>
 <?php get_footer(); ?>