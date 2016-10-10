<?php
$name = $_POST['name'];
$sex = $_POST['sex'];
$num = $_POST['num'];
header("Content-type:text/html;charset=utf-8");
$str = $_POST['name'] . ", " . $_POST['sex'] . ", " . $_POST['num'] . "\n";
$fh = fopen('./save.txt', 'a');
fwrite($fh, $str);
fclose($fh);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <h1>Form for me</h1>
</head>
<body>
  <h2>Information</h2>
  <?php
  date_default_timezone_set("Asia/Shanghai");
  echo "Order processed at :";
  echo date("H:i, jS F Y");
  echo "<br/><br/>";
  echo "name: ";
  echo $name.'<br/>';
  echo "sex: ";
  echo $sex. '<br/>';
  echo "num: ";
  echo $num. '<br/>';
  ?>
  ---------------------------------------------------
  <br/>
  <?php
echo 'success to save！</br>';
?>
</body>
</html>
<a href = 'readsave.php'>read save information</a>