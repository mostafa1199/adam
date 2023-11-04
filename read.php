<?php
$dbS = 'SELECT * FROM top_table';
$result = mysqli_query($conn, $dbS);
$top_table = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
