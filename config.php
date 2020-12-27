<?php

$apiKey = '1KbExycmsFUp1x1ISwXDPuXpitxpOde3wAnD';          // Ключ доступа к API
$offer_id = 4540;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = '';     // id потока

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"18633":{"price2":"6580","price":"2290","id":18633,"country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"currency":{"code":"RUB","name":"\u0440\u0443\u0431"},"name":"\u0427\u0430\u0441\u044b Solar Watch"}}';
$dataOffer = '{"price2":"6580","price":"2290","id":18633,"country":{"code":"RU","name":"\u0420\u043e\u0441\u0441\u0438\u044f"},"currency":{"code":"RUB","name":"\u0440\u0443\u0431"},"name":"\u0427\u0430\u0441\u044b Solar Watch"}';
$productName = 'Часы Solar Watch';
$invoice = 'index.php';
$push_link = '';
$language = 'ru';
$companyInfo = array('address' => '108811, ГОРОД МОСКВА, КИЛОМЕТР КИЕВСКОЕ ШОССЕ 22-Й (П МОСКОВСКИЙ), ДОМОВЛАД. 4, КОРПУС Е СТР 5, БЛОК 502Е ЭТ 5 ОФ 15', 'detail' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ТОРГОВЛЯ" ОГРН: 5177746360985 ИНН: 9701097075 КПП: 775101001');

if(!$apiKey){
    echo 'Ключ доступа к API не определен. Получите в личном кабинете или обратитесь в службу поддержки';
    die;
}

if(!$offer_id){
    echo 'ID оффера не определен';
    die;
}
