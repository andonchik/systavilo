<?php
global $companyInfo, $landings_default_domain, $default_main_site;
global $prepaid_info_html;

$company_detail = isset($companyInfo['detail']) ? $companyInfo['detail'] : 'ООО "Интернет реклама" &nbsp; ИНН 8721147082 &nbsp; КПП 230211102 &nbsp;  ОГРН 5247716358181';
$company_address = isset($companyInfo['address']) ? $companyInfo['address'] : '115035, г. Москва, Большой грузинский переулок д. 2/2, к. А';
?>
<p><?= $company_detail ?></p>
<p><?= $company_address ?></p>
<a class="nav-link"  href="" onclick="window.open('http://<?= $landings_default_domain ?>/policy2.php'); return false;">Политика конфиденциальности</a>
