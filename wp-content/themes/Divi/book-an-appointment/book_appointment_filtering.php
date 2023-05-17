<?php 
// echo "Sucessss";
 $city = $_REQUEST['city'];
// echo $_REQUEST['city'];
 $sql = "SELECT distinct(speciality) FROM  xscustom_doctors  WHERE city LIKE  '".$city."%' ORDER BY speciality";
//    echo $sql;
    /*$dbhost = "localhost";
    $dbname = "suryahos_live";
    $dbuser = "suryahos_live";
    $dbpass = "5O{)K9[_sZJD";
    $db = "";*/
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

     $doctors = mysqli_query($db,$sql);

     ?><option value="">-- Select Speciality --</option><?php

     foreach ($doctors as $doctor)

     {

        if ($doctor['speciality'] <> '')

        {

          ?>
          <option value="">-- Select Doctor --</option><option value="<?php  echo $doctor['speciality']; ?>"><?php  echo ucwords($doctor['speciality']); ?></option><?php          

        }

     }

?>