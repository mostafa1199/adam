<?php

  $conn = mysqli_connect('localhost', 'root', '', 'adam');

if (!$conn) {
  echo 'Error : ' . mysqli_connect_error();
}
?>
