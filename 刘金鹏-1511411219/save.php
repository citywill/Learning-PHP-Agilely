<html>
<head>
<meta http-equiv="refresh" content="5;url=index.html">
<title>保存留言</title>
</head>
<?php
header("Content-type:text/html;charset=utf-8");
$str = $_POST['title'] . ", " . $_POST['content'] . "\n";
$fh = fopen('./file.txt', 'a');
fwrite($fh, $str);
fclose($fh);
echo '留言成功！</br>';
?>
页面将在5秒内跳转！！</br>
<a href = 'index.html'>继续留言</a>
<a href = 'check.php'>查看留言</a>
</html>