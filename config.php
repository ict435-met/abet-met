<?php
define("SITE_ROOT", "https://web.nmsu.edu/~fparra/ICT435-project/abet-met/");

require 'vendor/autoload.php';
$smarty = new Smarty;
$smarty->setTemplateDir(__DIR__ . '/templates/');
$smarty->setCompileDir(__DIR__ . '/smarty/templates_c/');
$smarty->setCacheDir(__DIR__ . '/smarty/cache/');
$smarty->setConfigDir(__DIR__ . '/smarty/configs/');
?>
