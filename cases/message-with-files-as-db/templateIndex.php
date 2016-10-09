<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>message system without database</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="max-width: 600px;">
        <div class="page-header">
            <h1>一共有条<?php echo count($datas) ?>留言</h1>
        </div>
        <ul class="list-group">
        <?php foreach ($datas as $data): ?>
            <li class="list-group-item">[<?php echo date('Y-m-d', empty($data['time']) ? 0 : $data['time']); ?>]<br /><?php echo $data['content'] ?></li>
        <?php endforeach?>
        </ul>
        <div class="page-header">
            <h1>请留言</h1>
        </div>
        <form role="form" method="post" action="save.php">
            <div class="form-group">
                <label for="content">留言内容：</label>
                <input type="text" name="content" class="form-control" id="content" placeholder="留言内容">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</body>
</html>
