<?php

require 'libs/Smarty.class.php';
use \includes\admin\internal\tasteamazon\TasteAmazon;
use \includes\admin\internal\tasteamazon\Product;

$smarty = new Smarty;

//$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign("name", "Dette er min test side til tasteamazon.com");

$smarty->display('tasteamazon/index.tpl');
