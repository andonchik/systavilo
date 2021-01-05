<!DOCTYPE html>
<html>
<head>
    <title>Pedido hecho con éxito</title>
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
    <h1>Pedido hecho con éxito.</h1>

    <p>
        Gracias por su pedido! Nuestro operador se pondrá en contacto con Usted dentro de un día hábil.
        <br>
        Por favor, incluya su número de teléfono.
    </p>

    <table style="margin: auto">

        <tr>
            <th>Pedido №:</th>
            <td><?= $order_id ?></td>
        </tr>


        <tr>
            <th>Nombre:</th>
            <td><?= $order_name; ?></td>
        </tr>


        <tr>
            <th>Teléfono de contacto:</th>
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