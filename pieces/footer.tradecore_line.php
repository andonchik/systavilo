<?php
global $landings_default_domain, $default_main_site;
$doclinks = isset($doclinks) ? $doclinks : true;
$pplink = isset($pplink) ? $pplink : true;
if (array_key_exists('pplink', $_GET) && $_GET['pplink'] == '0') {
  $pplink = false;
}
$realOGRN = isset($realOGRN) ? $realOGRN : true;
$newOGRN = isset($newOGRN) ? $newOGRN : true;;
$realContacts = isset($realContacts) ? $realContacts : true;
$linksPosition = isset($linksPosition) ? $linksPosition : 'column';
$policy = isset($policy) ? $policy : true;

?>
<p> ООО «ТРЭЙД КОРЕ»  ОГРН 1177746024444  </p>
<p>115191,  г. Москва,  ул. Рощинская,  д. 4,  помещение IA ком. 1 </p>

<p class="tlight-link">
    <?php if($pplink): ?>
<!--    <a class="nav-link" target="_blank" href="">Партнёрская программа</a> |-->
    <?php endif ?>
    
    <?php if($doclinks): ?>
    <a class="nav-link"  href="" onclick="window.open('policy2.php'); return false;">Политика конфиденциальности</a> |

    <?php endif ?>
</p>

