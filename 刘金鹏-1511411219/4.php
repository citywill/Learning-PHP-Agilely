<?php
$str1 = "留言标题:";
$str2 ="留言内容:";
$fh = fopen('./3.txt','r');
while(($row=fgetcsv($fh)) != false)
{
	echo '<p>',$str1, $row[0] ,'</p>';
	echo '<p>' ,$str2, $row[1] ,'</p>';
      
}
?>
<a href = '1.html'>继续留言</a>