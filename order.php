<?php
if (isset($_COOKIE["order_id"])){
    $order_id = $_COOKIE["order_id"];
    $order_name = $_COOKIE["order_name"];
    $order_phone = $_COOKIE["order_phone"];
    $product_name = $_COOKIE["product_name"];
}

require_once('config.php');
global $invoice, $invoiceTemplate;

if (isset($_COOKIE["fb_pixel"])) {
    if (isset($order_id)) {
        $lead = 1;
    }
    $fb_pixel = $_COOKIE['fb_pixel'];
    $product_price = $_COOKIE['product_price'];
    $product_currency = $_COOKIE['product_currency'];
}

$invoice_path = 'invoice2/' . (isset($invoice) ? $invoice : (isset($invoiceTemplate) ? $invoiceTemplate : 'index.php'));

require_once ($invoice_path);
