<?php
require 'config.php';

$smarty->assign("DepartmentLink","/");
$smarty->assign("DepartmentName","ABET Accreditation Documentation - Mechanical Engineering Technology");
$smarty->assign("Breadcrumbs", array(
	array("ABET Accreditation", "#"),
	array("Mechanical Engineering Technology", SITE_ROOT),
	array("Objectives and Outcomes", "#")));
$smarty->assign("Sections", array(
	array("title" => "Educational Objectives",
	      "content" => "This is a test,")
		
$smarty->display('index.tpl');
?>