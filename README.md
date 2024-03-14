Moodle UCA - Grade export for Apogée (moodle-gradeexport_apogee)
==================================
Grade export plugin made to export a file with users grades which we can use in the Apogée software.

Requirements
------------
- Moodle 3.3 (build 2017051500) or later.<br/>
-> Tests made on Moodle 3.3 to 4.2 versions<br/>

Installation
------------
1. Local plugin installation

- Git way:
> git clone https://github.com/andurif/moodle-gradeexport_apogee.git grade/export/apogee<br/>
> git checkout MOODLE_400_STABLE (if necessary)

- Download way:
> Download the zip from https://github.com/andurif/moodle-gradeexport_apogee/archive/refs/heads/MOODLE_400_STABLE.zip, unzip it in grade/export/ folder and rename it "apogee" if necessary or install it from the "Install plugin" page if you have the right permissions.

2. Then visit your Admin Notifications page to complete the installation.

3. Once installed, you should see new administration options:

> Site administration -> Grades -> Export settings -> File for Apogée -> startlist_delimiter

This option will determine the start of the users list in the .csv used file. If this variable is met, it means the next lines will correspond to students lines where we need to add their grades.

> Site administration -> Grades -> Export settings -> File for Apogée -> mapping_type

This option will determine the type of mapping used to match users from the given file to users in the database.

> Site administration -> Grades -> Export settings -> File for Apogée -> email_regexp_criteria

This option will allow to define a regular expression on email address to filter users who need to display in the form.

> Site administration -> Grades -> Export settings -> File for Apogée -> auth_criteria

This option will allow to define authentification methods to use to filter users who need to display in the form. Be careful, if there is not selected method users won't be displayed.<br/>
Until plugin version v4.2-r2 (build 2024031100) only cas and ldap methods were used to filter displayed users in the form.

  
Description / Working
------
<p> This plugin aim is to export a file with students' grades for a course or a grade item (test, assign...) which can be used in the Apogée software with SNW.
Because the Apogée software requires a formatted file with some informations we do not have in the moodle platform, we choose to work with an existing preformatted file, edited from the software and already with the entire list of student we want to grade (e.g example.csv file) and that we will need to import in the plugin.<br/>
To summarize, this plugin will read the given file and will complete it with students' grades.
</p> 
<p>A form is made to ask the user to provide the preformatted file from Apogée, then to choose which grade item is used and the field delimiter used in the file if necessary.</p>
<p>The system will use the start list delimiter defined in the plugin configuration in order to indicate where this list of students starts in the file.<br/>
This setting was directly integrated in the plugin previous versions code but it is now an administation setting to add more flexibility.</p>
<p>In the form it will be possible to identify absent students and to associate a specific Apogée value (ABJ for a justified non attendance and ABI for a unjustified non attendance).</p>

<p>Note: to link file data and users stored in database, we already have set two possible mappings: on lastname/firstname and on idnumber.
It's possible to choose in the plugin configuration which method will be use to match users.<br/>
According to your configuration, it could be needed for now to directly change the <i>print_grades()</i> function of this same .php file to permit the link with another field of the mdl_user table or from another column.</p>


To do / Improvements
------
* Define in the interface columns or values to use to match users (like we had the grades importation preview).
* Maybe juste provide the header file en then complete it with all enrolled users ? 
* More tests


About us
------
<a href="https://www.uca.fr">Université Clermont Auvergne</a> - 2023
