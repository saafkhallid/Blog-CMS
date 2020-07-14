<?php
 $db_host="localhost";
 $db_user="root";
 $db_pass="";
 $db_name="blog_systeme";


 $connection=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
  if (!$connection) {
     die("could'not connect to the database". mysqli_error($connection));
     
 }
 ?>