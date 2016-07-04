<?php
require 'config.php';

$bread = array(
	array("ABET Accreditation", "#"),
	array("M.E.T.", SITE_ROOT),
	array("Documentation", SITE_ROOT."documentation/"));

$pageTemplate = 'two-column.tpl';
// Process that page data we're 'hopefully' given
$pageUrl = explode('/', strtolower($_GET['page']));

if ($pageUrl[1] == "courses") {
	@include_once("data/courses.data");
} else if ($pageUrl[1] == "objectives-and-outcomes-archives") {
	@include_once("data/RockObjects.data");
//} else if ($pageUrl[1] == "outcome-measures") {
//	@include_once("data/outcome_measures.data");
//} else if ($pageUrl[1] == "iac-agenda-and-minutes") {
//	@include_once("data/iac.data");
//} else if ($pageUrl[1] == "options-assessments-meetings") {
//	@include_once("data/ioptions_assessments.data");

/* If there is no match for the sub-page display the default documentation portal */
} else {
	$pageTemplate = 'one-column.tpl';
	$smarty->assign("ContentTitle", "Documentation");
	$smarty->assign("ContentSubtitle", "Mechanical Engineering Technology");
	$url = SITE_ROOT . "documentation/";
	$sections = array(
		array("title" => 'Outcome Measures (WEAVE Documentation)',
                      "titleLink" => $url."outcome-measures/",
		      "content" => '<!-- -->'),
		array("title" => 'Objectives and Outcomes Archives',
                      "titleLink" => $url."objectives-and-outcomes-archives/",
		      "content" => '<!-- -->'),
		array("title" => 'IAC Agenda and Minutes',
                      "titleLink" => $url."iac-agenda-and-minutes/",
		      "content" => '<!-- -->'),
		array("title" => 'Options Assessments Meetings',
                      "titleLink" => $url."options-assessments-meetings/",
		      "content" => '<!-- -->'),
		array("title" => 'Courses',
                      "titleLink" => $url."courses/",
		      "content" => '<!-- -->'),
	);
} 

$smarty->assign("Sections", $sections);
$smarty->assign("Breadcrumbs", $bread);
$smarty->assign("DepartmentLink","#");
$smarty->assign("DepartmentName","ABET Accreditation Documentation - Mechanical Engineering Technology");
$smarty->display($pageTemplate);

?>