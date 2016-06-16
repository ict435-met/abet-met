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
	      "content" => '<p>The baccalaureate degree curriculum of the Mechanical Option in Engineering Technology at New Mexico State University will prepare graduates with the knowledge base, problem solving abilities, and practical skills of mechanical aptitude necessary to enter careers that involve the design, installation, manufacture, testing, evaluation, technical sales, or maintenance of mechanical systems encountered in industry, consulting, or government. Graduates will have the ability to analyze, perform applied design, develop, implement, or oversee advanced mechanical systems and processes.</p>
<h3>NMSU MET (ABET Criterion 9)</h3>
<p><em>An ability to select and apply the knowledge, techniques, skills, and modern tools of the discipline;</em> to include:</p>
<p><em>9a</em> Algebra, trigonometry, Boolean mathematics, calculus, statistics and probability, fundamental principles and concepts of science and engineering technology, good practice in problem solving, and methods of standard practice in the analysis and applied design of mechanical systems.
(also ABET 3a, 3b, and 3d)</p>
<p><em>9b</em> Fundamental aspects of AC and DC circuits, electrical components, computer programming logic, instrumentation principles, experimental techniques, methods of standard practice in the testing and evaluation of mechanical systems, safety consciousness, critical thinking skills, and codes and standards.
(also ABET 3a, 3b, and 3c)</p>
<p><em>9c</em> Basic knowledge of manufacturing processes, engineering materials and their selection, measuring tools, machine tools, quality systems and processes, process improvement methods, economic principles, cost analysis techniques, and project management, relevant to mechanical technology areas.
(also ABET 3a, 3b, and 3d)</p>
<p><em>9d</em> Current software corresponding to good practice in the application of mechanical engineering technologies. Software application functions to include: word processing, spreadsheet calculations, graphing, presentation media, computer assisted drafting and manufacturing, manufacturing processes, statistics, data acquisition, project management, and the analysis and applied design of systems involving mechanisms, machines, or fluid and thermal processes.
(also ABET 3a)</p>
 <p><em>And, with respect to validation that graduates have been prepared for careers in their discipline, or postgraduate academic study in the discipline or a related one:</em></p>
<p><em>9e</em> Graduates will receive offers for employment positions, commensurate with the level of a Bachelor&#39;s degree in technology, or be accepted into a Master&#39;s degree program for which the degree constitutes a prerequisite.</p>
<p>After degree completion and following 2-5 years of employment in a field-related technical area, graduates will demonstrate competence in a specialty area, or in the management of technical personnel. This is facilitated by a curriculum designed not only to provide a broad scope of technical knowledge, but also to emphasize the understanding of fundamental principles, the utilization of modern tools, and the importance of communication and team skills.</p>
<p>In conjunction with the closely-related student outcomes, the above program educational objectives are intended to help ensure that graduates may better compete in a changing world.</p>'),
	array("title" => "Student Outcomes",
	      "content" => '<h3>Graduates in the NMSU Mechanical Engineering Technology program will have:</h3>
<p><strong>An appropriate mastery of the knowledge, techniques, skills and modern tools of Mechanical Engineering Technology, including the following ABET Criterion 3:</strong></p>
<p>3a. an ability to select and apply the knowledge, techniques, skills, and modern tools of the discipline to broadly-defined engineering technology activities;</p>
<p>3b. an ability to select and apply a knowledge of mathematics, science, engineering, and technology to engineering technology problems that require the application of principles and applied procedures or methodologies;</p>
<p>3c. an ability to conduct standard tests and measurements; to conduct, analyze, and interpret experiments; and to apply experimental results to improve processes;</p>
<p>3d. an ability to design systems, components, or processes for broadly-defined engineering technology problems appropriate to program educational objectives;</p>
<p>3e. an ability to function effectively as a member or leader on a technical team;</p>
<p>3f. an ability to identify, analyze, and solve broadly-defined engineering technology problems;</p>
<p>3g. an ability to apply written, oral, and graphical communication in both technical and nontechnical environments; and an ability to identify and use appropriate technical literature;</p>
<p>3h. an understanding of the need for and an ability to engage in self-directed continuing professional development;</p>
<p>3i. an understanding of and a commitment to address professional and ethical responsibilities including a respect for diversity;</p>
<p>3j. a knowledge of the impact of engineering technology solutions in a societal and global context; and</p>
<p>3k. a commitment to quality, timeliness, and continuous improvement.</p>
<p><strong>All student outcomes are listed and mapped under Criterion 3.</strong></p>')
));
$smarty->display('index.tpl');
?>
