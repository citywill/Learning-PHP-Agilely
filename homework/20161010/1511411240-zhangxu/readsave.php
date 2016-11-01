<?php
$str1 = "姓名:";
$str2 = "性别:";
$str3 = "学号:";
$fh = fopen('./save.txt', 'r');
while (($row = fgetcsv($fh)) != false) {
	echo '<p>', $str1, $row[0], '</p>';
	echo '<p>', $str2, $row[1], '</p>';
	echo '<p>', $str3, $row[2], '</p>';
}
?>
<a href = 'write.html'>continue to write</a>