<?php
  $host = 'database-1.ckkgrraa22jm.us-east-1.rds.amazonaws.com';
  $user = 'admin';
  $pass = 'admin123';
  $db = 'db_siswa';

  $conn = mysqli_connect($host, $user, $pass, $db);

  if($conn){
  }

  mysqli_select_db($conn, $db);
?>
