<?php
require 'config.php';

$pageUrl = explode('/', strtolower($_GET['page']));

function outputPDF ($file, $savename = 'file.pdf') {
	header("Content-type: application/pdf");
	header('Content-Disposition: inline; filename="'.$savename.'"');
	readfile($file);
	exit;	
}
 
 $VitaeFiles = array("Anthony Hyde" => "vitahyde2011-abet",
 					 "Jeffrey Beasley" => "jbeasley-2011",
					 "Kenny A. Stevens" => "k_stevens_2011",
					 "Lynn S. Kelly" => "lkelly-2010",
					 "Paul Ricketts" => "cricketts-2011",
					 "Ruinian Jiang" =>"jiang-2011",
					 "Thomas W. Jenkins" => "tjenkins-2011"       
 );


$testName = ucwords(str_replace("-", " ", $pageUrl[1]));
if (array_key_exists($testName, $VitaeFiles)){
		$file = $testName;
		$mypath = 'files/abet_vitae_'.$VitaeFiles[$testName];
		outputPDF($mypath.".pdf", $file);
	}


else{

$smarty->assign("DepartmentLink","/");
$smarty->assign("DepartmentName","ABET Accreditation Documentation - Mechanical Engineering Technology");
$smarty->assign("Breadcrumbs", array(
	array("ABET Accreditation", "#"),
	array("Mechanical Engineering Technology", SITE_ROOT),
	array("Faculty ==".$testName, "#")));





$smarty->assign("ContentTitle", "Faculty");
$smarty->assign("ContentSubtitle", "MET Faculty Vitae");
$pageTemplate = 'one-column.tpl';


foreach ($VitaeFiles as $name => $row) {
      
             $slink .= '<a href="'.str_replace(" ", "-", $name).'/" role="menuitem" class="list-group-item">'.$name.'<span class="badge">pdf</span></a>';
		}//end for
	
$sections[] = array("title" => " ",
			      "content" => '<div class="list-group" role="menu">'.$slink.'</div>');


$smarty->assign("Sections", $sections);
$smarty->display($pageTemplate);

}

?>