<?php

include 'connect.php';
include 'read.php';
include 'form.php';

mysqli_free_result($result);
mysqli_close($conn);

 ?>

<!DOCTYPE html>
<html>
<head>
<title>جدول الاحصائيات</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
<link rel="stylesheet" href="CPStyle.css">

</head>


<body>

<h3 id="cpLogo">لوحة تحكم جدول الاحصائيات</h3>

<div class="CPdiv">
<form action="CP.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">علم الدولة : </label>
    <input type="text" class="form-control" id="state_img" name="state_img">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اسم الدولة : </label>
    <input type="text" class="form-control" id="state_name" name="state_name">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">الشهداء : </label>
    <input type="text" class="form-control" id="deaths" name="deaths">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">الجرحى : </label>
    <input type="text" class="form-control" id="injuries" name="injuries">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">المعتقلين : </label>
    <input type="text" class="form-control" id="arrested" name="arrested">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">مهجرين : </label>
    <input type="text" class="form-control" id="displaced" name="displaced">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">اعتداءات : </label>
    <input type="text" class="form-control" id="assaults" name="assaults">
  </div>

  <input name="submit" type="submit">
</form>
</div>


</body>
</html>
