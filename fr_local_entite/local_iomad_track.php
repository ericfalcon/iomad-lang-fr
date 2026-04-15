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
 * Strings for component 'local_iomad_track', language 'fr'
 *
 * @package    local
 * @subpackage iomad_track
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();
$string['checkcoursestatusmoodle'] = 'Vérifier les paramètres du cours pour l’importation';
$string['completionimportfromfile'] = 'Importation des achèvements à partir d’un fichier';
$string['courseswithoutcompletioncriteriacount'] = 'Nombre de cours sans critères d’achèvement : {$a}';
$string['courseswithoutcompletionenabledcount'] = 'Nombre de cours pour lesquels l’achèvement n’est pas activé : {$a}';
$string['fixcourseclearedtask'] = 'Tâche ad hoc pour mettre à jour le champ Coursecleared dans les enregistrements d’achèvement stockés';
$string['fixenrolleddatetask'] = 'Tâche ad hoc pour mettre à jour les informations d’achèvement afin d’utiliser la date d’inscription lorsque celle-ci n’est pas définie';
$string['fixtracklicensetask'] = 'Tâche ad hoc pour corriger les informations de licence des enregistrements stockés';
$string['importcompletionrecords'] = 'Importer les enregistrements d’achèvement';
$string['importcompletionsfromfile'] = 'Importer les informations d’achèvement à partir d’un fichier';
$string['importcompletionsfrommoodle'] = 'Importer les informations d’achèvement stockées depuis les tables Moodle';
$string['importcompletionsfrommoodlefull'] = 'Cette action lance une tâche ad hoc pour importer toutes les informations d’achèvement de Moodle vers les tables de rapports IOMAD';
$string['importcompletionsfrommoodlefullwitherrors'] = 'Cette action lance une tâche ad hoc pour importer certaines informations d’achèvement de Moodle vers les tables de rapports IOMAD. Les cours pour lesquels l’achèvement n’est pas activé ou dont les critères ne sont pas définis seront ignorés. Utilisez le lien de vérification pour identifier ces cours.';
$string['importmoodlecompletioninformation'] = 'Tâche ad hoc pour importer les informations d’achèvement depuis les tables Moodle';
$string['iomad_track:importfrommoodle'] = 'Importer les informations d’achèvement depuis Moodle';
$string['pluginname'] = 'Suivi d’achèvement IOMAD';
$string['privacy:metadata'] = 'Le plugin de suivi d’achèvement IOMAD affiche uniquement des données stockées dans d’autres composants.';
$string['privacy:metadata:local_iomad_track'] = 'Informations de suivi d’achèvement IOMAD';
$string['privacy:metadata:local_iomad_track:companyid'] = 'Identifiant de l’entité de l’utilisateur';
$string['privacy:metadata:local_iomad_track:courseid'] = 'Identifiant du cours';
$string['privacy:metadata:local_iomad_track:coursename'] = 'Nom du cours';
$string['privacy:metadata:local_iomad_track:finalscore'] = 'Note finale du cours';
$string['privacy:metadata:local_iomad_track:id'] = 'Identifiant local du suivi IOMAD';
$string['privacy:metadata:local_iomad_track:licenseallocated'] = 'Horodatage Unix de l’attribution de la licence';
$string['privacy:metadata:local_iomad_track:licenseid'] = 'Identifiant de la licence';
$string['privacy:metadata:local_iomad_track:licensename'] = 'Nom de la licence';
$string['privacy:metadata:local_iomad_track:modifiedtime'] = 'Date de dernière modification de l’enregistrement';
$string['privacy:metadata:local_iomad_track:timecompleted'] = 'Date d’achèvement du cours';
$string['privacy:metadata:local_iomad_track:timeenrolled'] = 'Date d’inscription au cours';
$string['privacy:metadata:local_iomad_track:timestarted'] = 'Date de début du cours';
$string['privacy:metadata:local_iomad_track:userid'] = 'Identifiant de l’utilisateur';
$string['privacy:metadata:local_iomad_track_certs'] = 'Informations sur les certificats de suivi IOMAD';
$string['privacy:metadata:local_iomad_track_certs:filename'] = 'Nom du fichier du certificat';
$string['privacy:metadata:local_iomad_track_certs:id'] = 'Identifiant local de l’enregistrement du certificat';
$string['privacy:metadata:local_iomad_track_certs:trackid'] = 'Identifiant de suivi du certificat';
$string['uploadcompletionresult'] = 'Télécharger le résultat de l’importation des achèvements';