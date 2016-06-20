<?php
require 'config.php';
$page = $_GET['page'];
$smarty->assign("DepartmentLink","/");
$smarty->assign("DepartmentName","ABET Accreditation Documentation - Mechanical Engineering Technology");
$smarty->assign("Breadcrumbs", array(
	array("ABET Accreditation", "#"),
	array("Mechanical Engineering Technology", SITE_ROOT),
	array("Faculty", "#")));
$smarty->assign('ContentSubtitle', 'DEBUG: '.$page);
$smarty->display('one-column.tpl');
?>