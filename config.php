<?php

$apiKey = '1KbExycmsFUp1x1ISwXDPuXpitxpOde3wAnD';          // Ключ доступа к API
$offer_id = 4569;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = '';     // id потока

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"18747":{"price2":"215","price":"89","id":18747,"country":{"code":"BY","name":"\u0411\u0435\u043b\u0430\u0440\u0443\u0441\u044c"},"currency":{"code":"BYR","name":"Br"},"name":"\u0424\u0438\u0442\u043d\u0435\u0441-\u0431\u0440\u0430\u0441\u043b\u0435\u0442 Xiaomi Mi Band 5"}}';
$dataOffer = '{"price2":"215","price":"89","id":18747,"country":{"code":"BY","name":"\u0411\u0435\u043b\u0430\u0440\u0443\u0441\u044c"},"currency":{"code":"BYR","name":"Br"},"name":"\u0424\u0438\u0442\u043d\u0435\u0441-\u0431\u0440\u0430\u0441\u043b\u0435\u0442 Xiaomi Mi Band 5"}';
$productName = 'Фитнес-браслет Xiaomi Mi Band 5';
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
