<?php 



 $speciality = $_REQUEST['speciality'];

$city = $_REQUEST['city'];



 $sql = "SELECT distinct(sub_speciality) FROM  xscustom_doctors

  WHERE speciality like  '".$speciality."%' AND city like '%".$city."%'  AND sub_speciality <> 'In house gyanecology' ORDER BY sub_speciality";

    $dbhost = "localhost";
    $dbname = "u787437357_suryahos_live";
    $dbuser = "u787437357_suryahos_live";
    $dbpass = "5O{)K9[_sZJD";
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

     ?><option value=""> -- Select Subspeciality -- </option><?php

     foreach ($sub_speciality as $row)

     {

          ?><option value="<?php  echo $row['sub_speciality']; ?>"><?php  echo ucwords(strtolower($row['sub_speciality'])); ?></option><?php

     }

?>