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
 * @subpackage iomad_track
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['checkcoursestatusmoodle'] = 'Vérifier les paramètres du cours pour l\'importation';
$string['completionimportfromfile'] = 'Importation d\'achèvement à partir d\'un fichier';
$string['courseswithoutcompletioncriteriacouunt'] = 'Nombre de cours sans critères d\'achèvement = {$a}';
$string['courseswithoutcompletionenabledcouunt'] = 'Nombre de cours pour lesquels l\'achèvement n\'est pas activé = {$a}';
$string['fixcourseclearedtask'] = 'Tâche ad hoc pour mettre à jour le champ Coursecleared dans les enregistrements d\'achèvement stockés';
$string['fixenrolleddatetask'] = 'Tâche ad hoc pour mettre à jour les informations d\'achèvement stockées afin d\'utiliser l\'horodatage créé par l\'inscription lorsqu\'il n\'est pas déjà défini.';
$string['fixtracklicensetask'] = 'Tâche ad hoc pour corriger les informations de licence des enregistrements stockés';
$string['importcompletionrecords'] = 'Importer les enregistrements d\'achèvement';
$string['importcompletionsfromfile'] = 'Importer les informations d\'achèvement à partir du fichier';
$string['importcompletionsfrommoodle'] = 'Importer les informations d\'achèvement stockées à partir des tables Moodle';
$string['importcompletionsfrommoodlefull'] = 'Cela exécutera une tâche AdHoc pour importer toutes les informations d\'achèvement de Moodle vers les tableaux de rapport Iomad';
$string['importcompletionsfrommoodlefullwitherrors'] = 'Cela exécutera une tâche AdHoc pour importer CERTAINES informations d\'achèvement de Moodle vers les tableaux de rapport IOMAD. L\'achèvement des cours n\'est pas activé ou les critères ne sont pas définis pour tous les cours et leurs informations seront manquées. Si vous souhaitez savoir de quels cours il s\'agit, utilisez le lien de vérification sur la page précédente';
$string['importmoodlecompletioninformation'] = 'Tâche ad hoc pour importer les informations d\'achèvement à partir des tables Moodle';
$string['iomad_track:importfrommoodle'] = 'Importer les informations d\'achèvement à partir des tables Moodle';
$string['pluginname'] = 'Suivi d\'achèvement Iomad';
$string['privacy:metadata'] = 'Le plug-in de suivi d\'achèvement Local Iomad affiche uniquement les données stockées dans d\'autres emplacements.';
$string['privacy:metadata:local_iomad_track'] = 'Informations sur l\'utilisateur local d\'iomad track';
$string['privacy:metadata:local_iomad_track:companyid'] = 'Identifiant de l\'entreprise de l\'utilisateur';
$string['privacy:metadata:local_iomad_track:courseid'] = 'Identifiant du cours';
$string['privacy:metadata:local_iomad_track:coursename'] = 'Nom du cours.';
$string['privacy:metadata:local_iomad_track:finalscore'] = 'Note finale du cours';
$string['privacy:metadata:local_iomad_track:id'] = 'Identifiant local de suivi iomad';
$string['privacy:metadata:local_iomad_track:licenseallocated'] = 'Horodatage Unix de l\'attribution de la licence';
$string['privacy:metadata:local_iomad_track:licenseid'] = 'Identifiant de licence';
$string['privacy:metadata:local_iomad_track:licensename'] = 'Nom de la licence';
$string['privacy:metadata:local_iomad_track:modifiedtime'] = 'Enregistrer l\'heure modifiée';
$string['privacy:metadata:local_iomad_track:timecompleted'] = 'Temps de cours terminé';
$string['privacy:metadata:local_iomad_track:timeenrolled'] = 'Temps de cours inscrit';
$string['privacy:metadata:local_iomad_track:timestarted'] = 'Heure de  cours commencée';
$string['privacy:metadata:local_iomad_track:userid'] = 'Identifiant d\'utilisateur';
$string['privacy:metadata:local_iomad_track_certs'] = 'Informations sur le certificat local iomad track';
$string['privacy:metadata:local_iomad_track_certs:filename'] = 'Nom de fichier du certificat';
$string['privacy:metadata:local_iomad_track_certs:id'] = 'Identifiant local de l\'enregistrement du certificat de suivi iomad';
$string['privacy:metadata:local_iomad_track_certs:trackid'] = 'Identifiant de suivi de certificat';
$string['uploadcompletionresult'] = 'Télécharger le résultat du fichier d\'achèvement';
