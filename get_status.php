<?php

require_once('config.php');

$data = array(
    'key' => $apiKey,

    // настраиваем фильтры, можно испоьзовать как один так и несколько фильтров
    // получаем данные по id  в нашей системе
    'id' => ['xxxxxx', 'xxxxxx'],

    // получаем данные по id  в вашей системе
    //'id2' => ['xxxxxx', 'xxxxxx'],

    // получаем все заявки по заданной дате
    //'date' => ['2018-07-01', '2018-07-15'],

);

function http_build_query_noindex($a, $b=0, $c=0){
    if (!is_array($a)) { return false; }
    foreach ((array)$a as $k=>$v){
        if ($c) { $k = $b."[]"; }
        elseif (is_int($k)) { $k = $b . $k; }
        if (is_array($v)||is_object($v)) {
            $r[]=http_build_query_noindex($v, $k, 1);
            continue;
        }
        $r[] = urlencode($k) . "=" . urlencode($v);
    }
    return implode("&", $r);
}

$result = file_get_contents($apiGetLeadUrl.'?'.http_build_query_noindex($data, ''));

$obj = json_decode($result);

 if (null === $obj) {
    // Ошибка в полученном ответе
    echo "Invalid JSON";
} elseif (!empty($obj->errmsg)) {
    // Ошибка в отправленом запросе
    echo "Ошибка: " . $obj->errmsg;
} else {
    print('Получено заявок: ' . $obj->count . "<br>" . PHP_EOL);

    foreach ($obj->leads as $lead) {
        print($lead->id . ' - ' . $lead->status . "<br>" . PHP_EOL);
    }
}

