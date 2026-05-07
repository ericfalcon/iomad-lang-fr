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
 * Strings for component 'tool_iomadmerge', language 'fr'
 *
 * @package    tool
 * @subpackage iomadmerge
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Choisir les utilisateurs à fusionner';
$string['clear_selection'] = 'Effacer la sélection actuelle des utilisateurs';
$string['cligathering:description'] = 'Saisissez des paires d’identifiants utilisateur pour fusionner l’utilisateur source dans l’utilisateur cible. Les données de l’utilisateur source seront migrées vers l’utilisateur cible.';
$string['cligathering:fromid'] = 'Identifiant de l’utilisateur source (fromid) :';
$string['cligathering:toid'] = 'Identifiant de l’utilisateur cible (toid) :';
$string['cligathering:stopping'] = 'Pour arrêter la fusion, appuyez sur Ctrl+C ou saisissez -1 dans les champs fromid ou toid.';
$string['dbko_no_transactions'] = '<strong>Échec de la fusion !</strong><br />Votre moteur de base de données ne prend pas en charge les transactions. La base de données a été partiellement mise à jour et peut être incohérente.';
$string['dbko_transactions'] = '<strong>Échec de la fusion !</strong><br />Votre base de données prend en charge les transactions. Aucune modification n’a été appliquée.';
$string['dbok'] = 'Fusion réussie';
$string['deleted'] = 'L’utilisateur avec l’identifiant {$a} a été supprimé';
$string['errorsameuser'] = 'Tentative de fusion du même utilisateur';
$string['errortransactionsonly'] = 'Erreur : des transactions sont requises, mais votre base de données ({$a}) ne les prend pas en charge.';
$string['error_return'] = 'Retour au formulaire de recherche';
$string['eventusermergedfailure'] = 'Échec de la fusion';
$string['eventusermergedsuccess'] = 'Fusion réalisée avec succès';
$string['excluded_exceptions'] = 'Exclure les exceptions';
$string['excluded_exceptions_desc'] = 'Certaines tables doivent être exclues du processus de fusion pour garantir la cohérence et la sécurité. Consultez le fichier README pour plus d’informations.';
$string['finishtime'] = 'Fusion terminée à {$a}';
$string['form_description'] = '<p>Vous pouvez rechercher des utilisateurs si vous ne connaissez pas précisément leurs identifiants, ou saisir directement les informations si vous les connaissez.</p>';
$string['form_header'] = 'Rechercher des utilisateurs à fusionner';
$string['header'] = 'Fusionner deux comptes utilisateur';
$string['header_help'] = '<p>Les données de l’utilisateur source seront transférées vers l’utilisateur cible. Aucun compte n’est supprimé automatiquement.</p><p><strong>Cette action est irréversible.</strong></p>';
$string['into'] = 'dans';
$string['invaliduser'] = 'Utilisateur invalide';
$string['invalid_option'] = 'Option de formulaire invalide';
$string['iomadmerge'] = 'Fusionner les comptes utilisateur';
$string['iomadmerge:iomadmerge'] = 'Fusionner les comptes utilisateur';
$string['iomadmerge:view'] = 'Fusionner les comptes utilisateur';
$string['iomadmergeadvanced'] = '<strong>Saisie directe utilisateur</strong>';
$string['iomadmergeadvanced_help'] = 'Utilisez cette section si vous connaissez précisément les utilisateurs à fusionner.';
$string['iomadmerge_confirm'] = 'Après confirmation, le processus de fusion sera lancé.<br /><strong>Cette action est irréversible.</strong> Confirmez-vous ?';
$string['logid'] = 'Les résultats sont enregistrés sous l’identifiant de journal {$a}.';
$string['logko'] = 'Une erreur est survenue :';
$string['loglist'] = 'Historique des actions de fusion :';
$string['logok'] = 'Requêtes exécutées :';
$string['merging'] = 'Fusion en cours';
$string['newuser'] = 'Utilisateur à conserver';
$string['newuserid'] = 'Identifiant utilisateur à conserver';
$string['newuseridonlog'] = 'Utilisateur conservé';
$string['nologs'] = 'Aucun journal de fusion disponible.';
$string['no_saveselection'] = 'Aucun utilisateur sélectionné.';
$string['olduser'] = 'Utilisateur à supprimer';
$string['olduserid'] = 'Identifiant utilisateur à supprimer';
$string['olduseridonlog'] = 'Utilisateur supprimé';
$string['pluginname'] = 'Fusion des comptes utilisateur';
$string['privacy:metadata'] = 'Le plugin de fusion de comptes utilisateur ne stocke aucune donnée personnelle.';
$string['qa_action_delete_fromid'] = 'Conserver les tentatives du nouvel utilisateur';
$string['qa_action_delete_toid'] = 'Conserver les tentatives de l’ancien utilisateur';
$string['qa_action_remain'] = 'Ne rien faire';
$string['qa_action_remain_log'] = 'Les données utilisateur de la table <strong>{$a}</strong> ne sont pas modifiées.';
$string['qa_action_renumber'] = 'Fusionner et renuméroter les tentatives';
$string['qa_chosen_action'] = 'Action sélectionnée pour les tentatives de quiz : {$a}.';
$string['qa_grades'] = 'Notes recalculées pour les quiz : {$a}.';
$string['quizattemptsaction'] = 'Gestion des tentatives de quiz';
$string['quizattemptsaction_desc'] = 'Détermine le comportement à adopter lors de conflits entre tentatives de quiz lors de la fusion.';
$string['results'] = 'Résultats et journal';
$string['review_users'] = 'Confirmer les utilisateurs à fusionner';
$string['saveselection_submit'] = 'Enregistrer la sélection';
$string['searchuser'] = 'Rechercher un utilisateur';
$string['searchuser_help'] = 'Saisissez un nom, un prénom, une adresse e-mail ou un identifiant utilisateur.';
$string['starttime'] = 'Fusion commencée à {$a}';
$string['suspenduser_setting'] = 'Suspendre l’utilisateur source';
$string['suspenduser_setting_desc'] = 'Si activé, l’utilisateur source sera suspendu après une fusion réussie.';
$string['tableko'] = 'Table {$a} : mise à jour en échec';
$string['tableok'] = 'Table {$a} : mise à jour réussie';
$string['tableskipped'] = 'Pour des raisons de journalisation ou de sécurité, la table « {$a} » a été ignorée.';
$string['timetaken'] = 'Durée de la fusion : {$a} secondes';
$string['transactions_not_supported'] = 'Votre base de données ne prend pas en charge les transactions.';
$string['transactions_supported'] = 'Votre base de données prend en charge les transactions.';
$string['transactions_setting'] = 'Autoriser uniquement les transactions';
$string['transactions_setting_desc'] = 'Recommandé afin de garantir la cohérence des données lors d’une fusion.';
$string['uniquekeynewidtomaintain'] = 'Conserver les données de l’utilisateur conservé';
$string['uniquekeynewidtomaintain_desc'] = 'En cas de conflit de clé unique, les données de l’utilisateur conservé seront priorisées.';
$string['usermergingheader'] = 'Utilisateur « {$a->username} » (ID utilisateur = {$a->id})';
$string['userreviewtable_legend'] = '<b>Examiner les utilisateurs à fusionner</b>';
$string['userselecttable_legend'] = '<b>Sélectionner les utilisateurs à fusionner</b>';
$string['viewlog'] = 'Voir les journaux de fusion';
$string['wronglogid'] = 'Le journal demandé est introuvable.';