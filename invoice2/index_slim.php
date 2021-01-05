<!DOCTYPE html>
<html>

<head>
    <script>
        (function(window) {
            if (window.location !== window.top.location) {
                window.top.location = window.location;
            }
        })(this);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <?php if (isset($title)): ?>
        <title><?php echo $title ?></title>
    <?php else: ?>
        <title>Thank you for buying!</title>
    <?php endif ?>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="nofollow" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,700" rel="stylesheet">
    <style>
        body {
            background-color: #e4edf6;
            font-family: 'Roboto', Arial, Helvetica, sans-serif;
        }

        .success-wrap {
            max-width: 1000px;
            height: 500px;
            margin: 110px auto;
            position: relative;
        }

        .success-text-block {
            position: relative;
            z-index: 1;
        }

        .success__thanks {
            text-transform: uppercase;
            margin-top: 0;
            margin-bottom: 10px;
            font-size: 68px;
            color: #5981a4;
            -webkit-transform: scaleY(1.4);
            -ms-transform: scaleY(1.4);
            transform: scaleY(1.4);
        }

        .success__phrase {
            white-space: pre-line;
            margin: 0;
            font-size: 18px;
            font-weight: 300;
            color: #363636;
        }

        .success__phrase2 {
            margin-top: 10px;
        }

        .success__img {
            width: 100%;
            height: auto;
            position: absolute;
            top: -10%;
            z-index: 0;
        }

        @media screen and (max-width: 1140px) {
            .success-wrap {
                margin: 100px 100px;
            }

            .success__img {
                top: -5%;
            }

        }

        @media screen and (max-width: 950px) {
            .success__img {
                top: 7%;
                left: 10%;
            }
        }

        @media screen and (max-width: 768px) {
            .success-wrap {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
                text-align: center;
                margin: 80px 20px
            }

            .success__img {
                position: static;
                max-width: 70%;
                margin-top: 20px;
            }

            .success__thanks {
                font-size: 35px;
            }

            .success__phrase {
                font-size: 26px;
                line-height: 1.2;
            }
        }
    </style>
</head>

<body>


<div class="success-wrap">
    <div class="success-text-block">
        <h1 class="success__thanks">VIELEN DANK!</h1>

        <p class="success__phrase">Ihre Bestellung wurde aufgenommen und
            wird von unseren Mitarbeitern bearbeitet!</p>
        <p class="success__phrase success__phrase2">In der nahen Zukunft wird sich unser Spezialist mit Ihnen umgehend
            in Verbindung setzen, um die weiteren Details zu besprechen!</p>
    </div>
    <img src="http://webtorgsrc.com/slim4vitde/r1/img/gift.jpg" alt="" class="success__img">
</div>

<?php
    if ($fb_pixel) {
        require_once ('pieces/fb_pixel.php');
    }
    require_once ('trackers_order.php');

?>
</body>
</html>
