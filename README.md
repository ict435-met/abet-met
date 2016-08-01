MET - ABET
=============================================
Website for ABET accreditation documentation.

Installation
---------------------------------------------
1. Unzip abet_met.tar.gz
2. Run ```make install```
  - Download and install Composer
  - Download and configure Smarty Template Engine
  - Ensure Smarty directories are writeable
3. Open config.php and change SITE_ROOT to match as it would appear in a browser

Requirements
---------------------------------------------
* Apache Web Server with mod_rewrite enabled
* PHP 5+
* Make (CMake, GMake... something to read a makefile)

File Conventions
---------------------------------------------
* Course-related files - All files related to course documentation must be added to the course array inside data/courses.data.
  * "syllabus" => "files/course-syllabi/filename.pdf"
  * "lab_syllabus" => "files/course-syllabi/filename.pdf"
  * "good" => "files/filename.pdf"
  * "average" => "files/filename.pdf"
  * "bad" => "files/filename.pdf"
* WEAVE - No code modification needed, looks for files automatically in "files".
  * Expected file formatting "weave_darYYYY_YYYY.pdf" where YYYY_YYYY is like 2014_2015. Case sensitive.
* IAC - No code modification needed, looks for files automatically in "files".
  * Expected file formatting "iacYYYYMMDD.pdf" . Case sensitive.
* Options Assessments - No code modification needed, looks for files automatically in "files".
  * Expected file formatting "options_assessmentsYYYY.pdf" where YYYY is the year. Case sensitive.
* Objectives and Outcomes - No code modification needed, looks for files automatically in "files".
  * Expected file formatting "objective_outcomes_YYYY.pdf" where YYYY is the year. Case sensitive.
* Faculty Vitae
  * Files stored in files directory. Modify the array in faculty.php to include their name and filename.
* Self Study
  * File referenced in documentation.php. If changed update ```outputPDF("files/self_study.pdf", "met_self_study.pdf");```
* Facilities
  * File referenced in documentation.php. If changed update ```outputPDF("files/met_facilities.pdf", "met_facilities.pdf");```

Authors
----------------------------------------------
* Aaron Wood
* Brian Campbell
* Felipe Parra
* Louis Bear Eagle
* Rockson Opoku