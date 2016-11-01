<?php
define('URL', 'http://localhost:8090/liuliyan1511421102');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
<form action="<?php echo URL ?>/save.php" method="post">
	<div>
		姓名<input type="text" size="6" name="user">
	</div>
	<div>
    		出生年月
    		<input type="text" size="12" name="birthday">
    </div>
    <div>
    			电子邮箱
    		<input type="text" name="email">
    </div>
    <button type="submit">提交</button>
</form>
</form>
</body>
</html>