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
 * @subpackage template_selector
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['cannotcallusgetselectedtemplate'] = 'Vous ne pouvez pas appeler template_selector::get_selected_template si la sélection multiple est vraie.';
$string['clear'] = 'Effacer';
$string['nomatchingtemplates'] = 'Aucun modèle ne correspond à \'{$a}\\';
$string['none'] = 'Aucun';
$string['pleasesearchmore'] = 'Veuillez rechercher un peu plus';
$string['pleaseusesearch'] = 'Veuillez utiliser la recherche';
$string['pluginname'] = 'Sélecteurs de modèles';
$string['previouslyselectedtemplates'] = 'Les modèles précédemment sélectionnés ne correspondent pas à \'{$a}\\';
$string['privacy:metadata'] = 'Le plug-in de sélecteurs de modèles Location Iomad affiche uniquement les données stockées dans d\'autres emplacements.';
$string['search'] = 'Chercher';
$string['searchoptions'] = 'Options de recherche';
$string['templateselectorautoselectunique'] = 'Si un seul modèle correspond à la recherche, sélectionnez-le automatiquement';
$string['templateselectorpreserveselected'] = 'Conserver les modèles sélectionnés, même s\'ils ne correspondent plus à la recherche';
$string['templateselectorsearchanywhere'] = 'Faites correspondre le texte de recherche n\'importe où dans le nom du modèle';
$string['templateselectortoomany'] = 'template_selector a obtenu plus d\'un modèle sélectionné, même si multiselect est faux.';
$string['toomanytemplatesmatchsearch'] = 'Trop de modèles ({$a->count}) correspondent à \'{$a->search}\\';
$string['toomanytemplatestoshow'] = 'Trop de modèles ({$a}) à afficher';
