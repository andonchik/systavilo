<!DOCTYPE html>
<html>
<head>
    <title>Заказ принят</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nofollow" />
    <link rel="stylesheet" type="text/css" href="style.css" media="all">
    <style>
        body { margin-top: 50px }
    </style>
</head>

<body>

    <h1>Ошибка!</h1>

    <h4>
        <?php echo $error_message; ?>
    </h4>

    <p><a href="#" onclick="history.back(); return false;">Вернуться назад</a></p>

    <script>
        console.log('error: ', '<?php echo $error_info; ?>');
    </script>
</body>
</html>