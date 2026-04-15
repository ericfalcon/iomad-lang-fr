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
 * @package    block
 * @subpackage iomad_microlearning
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['active'] = 'Actif';
$string['active_help'] = 'Si le fil n\'est pas actif, aucun message ne sera envoyé aux utilisateurs et il ne sera pas visible sur leur tableau de bord';
$string['blocktitle'] = 'Fils de micro-apprentissage';
$string['bulkassigngroups'] = 'Attribuer des groupes de fil par CSV';
$string['clonethread'] = 'Clonage de fil';
$string['clonethreadcheckfull'] = 'Voulez-vous vraiment cloner le fil {$a} et toutes les pépites associés dans un nouveau thread ? Cela ne copie aucun utilisateur actuellement affecté.';
$string['cmid'] = 'Identifiant du module de cours';
$string['cmid_help'] = 'Numéro d\'identification du module de cours dans ce champ pour la section de cours unique. Vous devez définir cette valeur ou la valeur de l\'ID de section.';
$string['company_threads_for'] = 'Fils de micro-apprentissage pour le campus {$a}';
$string['company_users_for'] = 'Utilisateurs pour le fil de micro-apprentissage{$a}';
$string['copy'] = '(copie)';
$string['creategroup'] = 'Créer un nouveau groupe';
$string['crontask'] = 'cron de micro-apprentissage Iomad';
$string['defaultdue'] = 'Exigible après';
$string['defaultdue_help'] = 'Il s\'agit du délai après lequel la pépite programmée devient due. Il peut être écrasé en modifiant la planification des threads.';
$string['deletegroup'] = 'Supprimer le groupe {$a}';
$string['deletegroupcheckfull'] = 'Voulez-vous supprimer le groupe {$a} ? Cela supprimera également tous les utilisateurs associés à ce groupe.';
$string['deletenugget'] = 'Supprimer la pépite';
$string['deletenuggetcheckfull'] = 'Êtes-vous sûr de vouloir supprimer la pépite {$a}';
$string['deletethread'] = 'Supprimer le fil';
$string['deletethreadcheckfull'] = 'Êtes-vous sûr de vouloir supprimer complètement le fil {$a} et toutes les pépites et utilisateurs associés';
$string['duedate'] = 'Date d\'échéance';
$string['duedatebeforescheduledate'] = 'La date d\'échéance est antérieure à la date prévue';
$string['editgroup'] = 'Modifier le groupe';
$string['editnugget'] = 'Modifier la pépite';
$string['editthread'] = 'Modifier le fil';
$string['erroredgroups'] = 'Affectations de groupe erronées';
$string['group'] = 'Groupe de fil';
$string['groupcreatedok'] = 'Le groupe a été créé avec succès';
$string['groupdeletedok'] = 'Le groupe a été supprimé avec succès';
$string['groupupdatedok'] = 'Le groupe a été mis à jour avec succès';
$string['group_help'] = 'Il s\'agit du groupe au sein du fil de micro-apprentissage auquel l\'utilisateur sera affecté';
$string['halt_until_fulfilled'] = 'Arrêter les messages jusqu\'à ce qu\'ils soient terminés';
$string['halt_until_fulfilled_help'] = 'Définissez ceci sur vrai si vous souhaitez arrêter l\'envoi de messages jusqu\'à ce que la pépite précédente soit terminé.';
$string['importgroupsfromfile'] = 'Importer les affectations de groupes d\'utilisateurs de fil';
$string['importthread'] = 'Importer le fil';
$string['importthreadcheckfull'] = 'Voulez-vous vraiment importer le fil {$a} et toutes les pépites associées dans un nouveau fil de ce campus ? Cela ne copie aucun utilisateur actuellement affecté.';
$string['importusergroups'] = 'Importer des groupes d\'utilisateurs de fil';
$string['incorrecturl'] = 'L\'URL spécifiée ne fait pas partie de ce site';
$string['interval'] = 'Intervalle de libération';
$string['interval_help'] = 'Il s\'agit de l\'intervalle par défaut entre les dates de planification pour chaque pépite';
$string['iomad_microlearning:addinstance'] = 'Ajouter un bloc de micro-apprentissage';
$string['iomad_microlearning:assign_threads'] = 'Affecter un utilisateur à un fil de micro-apprentissage';
$string['iomad_microlearning:edit_nuggets'] = 'Modifier les pépites de micro-apprentissage';
$string['iomad_microlearning:edit_threads'] = 'Modifier les fils de discussion de micro-apprentissage';
$string['iomad_microlearning:importgroupfromcsv'] = 'Attribuer des groupes de fil aux utilisateurs via CSV';
$string['iomad_microlearning:import_threads'] = 'Importer des fils de micro-apprentissage';
$string['iomad_microlearning:manage_groups'] = 'Gérer les groupes de discussions';
$string['iomad_microlearning:myaddinstance'] = 'Ajouter un bloc de micro-apprentissage à mon tableau de bord';
$string['iomad_microlearning:thread_clone'] = 'Ajouter un bloc de microlearning à mon tableau de bord';
$string['iomad_microlearning:thread_delete'] = 'Supprimer un fil de micro-apprentissage';
$string['iomad_microlearning:thread_view'] = 'Afficher les fils sur le micro-apprentissage';
$string['iomad_microlearning:view'] = 'Voir le micro-apprentissage Iomad';
$string['learninggroups'] = 'Gérer les groupes de discussions';
$string['learningnuggets'] = 'Gérer les pépites';
$string['learningschedules'] = 'Gérer les horaires';
$string['learningusers'] = 'Gérer les utilisateurs du fil';
$string['message_preset'] = 'Envoyer un message après';
$string['message_preset_help'] = 'Combien de temps attendons-nous pour envoyer un message après';
$string['message_time'] = 'Heure d\'envoi du message';
$string['message_time_help'] = 'A quelle heure de la journée envoyons-nous ce message.';
$string['microlearning'] = 'Micro-apprentissage';
$string['microlearninglinkexpires'] = 'Nombre de jours après l\'expiration du lien de l\'e-mail';
$string['microlearninglinkexpires_help'] = 'Il s\'agit du nombre de jours après lesquels l\'e-mail du lien de micro-apprentissage à l\'utilisateur expirera et l\'utilisateur devra se connecter en utilisant le processus normal';
$string['microllinkexpires'] = 'Le lien de l\'e-mail Micro-apprentissage expire';
$string['microllinkexpires_help'] = 'Il s\'agit de la durée après laquelle le lien envoyé par e-mail ne connectera pas automatiquement l\'utilisateur.';
$string['missingname'] = 'Le nom de la pépite est manquant';
$string['missingsectionorcmid'] = 'Veuillez saisir une section de cours ou un ID de module de cours';
$string['namehelp'] = 'nom de groupe';
$string['namehelp_help'] = 'Il s\'agit du nom de groupe utilisé dans le fil de micro-apprentissage. Les noms sont uniques dans les fils mais peuvent être réutilisés sur plusieurs fils';
$string['nameinuse'] = 'Le nom est déjà utilisé';
$string['nolearningthreads'] = 'Il n\'y a pas de fils de micro-apprentissage';
$string['nugget'] = 'Pépite de micro-apprentissage';
$string['nuggetcreated'] = 'Pépite de micro-apprentissage créé';
$string['nuggetcreatedok'] = 'Pépite créé OK';
$string['nuggetcupdatedok'] = 'Pépite mis à jour OK';
$string['nuggetdeleted'] = 'Pépite de micro-apprentissage supprimé';
$string['nuggetmoved'] = 'Commande de pépites de micro-apprentissage déplacée';
$string['nuggetname'] = 'Nom de la pépite';
$string['nuggetname_help'] = 'Choisissez un nom unique pour la pépite d\'apprentissage';
$string['nuggetorder'] = 'Ordre';
$string['nuggets'] = 'Pépites de micro-apprentissage';
$string['nuggetupdated'] = 'Pépite de micro-apprentissage mis à jour';
$string['pluginname'] = 'Fils de micro-apprentissage Iomad';
$string['reminder1'] = 'Premier rappel';
$string['reminder1_help'] = 'Délai après lequel le premier rappel sera envoyé si la pépite n\'est pas marquée comme terminée.';
$string['reminder2'] = 'Deuxième rappel';
$string['reminder2_help'] = 'Délai après lequel le deuxième rappel sera envoyé si la pépite n\'est pas marquée comme terminée.';
$string['reminderdatebeforescheduledate'] = 'La date de rappel est antérieure à la date prévue';
$string['reminderdatesoutoforder'] = 'Les dates de rappel ne sont pas en ordre';
$string['resetschedule'] = 'Réinitialiser l\'horaire';
$string['resetschedulecheckfull'] = 'Voulez-vous réinitialiser complètement le programme de {$a} ?';
$string['scheduledate'] = 'Date du programme';
$string['scheduleoutoforder'] = 'Les dates de l\'horaire ne sont pas en ordre';
$string['scheduletype'] = 'Type d\'horaire';
$string['scheduletype_help'] = 'Cela contrôle la date de début que l\'utilisateur affecté obtiendra. Standard signifie qu\'ils sont ajoutés selon le calendrier défini. Commencer aujourd\'hui signifie qu\'ils seront programmés pour démarrer le fil aujourd\'hui. Commencer à la prochaine planification démarrera l\'utilisateur à la prochaine date planifiée définie par le thread actuel.';
$string['sectionid'] = 'Identifiant de la section du cours';
$string['sectionidalreadyinuse'] = 'L\'ID de section est déjà utilisé';
$string['sectionid_help'] = 'Saisissez le numéro d\'identification de la section de cours dans ce champ pour la section de cours unique. Vous devez définir cette valeur ou la valeur CMID.';
$string['selectthread'] = 'Sélectionnez le fil de discussion sur le microlearning';
$string['send_message'] = 'Envoyer le message';
$string['send_message_help'] = 'Définissez sur vrai si vous souhaitez que des e-mails soient envoyés aux utilisateurs pour que les pépites soient planifiées ou que les rappels soient terminés.';
$string['send_reminder'] = 'Envoyer un rappel';
$string['send_reminder_help'] = 'Définissez ceci sur vrai si vous souhaitez envoyer des e-mails de rappel aux utilisateurs affectés.';
$string['startdate'] = 'Date de début';
$string['startdate_help'] = 'La date à partir de laquelle le fil de discussion microlearning sera programmé';
$string['startnextscheduled'] = 'Commencer le jour prévu suivant';
$string['starttoday'] = 'Commencez aujourd\'hui';
$string['threadcreated'] = 'Fil de micro-apprentissage créé';
$string['threadcreatedok'] = 'Fil créé OK';
$string['threaddeleted'] = 'Fil de micro-apprentissage supprimé';
$string['threadname'] = 'Nom du fil';
$string['threadname_help'] = 'Le nom du fil de micro-apprentissage';
$string['threads'] = 'Fils de micro-apprentissage';
$string['threadschedule'] = 'Calendrier des fils';
$string['threadscheduleresetok'] = 'Réinitialisation de la planification des fils OK';
$string['threadscheduleupdated'] = 'Calendrier des fils de micro-apprentissage mis à jour';
$string['threadscheduleupdatedok'] = 'Calendrier des fils mis à jour OK';
$string['threadupdated'] = 'Fil de micro-apprentissage mis à jour';
$string['threadupdatedok'] = 'Fil mis à jour OK';
$string['timecreated'] = 'Temps créé';
$string['updown'] = 'Haut/Bas';
$string['uploadgroupresult'] = 'Télécharger le résultat des groupes';
$string['url'] = 'URL';
$string['url_help'] = 'Spécifiez plutôt une URL de site';
