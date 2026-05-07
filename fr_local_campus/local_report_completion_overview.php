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
 * Strings for component 'local_report_completion_overview', language 'fr'
 *
 * @package    local
 * @subpackage report_completion_overview
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['coursecompletion'] = 'Achèvements ({$a})';
$string['courseexpiry'] = 'Expirations ({$a})';
$string['coursestatus'] = 'Statut : {$a}';
$string['coursesummary'] = 'Inscrit : {$a->enrolled} · Commencé : {$a->timestarted} · Terminé : {$a->timecompleted} · Expire : {$a->timeexpires} · Note : {$a->finalscore}';
$string['coursesummary_noexpiry'] = 'Inscrit : {$a->enrolled} · Commencé : {$a->timestarted} · Terminé : {$a->timecompleted} · Note : {$a->finalscore}';
$string['coursesummary_nograde'] = 'Inscrit : {$a->enrolled} · Commencé : {$a->timestarted} · Terminé : {$a->timecompleted} · Expire : {$a->timeexpires} · Résultat : Réussi';
$string['coursesummary_nograde_noexpiry'] = 'Inscrit : {$a->enrolled} · Commencé : {$a->timestarted} · Terminé : {$a->timecompleted} · Résultat : Réussi';
$string['coursesummary_partial'] = 'Terminé : {$a->timecompleted} · Expire : {$a->timeexpires}';
$string['expired'] = 'Expiré';
$string['expiring'] = 'Proche de l’expiration';
$string['notcompleted'] = 'En cours';
$string['notenrolled'] = 'Non inscrit';
$string['pluginname'] = 'Rapport de synthèse d’achèvement';
$string['privacy:metadata:local_report_user_lic_allocs'] = 'Informations locales sur les attributions de licences utilisateur';
$string['privacy:metadata:local_report_user_lic_allocs:action'] = 'Action d’attribution';
$string['privacy:metadata:local_report_user_lic_allocs:courseid'] = 'Identifiant du cours';
$string['privacy:metadata:local_report_user_lic_allocs:id'] = 'Identifiant de l’enregistrement d’attribution';
$string['privacy:metadata:local_report_user_lic_allocs:issuedate'] = 'Horodatage Unix de l’attribution de la licence';
$string['privacy:metadata:local_report_user_lic_allocs:licenseid'] = 'Identifiant de la licence';
$string['privacy:metadata:local_report_user_lic_allocs:userid'] = 'Identifiant de l’utilisateur';
$string['report_completion_overview_title'] = 'Synthèse de l’achèvement';
$string['showexpiryonly'] = 'Mettre en évidence uniquement les cours avec une date d’expiration';
$string['showexpiryonly_help'] = 'Si activé, seuls les cours disposant d’une date d’expiration seront mis en évidence dans la vue graphique.';
$string['showfulldetail'] = 'Afficher les détails complets de l’achèvement';
$string['showfulldetail_help'] = 'Si activé, toutes les informations d’achèvement sont affichées. Sinon, seules les dates de fin et d’expiration le sont.';
$string['warningduration'] = 'Seuil d’avertissement avant expiration';
$string['warningduration_help'] = 'Durée précédant l’expiration d’un cours pendant laquelle le rapport affiche un avertissement visuel.';
// ---- Traductions local_report_completion_overview ----

$string['bycourses'] = 'Afficher par cours';
$string['byusers'] = 'Afficher par utilisateur';

$string['coursesummary_expired'] = 'Inscrit : {$a->enrolled} Démarré : {$a->timestarted} Expiré : {$a->timeexpires} Note : {$a->finalscore}';

$string['coursesummary_extra_indate'] = 'Inscrit : {$a->enrolled} Démarré : {$a->timestarted} Terminé : {$a->timecompleted} Expire : {$a->timeexpires} Note : {$a->finalscore} Dernière complétion : {$a->lastcompleted} Expire : {$a->timeexpired}';

$string['coursesummary_extra_outdate'] = 'Inscrit : {$a->enrolled} Démarré : {$a->timestarted} Terminé : {$a->timecompleted} Expire : {$a->timeexpires} Note : {$a->finalscore} Dernière complétion : {$a->lastcompleted} Expiré : {$a->timeexpired}';

$string['coursesummary_partial_extra_indate'] = 'Terminé : {$a->timecompleted} Expire : {$a->timeexpires} Dernière complétion : {$a->lastcompleted} Expire : {$a->timeexpired}';

$string['coursesummary_partial_extra_outdate'] = 'Terminé : {$a->timecompleted} Expire : {$a->timeexpires} Dernière complétion : {$a->lastcompleted} Expiré : {$a->timeexpired}';

$string['hideenrolledonly'] = 'Mettre en évidence les cours disponibles';

$string['hideexpiry'] = 'Mettre en évidence les expirations';

$string['indate'] = 'OK';

$string['notcompleted-expiring'] = 'En cours (échéance à venir)';
$string['notcompleted-indate'] = 'En cours (OK)';
$string['notcompleted-outdate'] = 'En cours (expiré)';

$string['notenrolled-expiring'] = 'Non inscrit (échéance à venir)';
$string['notenrolled-indate'] = 'Non inscrit (OK)';
$string['notenrolled-outdate'] = 'Non inscrit (expiré)';

$string['reportbytext'] = 'Afficher le rapport sous forme de texte';

$string['report_completion_overview:view'] = 'Afficher le rapport global d’achèvement des cours';

$string['showenrolled'] = 'Mettre en évidence uniquement les cours avec inscriptions';

$string['showenrolledonly'] = 'Afficher uniquement les cours avec des inscriptions enregistrées';

$string['showenrolledonly_help'] = 'Si cette option est activée, seuls les cours ayant ou ayant eu des inscriptions enregistrées seront affichés.';

$string['showexpiry'] = 'Mettre en évidence tous';

$string['warningdurationcompany'] = 'Durée d’avertissement d’expiration spécifique au campus';
