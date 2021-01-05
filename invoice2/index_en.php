<!DOCTYPE html>
<html>
<head>
    <title>Order is accepted</title>
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
    <h1>Your order is accepted!</h1>

    <p>
        Thank you for your order! <br>
        Our operator will contact you shortly. Please turn on your contact phone number.
    </p>

    <table style="margin: auto">

        <tr>
            <th>Order №:</th>
            <td><?= $order_id ?></td>
        </tr>


        <tr>
            <th>Name:</th>
            <td><?= $order_name; ?></td>
        </tr>


        <tr>
            <th>Phone:</th>
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