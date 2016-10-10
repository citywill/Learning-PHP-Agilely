<?php
$name = $_POST['name'];
$sex = $_POST['sex'];
$num = $_POST['num'];
file_put_contents('save.txt', serialize($_POST));
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
echo $name . '<br/>';
echo "sex: ";
echo $sex . '<br/>';
echo "num: ";
echo $num . '<br/>';
?>
  ---------------------------------------------------
  <br/>
</body>
</html>