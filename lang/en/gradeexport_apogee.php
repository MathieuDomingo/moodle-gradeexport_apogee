<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'gradeexport_apogee', language 'en'
 *
 * @package    gradeexport_apogee
 * @author     Anthony Durif - Université Clermont Auvergne
 * @copyright  2019 Anthony Durif - Université Clermont Auvergne
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['eventgradeexported'] = 'Apogée grade exported';
$string['pluginname'] = 'File for Apogée';
$string['privacy:metadata'] = 'The Apogée export plugin does not store any personal data.';
$string['timeexported'] = 'Last downloaded from this course';
$string['apogee:view'] = 'Use Apogée grade export';
$string['apogee:publish'] = 'Publish Apogée grade export';

$string['select_file'] = 'Source file';
$string['source_file'] = 'Source';
$string['select_file_help'] = 'Source file extracted from Apogée with the list of students whose we want to add grade for the selected grade item.';
$string['select_file_error'] = 'You must supply a source file to proceed to the grades export';
$string['delimiter'] = 'Column delimiter';
$string['delimiter_help'] = 'Column delimiter used in the source file. This delimiter will be also used in the export with users grades.';
$string['examplecsv'] = 'Example .csv file from Apogée';
$string['examplecsv_help'] = 'Example .csv file from Apogée with an expected structure example.';
$string['startlist_delimiter'] = 'Users list start delimiter';
$string['startlist_delimiter_desc'] = 'Delimiter (string) which indicate the users list will start at the line just after the one with this delimiter.<br/>
                                                It can be set to empty/null if you do not want use delimiter and run every lines if the given file.';
$string['mapping_type'] = 'Students mapping';
$string['mapping_type_desc'] = 'How do you map course enrolled students to students listed in the given .csv file.';
$string['mapping_type_name'] = 'Lastname-firstname';
$string['mapping_type_idnumber'] = 'Student number-Id number';
$string['email_regexp_criteria'] = 'Sort criteria on email address';
$string['email_regexp_criteria_desc'] = 'Regular expression defined on users\' email address to filter users to display in the form. If the field is empty no filter will be applied.';
$string['auth_criteria'] = 'Sort criteria on authentification';
$string['auth_criteria_desc'] = 'Authentification methods to take to sort students. If empty no student will be displayed.';

$string['attendance'] = 'Attendance management';
$string['attendance_desc'] = '<div class="alert alert-info">With the two selection fields below you can identify absent students. In function of the type of their non attendance a value will be added for the import in Apogée:
    <strong>ABJ</strong> for a justified non attendance and <strong>ABI</strong> for an unjustified non attendance. These values can be added in the file after its generation if needed.</div>';
$string['attendance_abj'] = 'Justified non attendance(s) - ABJ';
$string['attendance_abi'] = 'Unjustified non attendance(s) - ABI';
$string['attendance_error'] = 'Error during the selection: students cannot be selected in the justified AND unjustified non attendance lists.';