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
 * Function used in export process.
 *
 * @package    gradeexport_apogee
 * @author     Université Clermont Auvergne - Anthony Durif
 * @copyright  2019 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once($CFG->dirroot.'/grade/export/lib.php');
require_once($CFG->libdir . '/csvlib.class.php');
require_once('classes/custom_csv_export_writer.php');

/**
 * Privacy Subsystem implementation for gradeexport_apogee.
 *
 * @package    gradeexport_apogee
 * @copyright  2019 Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class grade_export_apogee extends grade_export {

    public $plugin = 'apogee';
    public $datas;

    //Const variable used to define the start of the user list in the file. The use and the update of the file will start just after this line.
    //It can be set to null if you do not want use delimiter and run every lines if the given file.
    const STARTLIST_DELIMITER = 'XX_ETUDIANTS_XX';
    //Array const variable with all differents dilimiters we can use.
    const DELIMITERS = ['semicolon' => ';', 'comma' => ',', 'tab' => '/t'];

    /**
     * Constructor should set up all the private variables ready to be pulled
     * @param object $course
     * @param stdClass $formdata The validated data from the grade export form.
     * @param stdClass $form The form
     */
    public function __construct($course, $formdata) {
        parent::__construct($course, 0, $formdata);

        // Overrides.
        $this->usercustomfields = true;
        $this->datas = $formdata;
    }

    public function get_export_params() {
        $params = parent::get_export_params();
        return $params;
    }

    public function print_grades() {
        global $DB;

        $content = $this->datas->content;
        $csv = str_getcsv($content, "\n");
        $process = false;

        //$csvexport = new csv_export_writer($this->datas->delimiter);
        // We call our custom export_writer class and use a custom enclosure, we choose an enclosure (~) with low chances to be in the exported source file.
        // We add these custom export_writer and  enclosure uses because default enclose (") can cause a bug with composed names.
        $csvexport = new custom_csv_export_writer($this->datas->delimiter, "~");
        $shortname = format_string($this->course->shortname, true, array('context' => context_course::instance($this->course->id)));
        $downloadfilename = clean_filename($shortname . get_string('grades'));
        $csvexport->set_filename($downloadfilename);

        $item = $DB->get_record('grade_items', array('id' => $this->datas->item));
        $bareme = ($item) ? $item->grademax : "";

        foreach($csv as $key => $row) {
            $row = str_getcsv($row, $this::DELIMITERS[$this->datas->delimiter]);
            if(($row[0] == $this::STARTLIST_DELIMITER && !$process) || $this::STARTLIST_DELIMITER == null) {
                //Test if the line is the header of the users list. If it is we change the flag $process to start the use of this list with the next line.
                //We also start the process if the const STARTLIST_DELIMITER is not used/defined.
                $process = true;
            }
            if($process && is_numeric($row[0])) {
//                //Read the file content
                $user = $DB->get_record('user', array('idnumber' => $row[0]));
                if($user) {
                    $grade = $DB->get_record('grade_grades', array('itemid' => $item->id, 'userid' => $user->id));
                    if($grade) {
//                        Update of the content with the item bareme and the item grade of this user
                        $row[4] = round($grade->finalgrade, 3);
                        $row[5] = round($bareme);
                    }
                }
            }

            $csvexport->add_data($row);
        }

        $csvexport->download_file();
        exit;
    }
}