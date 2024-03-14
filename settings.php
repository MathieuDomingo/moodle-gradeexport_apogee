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
 * List of administration settings used in the block's display.
 *
 * @package    gradeexport_apogee
 * @author     Anthony Durif - Université Clermont Auvergne
 * @copyright  2020 Anthony Durif - Université Clermont Auvergne
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if ($hassiteconfig) {
    $settings = new admin_settingpage('gradeexport_apogee', get_string('pluginname', 'gradeexport_apogee'));
    $ADMIN->add('localplugins', $settings);

    // Limit of courses shown in the list view by default.
    $settings->add(new admin_setting_configtext(
        'gradeexport_apogee/startlist_delimiter',
        get_string('startlist_delimiter', 'gradeexport_apogee'),
        get_string('startlist_delimiter_desc', 'gradeexport_apogee'),
        'XX_ETUDIANTS_XX'
    ));

    $settings->add(new admin_setting_configselect(
        'gradeexport_apogee/mapping_type',
        get_string('mapping_type', 'gradeexport_apogee'),
        get_string('mapping_type_desc', 'gradeexport_apogee'),
        'idnumber',
        array(
            'name' => get_string('mapping_type_name', 'gradeexport_apogee'),
            'idnumber' => get_string('mapping_type_idnumber', 'gradeexport_apogee'),
        )
    ));

    $settings->add(new admin_setting_configtext(
        'gradeexport_apogee/email_regexp_criteria',
        get_string('email_regexp_criteria', 'gradeexport_apogee'),
        get_string('email_regexp_criteria_desc', 'gradeexport_apogee'),
        '/.+@etu\.yourdomain\.com$/'
    ));

    $auth_plugins = [];
    foreach (get_enabled_auth_plugins() as $plugin) {
        $auth_plugins[$plugin] = get_auth_plugin($plugin)->get_title();
    }
    $settings->add(new admin_setting_configmultiselect(
        'gradeexport_apogee/auth_criteria',
        get_string('auth_criteria', 'gradeexport_apogee'),
        get_string('auth_criteria_desc', 'gradeexport_apogee'),
        ['cas', 'ldap'],
        $auth_plugins
    ));

}