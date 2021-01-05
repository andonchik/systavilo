<?php
$file_translate = __DIR__.'/languages/'. $language . '.php';

if (file_exists($file_translate)) {
    require_once($file_translate);
} else {
    $file_translate = __DIR__.'/languages/ru.php';
    require_once($file_translate);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $lang['title']; ?></title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nofollow" />
    <link rel="stylesheet" type="text/css" href="invoice2/static/style.css" media="all">
    <style>
        body { margin-top: 50px }
    </style>
</head>

<body>
<?php if($order_id) { ?>
    <h1><?php echo $lang['h1']; ?></h1>

    <p>
        <?php echo $lang['thanks']; ?><br>
        <?php echo $lang['thanks2']; ?>
    </p>

    <table style="margin: auto">

        <tr>
            <th><?php echo $lang['ordered']; ?></th>
            <td>
                <p><?= $product_name ?></p>
            </td>
        </tr>

        <tr>
            <th><?php echo $lang['order']; ?></th>
            <td><?= $order_id ?></td>
        </tr>


        <tr>
            <th><?php echo $lang['name']; ?></th>
            <td><?= $order_name; ?></td>
        </tr>


        <tr>
            <th><?php echo $lang['phone']; ?></th>
            <td><?= $order_phone; ?></td>
        </tr>


    </table>

<?php
    if ($fb_pixel) {
        require_once ('pieces/fb_pixel.php');
    }
    require_once ('trackers_order.php');
}
else {
    echo 'Error!';
}
?>

</body>
</html>