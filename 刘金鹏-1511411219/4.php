<?php
$str1 = "姓名:";
$str2 = "邮箱:";
$str3 = "留言标题:";
$str4 = "留言内容:";
$fh = fopen('./3.txt', 'r');
while (($row = fgetcsv($fh)) != false) {
	echo '<p>', $str1, $row[0], '</p>';
	echo '<p>', $str2, $row[1], '</p>';
	echo '<p>', $str3, $row[1], '</p>';
	echo '<p>', $str4, $row[1], '</p>';
}
?>
<a href = '1.html'>继续留言</a>