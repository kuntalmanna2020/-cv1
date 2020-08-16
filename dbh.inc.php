<?php

 $servername="localhost";
 $dbusername="root";
 $dbpassword="123456@7890km2020";
 $dbname="myuser";

 $conn=mysqli_connect( $servername, $dbusername, $dbpassword, $dbname);

 if (mysqli_connect_errno())
  {
      echo "mysql is not coonect".mysqli_connect_error(); 
      exit();    # code...
 }
 