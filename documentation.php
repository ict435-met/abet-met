<?php
require 'config.php';

$bread = array(
	array("ABET Accreditation", "#"),
	array("M.E.T.", SITE_ROOT),
	array("Documentation", SITE_ROOT."documentation/"));

$pageTemplate = 'two-column.tpl';
// Process that page data we're 'hopefully' given
$pageUrl = explode('/', strtolower($_GET['page']));

/* If we're given a link of courses/foo/bar 
 */
if ($pageUrl[1] == "courses") {
	@include_once("data/courses.data");
} else if ($pageUrl[1] == "objectives-and-outcomes-archives") {
		$pageTemplate = 'one-column.tpl';
		include("data/RockObjects.data");
} else {
	$pageTemplate = 'one-column.tpl';
	$smarty->assign("ContentTitle","Documentation");
	$smarty->assign("ContentSubtitle",$_GET['page']);
	$url = SITE_ROOT . "documentation/";
	$sections = array(
		array("title" => 'Outcome Measures (WEAVE Documentation)',
                      "titleLink" => $url."outcome-measures/",
		      "content" => '<p>What is Outcomes measures? Who knows?</p>'),
		array("title" => 'Objectives and Outcomes Archives',
                      "titleLink" => $url."objectives-and-outcomes-archives/",
		      "content" => '<p>What is this? Who knows?</p>'),
		array("title" => 'IAC Agenda and Minutes',
                      "titleLink" => $url."iac-agenda-and-minutes/",
		      "content" => '<p>What is this? Who knows?</p>'),
		array("title" => 'Options Assessments Meetings',
                      "titleLink" => $url."options-assessments-meetings/",
		      "content" => '<p>What is this? Who knows?</p>'),
		array("title" => 'Courses',
                      "titleLink" => $url."courses/",
		      "content" => '<p>What is this? Who knows?</p>'),
	);
} 
		

$smarty->assign("Sections", $sections);
$smarty->assign("Breadcrumbs", $bread);
$smarty->assign("DepartmentLink","#");
$smarty->assign("DepartmentName","ABET Accreditation Documentation - Mechanical Engineering Technology");
$smarty->display($pageTemplate);

?>