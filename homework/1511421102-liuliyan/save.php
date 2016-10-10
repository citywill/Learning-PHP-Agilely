<?php
var_dump($_POST);
file_put_contents($file = (time() . mt_rand(0, 5) . '.php'), serialize($_POST)); //返回写入到文件内数据的字节数

?>