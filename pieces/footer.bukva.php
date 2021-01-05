<?php

global $landings_default_domain, $default_main_site, $companyInfo;
$doclinks = isset($doclinks) ? $doclinks : true;
$pplink = isset($pplink) ? $pplink : true;
if (array_key_exists('pplink', $_GET) && $_GET['pplink'] == '0') {
  $pplink = false;
}
$realOGRN = isset($realOGRN) ? $realOGRN : true;
$newOGRN = isset($newOGRN) ? $newOGRN : true;
$realContacts = isset($realContacts) ? $realContacts : true;
$linksPosition = isset($linksPosition) ? $linksPosition : 'column';
$policy = isset($policy) ? $policy : true;

$company_detail = isset($companyInfo['detail']) ? $companyInfo['detail'] : '';
$company_address = isset($companyInfo['address']) ? $companyInfo['address'] : '';
?>
<p>
  <?php if ($company_detail): ?>
    <?= $company_detail ?>
  <?php elseif ($newOGRN): ?>
  	ООО "Интернет реклама"   ИНН 8721147082   КПП 230211102   ОГРН 5247716358181
  <?php elseif ($realOGRN): ?>
    ООО "Руссланд Груп" ОГРН 1147746391627 
  <?php else: ?>
    ООО "Руссланд Груп" ОГРН 1147742391637
  <?php endif ?>
</p>

<p>
  <?php if ($company_address): ?>
    <?= $company_address ?>
  <?php elseif ($newOGRN): ?>
  	115035, г. Москва, Большой грузинский переулок д. 2/2, к. А
  <?php elseif ($realContacts): ?>
    117437, г.Москва, ул.Островитянова, д.29/12, оф. 9П
  <?php else: ?>
    Москва, Пятницкое шоссе 24
  <?php endif ?>
</p>

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
