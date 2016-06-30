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
	$bread[] = array("Courses", SITE_ROOT."documentation/courses/");
	include_once("data/courses.data");
	if (count($pageUrl) >= 3 && array_key_exists($pageUrl[2], $metCourses)) {
		/* Move selected course into easy to use variable */
		$course = $metCourses[$pageUrl[2]];
		
		$docArray = array("syllabi","sample-good.pdf","sample-average.pdf","sample-bad.pdf");
		if (count($pageUrl) == 4 && in_array($pageUrl[3], $docArray)) {
			$t_sFile = str_replace('-','_',substr($pageUrl[3], 0, -4));
			$file = $course[$t_sFile];
			if (!isset($file)) {
				$file = 'files/test.pdf';
			}
			header("Content-type: application/pdf");
			header("Content-Disposition: inline; filename=filename.pdf");
			@readfile($file);
			exit;
		}
		
		$bread[] = array($pageUrl[2], SITE_ROOT."documentation/courses/".$pageUrl[2]);
		$smarty->assign("ContentTitle",strtoupper($pageUrl[2]));
		$smarty->assign("ContentSubtitle",$course['title']);
		$sections = array(
	array("title" => "Course Description",
	      "content" => '<figure class="figure-bordered figure-inline pull-right">
                            <img class="img-responsive" data-src="holder.js/200x300/auto/#882345:#fff" alt="200x300 Holder image" />
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida cursus massa et convallis. Vivamus non quam nec urna maximus eleifend. Mauris non sapien ac erat vehicula luctus. Etiam faucibus ligula eu eros varius, nec finibus lacus feugiat. Nunc quis sem suscipit, consectetur ex sed, scelerisque lectus. Phasellus turpis nunc, rutrum a consectetur vitae, dictum in magna. Ut vel faucibus nisl. Maecenas ac sagittis orci. In lacinia vitae nisl ac fermentum. Curabitur rutrum ipsum magna, ut imperdiet massa vestibulum eu.</p>
                        <p>Aenean at orci ac nunc gravida imperdiet. Proin pretium enim eget elit faucibus iaculis. Suspendisse fringilla, leo sit amet volutpat eleifend, nunc massa suscipit risus, ac facilisis sem massa vel tortor. Vivamus ullamcorper mi tortor, nec tincidunt nisl feugiat sollicitudin. Sed volutpat consequat sapien, at faucibus enim. Pellentesque varius bibendum diam vel elementum. Aenean non leo vitae sapien varius aliquet id eu sem. Sed sit amet accumsan lorem. Vivamus dictum at justo a fringilla.</p>
                        <p>Mauris scelerisque ante ac molestie tempor. Ut commodo ligula in tristique viverra. Mauris condimentum sollicitudin gravida. Fusce ullamcorper pharetra ipsum. Phasellus in nisi sit amet ante efficitur egestas id eu augue. Fusce gravida metus vitae tellus suscipit tincidunt. Nam vitae aliquam felis. In porta, sem ac sodales condimentum, orci felis malesuada quam, eu luctus libero erat in nisl. Quisque in aliquam elit, quis tristique enim. Donec vitae imperdiet metus, eu congue arcu. Nulla facilisi. Quisque quis turpis dictum, fringilla arcu vitae, sollicitudin sapien. Pellentesque sed lacus vitae ex tristique scelerisque. Donec volutpat sem eget elementum vestibulum. </p>
                        '),
	array("title" => "Syllabi",
	      "content" => '<figure class="figure-bordered figure-inline pull-right">
                            <img class="img-responsive" data-src="holder.js/200x300/auto/#882345:#fff" alt="200x300 Holder image" />
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida cursus massa et convallis. Vivamus non quam nec urna maximus eleifend. Mauris non sapien ac erat vehicula luctus. Etiam faucibus ligula eu eros varius, nec finibus lacus feugiat. Nunc quis sem suscipit, consectetur ex sed, scelerisque lectus. Phasellus turpis nunc, rutrum a consectetur vitae, dictum in magna. Ut vel faucibus nisl. Maecenas ac sagittis orci. In lacinia vitae nisl ac fermentum. Curabitur rutrum ipsum magna, ut imperdiet massa vestibulum eu.</p>
                        <p>Aenean at orci ac nunc gravida imperdiet. Proin pretium enim eget elit faucibus iaculis. Suspendisse fringilla, leo sit amet volutpat eleifend, nunc massa suscipit risus, ac facilisis sem massa vel tortor. Vivamus ullamcorper mi tortor, nec tincidunt nisl feugiat sollicitudin. Sed volutpat consequat sapien, at faucibus enim. Pellentesque varius bibendum diam vel elementum. Aenean non leo vitae sapien varius aliquet id eu sem. Sed sit amet accumsan lorem. Vivamus dictum at justo a fringilla.</p>
                        <p>Mauris scelerisque ante ac molestie tempor. Ut commodo ligula in tristique viverra. Mauris condimentum sollicitudin gravida. Fusce ullamcorper pharetra ipsum. Phasellus in nisi sit amet ante efficitur egestas id eu augue. Fusce gravida metus vitae tellus suscipit tincidunt. Nam vitae aliquam felis. In porta, sem ac sodales condimentum, orci felis malesuada quam, eu luctus libero erat in nisl. Quisque in aliquam elit, quis tristique enim. Donec vitae imperdiet metus, eu congue arcu. Nulla facilisi. Quisque quis turpis dictum, fringilla arcu vitae, sollicitudin sapien. Pellentesque sed lacus vitae ex tristique scelerisque. Donec volutpat sem eget elementum vestibulum. </p>
                        '));
	$t_sHW = "";
	foreach (array("good","average","bad") as $i) {
			$t_sHW .= '<a href="sample-'.$i.'.pdf" role="menuitem" class="list-group-item">The '.ucfirst($i).'<span class="badge">pdf</span></a>';
	}
		$sections[] = array("title" => "Sample Homework",
			      "content" => '<div class="list-group" role="menu">'.$t_sHW.'</div>');
	} else {
		$pageTemplate = 'one-column.tpl';

		$smarty->assign("ContentTitle", "Courses");
		$smarty->assign("ContentSubtitle","Mechanical Engineering Technology");
		$url = SITE_ROOT . "documentation/courses/";
		$sections = array();
		foreach($metCourses as $c_title => $c_data) {
			$sections[] =  array(
				"title" => strtoupper($c_title)." - ".$c_data['title'],
			      "titleLink" => $url.$c_title."/",
			      "content" => "Course Description");
		}
	}
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
		      "content" => '<p>What is this? Who knows?</p>')
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