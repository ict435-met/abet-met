MET - ABET
=============================================
Website for ABET accreditation documentation.

Installation
---------------------------------------------
1. Unzip abet_met.tar.gz
2. Run ```make install```
3. Open config.php and change SITE_ROOT to match as it would appear in a browser

File Conventions
---------------------------------------------
* Course-related files - All files related to course documentation must be added to the course array inside data/courses.data.
⋅⋅* "syllabus" => "files/course-syllabi/filename.pdf"
⋅⋅* "lab_syllabus" => "files/course-syllabi/filename.pdf"
⋅⋅* "good" => "files/filename.pdf"
⋅⋅* "average" => "files/filename.pdf"
⋅⋅* "bad" => "files/filename.pdf"
* WEAVE Documentation - No code modification needed, looks for files automatically in "files".
⋅⋅* Expected file formatting "weave_darYYYY_YYYY.pdf" where YYYY_YYYY is like 2014_2015. Case sensitive.
* IAC Documentation - No code modification needed, looks for files automatically in "files".
⋅⋅* Expected file formatting "iacYYYYMMDD.pdf" . Case sensitive.
* Options Assessments Documentation - No code modification needed, looks for files automatically in "files".
⋅⋅* Expected file formatting "options_assessmentsYYYY.pdf" where YYYY is the year. Case sensitive.
*
*
*

Authors
----------------------------------------------
* Aaron Wood
* Brian Campbell
* Felipe Parra
* Louis Bear Eagle
* Rockson Opoku