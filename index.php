<?php
include 'connect.php';
$query = "SELECT * FROM top_table";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>وكالة ادم</title>
    <link rel="icon" href="https://i.ibb.co/9gZx0w4/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width,intial-scale=1.0">
    <script src="script.js"></script>
</head>
<body>
  <div class="tableDiv">
    <?php
    if ($result && mysqli_num_rows($result) > 0) {
    ?>
    <table class="firstTable">
    <tr>
      <th>اخر تحديث : <br> منذ ساعتين</th>
      <th>شهداء وقتلى</th>
      <th>جرحى</th>
      <!-- <th>اعتقالات</th>
      <th>مهجرين</th>
      <th>اعتداءات</th> -->
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><img class="stateFlag" src="<?php echo htmlspecialchars($row['state_img']); ?>" alt="<?php echo htmlspecialchars($row['state_name']); ?>">
        <?php echo htmlspecialchars($row['state_name']); ?>
      </td>
      <td><a href="#"><?php echo htmlspecialchars($row['deaths']); ?></a></td>
      <td><a href="#"><?php echo htmlspecialchars($row['injuries']); ?></a></td>
    </tr>
    <?php
  }
  ?>
    <tr>
      <td colspan="3"><a href="file:///C:/xampp/htdocs/Adam/mainTable.html">الجدول الكامل ..</a></td>
    </tr>
    </table>
    <?php
  } else {
    echo "لم يتم العثور على بيانات.";
  }
  ?>
  </div>

  <div class="likeToday">
    <h4>في مثل هذا اليوم</h4>
    <p>Date</p>
    <table>
      <tr>
        <th>2007</th>
        <td>thgf</td>
      </tr>
      <tr>
        <th>2007</th>
        <td>rhgtrhtrhtryuijytlkiu;iu;iuk</td>
      </tr>
    </table>
  </div>

  <div class="lens">
    <h4><img src="https://cdn-icons-png.flaticon.com/512/15/15328.png" alt="">العدسة</h4>
    <div class="lensScrollable">
      <div class="lensVideo">
        <video controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
        </video>
        <p>انتهاكات</p>
        <span>10:21 PM</span>
      </div>

      <div class="lensVideo">
        <video controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
        </video>
        <p>انتهاكات</p>
        <span>10:21 PM</span>
      </div>

      <div class="lensVideo">
        <video controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
        </video>
        <p>انتهاكات</p>
        <span>10:21 PM</span>
      </div>

      <div class="lensVideo">
        <video controls>
          <source src="movie.mp4" type="video/mp4">
          <source src="movie.ogg" type="video/ogg">
        </video>
        <p>انتهاكات</p>
        <span>10:21 PM</span>
      </div>
    </div>
  </div>
</body>
</html>
