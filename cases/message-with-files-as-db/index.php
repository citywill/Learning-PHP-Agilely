<?php
/**
 * 该文件用于展示留言内容和留言表单
 */

//定义数据目录
$filePath = './data';

//遍历目录
$files = scandir($filePath);

$files = array_diff($files, array('..', '.'));

//对文件排序
rsort($files);

//获取每一条数据
foreach ($files as $file) {
    //获取每个文件的内容
    $content = file_get_contents($filePath . '/' . $file);

    //每个数据文件头部都有一段php安全代码，用于避免文件被直接访问
    $isData = strpos($content, '<?php die();' . chr(10));

    //如果存在安全代码说明这个文件是数据文件
    if ($isData !== false) {
        //获取去掉安全代码的数据内容
        $content = substr($content, strlen('<?php die();' . chr(10)) - strlen($content));

        //数据是序列化后的数组，需要反序列化
        //这个数组提供视图使用
        $datas[$file] = unserialize($content);
    }
}

//引入视图
include 'templateIndex.php';
