<!DOCTYPE html>
<html>
<head>
    <title>La sua richiesta è accettata.</title>
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
    <h1>La sua richiesta è accettata.</h1>

    <p>
        Grazie per il vostro ordine! <br>
        Il nostro operatore Vi contatterà al più presto. Si prega di accendere il telefono di contatto.
    </p>

    <table style="margin: auto">

        <tr>
            <th>Ordine №:</th>
            <td><?= $order_id ?></td>
        </tr>


        <tr>
            <th>Nome:</th>
            <td><?= $order_name; ?></td>
        </tr>


        <tr>
            <th>Telefono per la comunicazione:</th>
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