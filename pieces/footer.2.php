<?php
global $companyInfo, $landings_default_domain, $default_main_site;
global $prepaid_info_html;
$doclinks = isset($doclinks) ? $doclinks : true;
$pplink = isset($pplink) ? $pplink : true;
if (array_key_exists('pplink', $_GET) && $_GET['pplink'] == '0') {
  $pplink = false;
}
$linksPosition = isset($linksPosition) ? $linksPosition : 'column';
$policy = isset($policy) ? $policy : true;

$company_detail = isset($companyInfo['detail']) ? $companyInfo['detail'] : 'ООО "Интернет реклама" &nbsp; ИНН 8721147082 &nbsp; КПП 230211102 &nbsp;  ОГРН 5247716358181';
$company_address = isset($companyInfo['address']) ? $companyInfo['address'] : '115035, г. Москва, Большой грузинский переулок д. 2/2, к. А';
?>
<p><?= $company_detail ?></p>
<p><?= $company_address ?></p> 

<?php if($linksPosition == 'line'): ?>

    <p class="tlight-link">

      <?php if($pplink): ?>
<!--        <a class="nav-link" target="_blank" href="">Партнёрская программа</a> |-->
      <?php endif ?>
      
      <?php if($doclinks): ?>
        <a class="nav-link"  href="" onclick="window.open('policy2.php'); return false;">Политика конфиденциальности</a> |

      <?php endif ?>
    </p>

<?php else: ?>  
    <?php if ($prepaid_info_html && !empty($prepaid_info_html)): ?>
      <p class="tlight-link">
        <a href="//z246.ru/" target="_blank">Предоплата заказа</a>
      </p>
    <?php endif ?>
    <?php if($pplink): ?>
<!--      <p class="tlight-link">-->
<!--        <a class="nav-link" target="_blank" href="">Партнёрская программа</a>-->
<!--      </p>-->
    <?php endif ?>

    <?php if($doclinks): ?>

      <?php if ($policy): ?>
      <p class="conf-link doclinks">
        <a class="nav-link"  href="" onclick="window.open('policy2.php'); return false;">Политика конфиденциальности </a>
      </p>
      <?php endif ?>


    <?php endif ?>

<?php endif ?>
