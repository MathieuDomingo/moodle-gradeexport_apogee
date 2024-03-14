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
 * Strings for component 'gradeexport_apogee', language 'fr'
 *
 * @package    gradeexport_apogee
 * @author     Anthony Durif - Université Clermont Auvergne
 * @copyright  2019 Anthony Durif - Université Clermont Auvergne
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['eventgradeexported'] = 'Notes exportées pour Apogée';
$string['pluginname'] = 'Fichier pour Apogée';
$string['privacy:metadata'] = 'Le plugin d\'export des notes pour Apogée ne stocke aucune donnée personnelle.';
$string['timeexported'] = 'Dernier téléchargement depuis ce cours';
$string['apogee:view'] = 'Utiliser l\'export pour Apogée';
$string['apogee:publish'] = 'Publier l\'export pour Apogée';

$string['select_file'] = 'Fichier source';
$string['source_file'] = 'Source';
$string['select_file_help'] = 'Fichier source extrait d\'Apogée contenant la liste des étudiants pour lesquels renseigner la note obtenue pour l\'élément d\'évaluation selectionné.';
$string['select_file_error'] = 'Veuillez renseigner un fichier source pour pouvoir faire l\'export';
$string['delimiter'] = 'Séparateur de colonne';
$string['delimiter_help'] = 'Séparateur de colonne utilisé dans le fichier source. Ce séparateur sera également utilisé dans le fichier qui sera généré avec les notes des utilisateurs.';
$string['examplecsv'] = 'Fichier .csv exemple extrait d\'Apogée';
$string['examplecsv_help'] = 'Fichier .csv extrait d\'Apogée présentant un exemple de structure attendue par le plugin.';
$string['startlist_delimiter'] = 'Délimiteur du début de la liste';
$string['startlist_delimiter_desc'] = 'Délimiteur (chaîne de caractères) indiquant que la liste des utilisateurs commencera à la ligne juste après celle possédant ce délimiteur.<br/>
                                                Il peut être laissé vide si vous n\'avez pas besoin de délimiteur et que toutes les lignes du fichier doivent être traitées.';
$string['mapping_type'] = 'Mapping des étudiants';
$string['mapping_type_desc'] = 'Comment relier les étudiants inscrits au cours avec les étudiants listés dans le fichier .csv fourni.';
$string['mapping_type_name'] = 'Nom-prénom';
$string['mapping_type_idnumber'] = 'Numéro étudiant-Numéro d\'identification';
$string['email_regexp_criteria'] = 'Critère de tri sur l\'adresse email';
$string['email_regexp_criteria_desc'] = 'Expression régulière définie sur l\'adresse mail pour filtrer les utilisateurs à afficher dans la sélection. Si laissé vide alors aucun filtre ne sera appliqué.';
$string['auth_criteria'] = 'Crtitère de tri sur la méthode d\'authentification';
$string['auth_criteria_desc'] = 'Méthodes d\'authentification à utiliser pour filtrer les utilisateurs à afficher dans la sélection. Si laissé vide alors aucun étudiant ne sera remonté.';

$string['attendance'] = 'Gestion des absences';
$string['attendance_desc'] = '<div class="alert alert-info">Grâce aux deux champs de sélection suivants vous pouvez identifier les étudiants absents. En fonction du type d\'absence la bonne valeur sera donnée pour la saisie dans Apogée:
    <strong>ABJ</strong> pour une absence justifiée et <strong>ABI</strong> pour une absence injustifiée. Ces valeurs pourront être ajoutées si besoin à postériori dans le fichier généré.</div>';
$string['attendance_abj'] = 'Absence(s) justifiée(s) - ABJ';
$string['attendance_abi'] = 'Absence(s) injustifiée(s) - ABI';
$string['attendance_error'] = 'Erreur dans la sélection: des étudiants ne peuvent pas être sélectionnés dans les absences justifiées ET dans les absences injustitifées.';