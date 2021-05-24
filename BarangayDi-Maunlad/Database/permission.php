<?php

if($_SESSION['access'] == 'regular'){
  echo "<script> alert('You do not have permission to access this site'); window.location='index.php'; </script>";  
 }


?>