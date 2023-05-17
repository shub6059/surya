<?php 

 $subSpeciality = $_REQUEST['subSpeciality'];
$city = $_REQUEST['city'];
$speciality = $_REQUEST['speciality'];
 $sql = "SELECT name FROM  xscustom_doctors
  WHERE speciality like '%".$speciality."%' AND sub_speciality like  '%".$_REQUEST['subSpeciality']."%' AND city like '%".$city."%'";
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
     $sub_speciality = mysqli_query($db,$sql);
     ?><option value="">-- Select Doctor --</option><?php
     foreach ($sub_speciality as $row)
     {
        ?><option value="<?php  echo $row['name']; ?>"><?php  echo ucwords(strtolower($row['name'])); ?></option><?php
     }
?>