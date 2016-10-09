<?php
header("Content-type:text/html;charset=utf-8");
$str = $_POST['title'] . ", " . $_POST['content'] . "\n";
$fh = fopen('./3.txt', 'a');
fwrite($fh, $str);
fclose($fh);
echo '留言成功！</br>';
?>
<a href = '1.html'>继续留言</a>
<a href = '4.php'>查看留言</a>