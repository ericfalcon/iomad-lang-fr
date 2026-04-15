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
 * @subpackage framework_selector
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcallusgetselectedframework'] = 'Vous ne pouvez pas appeler framework_selector::get_selected_framework si la sélection multiple est vraie.';
$string['clear'] = 'Effacer';
$string['frameworkselectorautoselectunique'] = 'Si un seul référentiel correspond à la recherche, sélectionnez-le automatiquement';
$string['frameworkselectorpreserveselected'] = 'Conserver les référentiels sélectionnés, même s\'ils ne correspondent plus à la recherche';
$string['frameworkselectorsearchanywhere'] = 'Faites correspondre le texte de recherche n\'importe où dans le nom du référentiel';
$string['frameworkselectortoomany'] = 'framework_selector a obtenu plus d\'un référentiel sélectionné, même si multiselect est faux.';
$string['nomatchingframeworks'] = 'Aucun référentiel ne correspond à \'{$a}\\';
$string['none'] = 'Aucun';
$string['pleasesearchmore'] = 'Veuillez rechercher un peu plus';
$string['pleaseusesearch'] = 'Veuillez utiliser la recherche';
$string['pluginname'] = 'Sélecteurs de référentiel';
$string['previouslyselectedframeworks'] = 'Les référentiels précédemment sélectionnés ne correspondent pas à \'{$a}\\';
$string['privacy:metadata'] = 'Le plug-in Local Iomad de sélection de référentiel affiche uniquement les données stockées dans d\'autres emplacements.';
$string['search'] = 'Chercher';
$string['searchoptions'] = 'Options de recherche';
$string['toomanyframeworksmatchsearch'] = 'Trop de référentiels ({$a->count}) correspondent à \'{$a->search}\\';
$string['toomanyframeworkstoshow'] = 'Trop de référentiels ({$a}) à afficher';
