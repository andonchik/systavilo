<?php

// Подключаем SxGeo.php класс
include("SxGeo.php");
$SxGeo = new SxGeo('SxGeo.dat');

$ip = $_SERVER['REMOTE_ADDR'];

var_export($SxGeo->get($ip));