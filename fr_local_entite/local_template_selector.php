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
 * Strings for component 'local_template_selector', language 'fr'
 *
 * @package    local
 * @subpackage template_selector
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['cannotcallusgetselectedtemplate'] = 'Vous ne pouvez pas appeler template_selector::get_selected_template lorsque la sélection multiple est activée.';
$string['clear'] = 'Effacer';
$string['nomatchingtemplates'] = 'Aucun modèle ne correspond à « {$a} »';
$string['none'] = 'Aucun';
$string['pleasesearchmore'] = 'Veuillez affiner votre recherche';
$string['pleaseusesearch'] = 'Veuillez utiliser la recherche';
$string['pluginname'] = 'Sélecteur de modèles';
$string['previouslyselectedtemplates'] = 'Les modèles précédemment sélectionnés ne correspondent pas à « {$a} »';
$string['privacy:metadata'] = 'Le plugin local IOMAD de sélection de modèles n’enregistre aucune donnée personnelle.';
$string['search'] = 'Rechercher';
$string['searchoptions'] = 'Options de recherche';
$string['templateselectorautoselectunique'] = 'Sélectionner automatiquement le modèle s’il est le seul à correspondre à la recherche';
$string['templateselectorpreserveselected'] = 'Conserver les modèles sélectionnés, même s’ils ne correspondent plus à la recherche';
$string['templateselectorsearchanywhere'] = 'Faire correspondre le texte recherché n’importe où dans le nom du modèle';
$string['templateselectortoomany'] = 'Le sélecteur de modèles a retourné plusieurs modèles sélectionnés alors que la sélection multiple est désactivée.';
$string['toomanytemplatesmatchsearch'] = 'Trop de modèles ({$a->count}) correspondent à « {$a->search} »';
$string['toomanytemplatestoshow'] = 'Trop de modèles à afficher ({$a})';