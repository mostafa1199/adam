<?php

if (isset($_POST['submit'])) {
    $state_img = filter_var(($_POST['state_img']),FILTER_SANITIZE_STRING);
    $state_name = filter_var(($_POST['state_name']),FILTER_SANITIZE_STRING);
    $deaths = filter_var(($_POST['deaths']),FILTER_SANITIZE_STRING);
    $injuries = filter_var(($_POST['injuries']),FILTER_SANITIZE_STRING);
    $arrested = filter_var(($_POST['arrested']),FILTER_SANITIZE_STRING);
    $displaced = filter_var(($_POST['displaced']),FILTER_SANITIZE_STRING);
    $assaults = filter_var(($_POST['assaults']),FILTER_SANITIZE_STRING);
}


if (isset($_POST['submit'])) {

  $db = "INSERT INTO top_table(state_img, state_name, deaths, injuries, arrested, displaced, assaults)
  VALUES('$state_img', '$state_name', '$deaths', '$injuries', '$arrested', '$displaced', '$assaults')";

  if (empty($state_img)) {
  	echo 'يجب عليك ملء ادخال صورة الدولة';
  } elseif (empty($state_name)) {
  	echo 'يجب عليك ادخال اسم الدولة';
  } elseif (empty($deaths)) {
  	echo 'يجب عليك ادخال عدد الشهداء او القتلى';
  } elseif (empty($injuries)) {
  	echo 'يجب عليك ادخال عدد الجرحى';
  } elseif (empty($arrested)) {
  	echo 'يجب عليك ادخال عدد المعتقلين او الاسرى';
  } elseif (empty($displaced)) {
  	echo 'يجب عليك ادخال عدد المهجرين';
  } elseif (empty($assaults)) {
  	echo 'يجب عليك ادخال عدد الاعتداءات';
  }

  else {
  	if (mysqli_query($conn, $db)) {
  		header('Location: CP.php');
  	} else {
  		echo 'error: ', mysql_error($conn);
  	}
  }

}

 ?>
