<?php
require 'config.php';

$pageUrl = explode('/', strtolower($_GET['page']));

function outputPDF ($file, $savename = 'file.pdf') {
	header("Content-type: application/pdf");
	header('Content-Disposition: inline; filename="'.$savename.'"');
	readfile($file);
	exit;	
}


 $VitaeFiles=array ();
        
 $VitaeFiles = array(
            array("name" => "Anthony Hyde",
                   "fileName" => "vitahyde2011-abet"),
            array("name" => "Jeffrey Beasley",
					"fileName" => "jbeasley-2011"),       
            array("name" => "Kenny A. Stevens",
                  "fileName" => "k_stevens_2011"),
			array("name" => "Lynn S. Kelly",
					"fileName" => "lkelly-2010"),
 			array("name" => "Paul Ricketts",
 		 			"fileName" => "cricketts-2011"),
			array("name" => "Ruinian Jiang",
					"fileName" =>"jiang-2011"),
			array("name" => "Thomas W. Jenkins",
					"fileName" => "tjenkins-2011"),
       
 );



if (count($pageUrl) == 3 ){
		$file = $pageUrl[1];
		$mypath=SITE_ROOT.'files/abet_vitae_'.$pageUrl[1];
		outputPDF($mypath.".pdf", $file);
	}


else{

$smarty->assign("DepartmentLink","/");
$smarty->assign("DepartmentName","ABET Accreditation Documentation - Mechanical Engineering Technology");
$smarty->assign("Breadcrumbs", array(
	array("ABET Accreditation", "#"),
	array("Mechanical Engineering Technology", SITE_ROOT),
	array("Faculty", "#")));





$smarty->assign("ContentTitle", "Faculty");
$smarty->assign("ContentSubtitle", "MET Faculty Vitae");
$pageTemplate = 'one-column.tpl';


foreach ($VitaeFiles as $i => $row) {
      
             $slink .= '<a href="'.$row[fileName].'/" role="menuitem" class="list-group-item">'.$row[name].$pageUrl[1].'<span class="badge">pdf</span></a>';
		}//end for
	
$sections[] = array("title" => " ",
			      "content" => '<div class="list-group" role="menu">'.$slink.'</div>');


$smarty->assign("Sections", $sections);
$smarty->display($pageTemplate);

}

?>