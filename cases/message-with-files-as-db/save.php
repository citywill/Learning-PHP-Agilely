<?php
//获得通过post传过来的数据
$data = $_POST;

//留言提交的时间
$data['time'] = time();

//准备数据文件
//安全代码.换行.序列化数组
$content = '<?php die();' . chr(10) . serialize($data);

//将留言数据序列化后写入数据文件
file_put_contents('data/' . $data['time'] . '.php', $content);

//跳转到首页
header("Location: ./index.php");
