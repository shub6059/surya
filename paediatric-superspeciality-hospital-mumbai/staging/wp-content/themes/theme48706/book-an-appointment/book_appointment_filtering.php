<?php 
// echo "Sucessss";
 $city = $_REQUEST['city'];
 echo $_REQUEST['city'];
 $sql = "SELECT distinct(speciality) FROM  xscustom_doctors  WHERE city LIKE  '".$city."%' ORDER BY speciality";
    echo $sql;
    $dbhost = "localhost";
    $dbname = "surya_suryasite";
    $dbuser = "surya";
    $dbpass = "Xsc0mp@098";
    $db = "";

    if (mysqli_connect($dbhost, $dbuser, $dbpass,$dbname))
    {
        //echo "Success";
        $db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
    }
    else
    {
        die();
    }
     $doctors = mysqli_query($db,$sql);
     ?><option value="">-- Select Speciality --</option><?php
     foreach ($doctors as $doctor)
     {
        if ($doctor['speciality'] <> '')
        {
          ?><option value="<?php  echo $doctor['speciality']; ?>"><?php  echo ucwords($doctor['speciality']); ?></option><?php          
        }
     }
?>