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
 * Local language pack from https://learnpre.norm-uni.fr
 *
 * @package    local
 * @subpackage course_selector
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcallusgetselectedcourse'] = 'Vous ne pouvez pas appeler course_selector::get_selected_course si la sélection multiple est vraie.';
$string['clear'] = 'Effacer';
$string['courseselectorautoselectunique'] = 'Si un seul cours correspond à la recherche, sélectionnez-le automatiquement';
$string['courseselectorpreserveselected'] = 'Conserver les cours sélectionnés, même s\'ils ne correspondent plus à la recherche';
$string['courseselectorsearchanywhere'] = 'Faites correspondre le texte de recherche n\'importe où dans le nom du cours';
$string['courseselectortoomany'] = 'course_selector a obtenu plus d\'un cours sélectionné, même si multiselect est faux.';
$string['nomatchingcourses'] = 'Aucun cours ne correspond à \'{$a}\\';
$string['none'] = 'Aucun';
$string['pleasesearchmore'] = 'Veuillez rechercher un peu plus';
$string['pleaseusesearch'] = 'Veuillez utiliser la recherche';
$string['pluginname'] = 'Sélecteurs de cours';
$string['previouslyselectedcourses'] = 'Cours précédemment sélectionnés ne correspondant pas à \'{$a}\\';
$string['privacy:metadata'] = 'Le plugin  Iomad de sélection de cours affiche uniquement les données stockées dans d\'autres emplacements.';
$string['search'] = 'Chercher';
$string['searchoptions'] = 'Options de recherche';
$string['toomanycoursesmatchsearch'] = 'Trop de cours ({$a->count}) correspondent à \'{$a->search}\\';
$string['toomanycoursestoshow'] = 'Trop de cours ({$a}) à afficher';
