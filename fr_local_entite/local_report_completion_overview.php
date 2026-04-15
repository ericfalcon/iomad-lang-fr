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
 * @subpackage report_completion_overview
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['coursecompletion'] = '{$a} achèvement';
$string['courseexpiry'] = '{$a} expiration';
$string['coursestatus'] = 'Statut {$a}';
$string['coursesummary'] = 'Inscrit : {$a->enrolled} Commencé : {$a->timestarted} Terminé : {$a->timecompleted} Expire : {$a->timeexpires} Note : {$a->finalscore}';
$string['coursesummary_noexpiry'] = 'Inscrit : {$a->enrolled} Commencé : {$a->timestarted} Terminé : {$a->timecompleted} Note : {$a->finalscore}';
$string['coursesummary_nograde'] = 'Inscrit : {$a->enrolled} Commencé : {$a->timestarted} Terminé : {$a->timecompleted} Expire : {$a->timeexpires} Résultat : Réussi';
$string['coursesummary_nograde_noexpiry'] = 'Inscrit : {$a->enrolled} Commencé : {$a->timestarted} Terminé : {$a->timecompleted} Résultat : Réussi';
$string['coursesummary_partial'] = 'Terminé : {$a->timecompleted} Expire : {$a->timeexpires}';
$string['expired'] = 'Expiré';
$string['expiring'] = 'Exigible';
$string['notcompleted'] = 'En progression';
$string['notenrolled'] = 'Pas inscrit';
$string['pluginname'] = 'Rapport de synthèse d\'achèvement';
$string['privacy:metadata:local_report_user_lic_allocs'] = 'rapport local d\'Informations sur l\'utilisateur d\'attribution de licence utilisateur';
$string['privacy:metadata:local_report_user_lic_allocs:action'] = 'Action d’allocation';
$string['privacy:metadata:local_report_user_lic_allocs:courseid'] = 'Identifiant du cours';
$string['privacy:metadata:local_report_user_lic_allocs:id'] = 'rapport local ID d\'enregistrement d\'attribution de licence utilisateur';
$string['privacy:metadata:local_report_user_lic_allocs:issuedate'] = 'Horodatage Unix du problème de licence';
$string['privacy:metadata:local_report_user_lic_allocs:licenseid'] = 'ID de licence';
$string['privacy:metadata:local_report_user_lic_allocs:userid'] = 'ID de l\'utilisateur';
$string['report_completion_overview_title'] = 'Rapport de synthèse d\'achèvement';
$string['showexpiryonly'] = 'Surligner le cours avec une durée valide uniquement';
$string['showexpiryonly_help'] = 'Si cette option est cochée, les cours qui n\'ont pas de durée valide ne seront pas affichés en couleur dans l\'aperçu graphique par défaut.';
$string['showfulldetail'] = 'Afficher les détails complets de l\'achèvement';
$string['showfulldetail_help'] = 'Si cette option est cochée, toutes les informations de fin sont affichées, sinon ce ne sont que les dates de fin et d\'expiration.';
$string['warningduration'] = 'Limite d\'avertissement expirée';
$string['warningduration_help'] = 'Il s\'agit de la valeur du temps avant l\'expiration d\'un cours pendant lequel le rapport affichera les couleurs d\'avertissement d\'expiration au lieu des couleurs OK.';
