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
 * @package    tool
 * @subpackage iomadmerge
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['choose_users'] = 'Choisir les utilisateurs à fusionner';
$string['clear_selection'] = 'Effacer la sélection actuelle de l\'utilisateur';
$string['cligathering:description'] = 'Introduisez des paires d\'identifiants d\'utilisateur pour fusionner le premier dans le second. Le premier identifiant d\'utilisateur (from id) "perdra" toutes ses données pour être "migrées" vers le second (to id). L\'utilisateur \'to id\' inclura les données des deux utilisateurs';
$string['cligathering:fromid'] = 'Identifiant de l\'utilisateur source (fromid) :';
$string['cligathering:stopping'] = 'Pour arrêter la fusion, Ctrl+C ou tapez -1 dans les champs fromid ou toid.';
$string['cligathering:toid'] = 'Identifiant de l\'utilisateur cible (toid) :';
$string['dbko_no_transactions'] = '<strong>La fusion a échoué !</strong> <br/>Votre moteur de base de données ne prend pas en charge les transactions. Par conséquent, votre base de données <strong>a été mise à jour</strong>. L\'état de votre base de données peut être incohérent. <br/>Mais, jetez un œil au journal de fusion et, s\'il vous plaît, informez les développeurs de plugins de l\'erreur. Vous obtiendrez une solution en peu de temps. Après avoir mis à jour le plugin vers sa dernière version, qui inclura la solution à ce problème, répétez l\'action de fusion pour la terminer avec succès.';
$string['dbko_transactions'] = '<strong>Échec de la fusion !</strong> <br/>Votre moteur de base de données prend en charge les transactions. Par conséquent, toute la transaction en cours a été annulée et <strong>aucune modification n\'a été apportée à votre base de données</strong>.';
$string['dbok'] = 'Fusion réussie';
$string['deleted'] = 'L\'utilisateur avec l\'ID {$a} a été supprimé';
$string['errorsameuser'] = 'Essai de fusionner le même utilisateur';
$string['errortransactionsonly'] = 'Erreur : des transactions sont requises, mais votre type de base de données {$a} ne les prend pas en charge. Si nécessaire, vous pouvez autoriser la fusion d\'utilisateurs sans transactions. Veuillez vérifier les paramètres du plugin pour les configurer en conséquence.';
$string['error_return'] = 'Retour au formulaire de recherche';
$string['eventusermergedfailure'] = 'Échec de la fusion';
$string['eventusermergedsuccess'] = 'Succès de la fusion';
$string['excluded_exceptions'] = 'Exclure les exceptions';
$string['excluded_exceptions_desc'] = 'L\'expérience à ce sujet suggère que toutes ces tables de bases de données devraient être exclues de la fusion. Voir README pour plus de détails. <br> Par conséquent, pour appliquer le comportement de plugin par défaut, vous devez choisir \'{$a}\' pour exclure toutes ces tables du processus de fusion (recommandé).<br> Si vous préférez, vous pouvez exclure n\'importe laquelle de ces tables et inclure dans le processus de fusion (non recommandé).';
$string['finishtime'] = 'Fusion terminée à {$a}';
$string['form_description'] = '<p>Vous pouvez rechercher des utilisateurs ici si vous ne connaissez pas le nom d\'utilisateur/numéro d\'identification de l\'utilisateur. Sinon, vous pouvez développer le formulaire pour saisir directement ces informations. Veuillez consulter l\'aide sur les champs pour plus d\'informations</p>';
$string['form_header'] = 'Rechercher des utilisateurs à fusionner';
$string['header'] = 'Fusionner deux utilisateurs en un seul compte';
$string['header_help'] = '<p> Étant donné un utilisateur à supprimer et un utilisateur à conserver, cela fusionnera les données utilisateur associées à l\'ancien utilisateur dans le dernier utilisateur. Notez que les deux utilisateurs doivent déjà exister et qu\'aucun compte ne sera réellement supprimé. Ce processus est laissé à l\'administrateur pour le faire manuellement.</p> <p><strong>Ne faites cela que si vous savez ce que vous faites car il n\'est pas réversible !</strong></p>';
$string['into'] = 'dans';
$string['invaliduser'] = 'Utilisateur invalide';
$string['invalid_option'] = 'Option de formulaire invalide';
$string['iomadmerge'] = 'Fusionner les comptes d\'utilisateurs';
$string['iomadmerge:iomadmerge'] = 'Fusionner les comptes d\'utilisateurs';
$string['iomadmerge:view'] = 'Fusionner les comptes d\'utilisateurs';
$string['iomadmergeadvanced'] = '<strong>Saisie directe de l\'utilisateur</strong>';
$string['iomadmergeadvanced_help'] = 'Ici, vous pouvez saisir les champs ci-dessous si vous savez exactement quels utilisateurs vous souhaitez fusionner.<br /><br /> Cliquez sur le bouton « rechercher » afin de vérifier/confirmer que les entrées saisies sont bien des utilisateurs.';
$string['iomadmerge_confirm'] = 'Après confirmation, le processus de fusion commencera. <br /><strong>Cela ne sera pas réversible !</strong> Êtes-vous sûr de vouloir continuer ?';
$string['logid'] = 'Pour référence, ces résultats sont enregistrés dans l\'identifiant de journal {$a}.';
$string['logko'] = 'Une erreur s\'est produite :';
$string['loglist'] = 'Tous ces enregistrements sont des actions de fusion effectuées, indiquant si elles se sont bien déroulées :';
$string['logok'] = 'Voici les requêtes qui ont été envoyées à la DB :';
$string['merging'] = 'Fusionné';
$string['newuser'] = 'Utilisateur à garder';
$string['newuserid'] = 'Identifiant utilisateur à conserver';
$string['newuseridonlog'] = 'Utilisateur conservé';
$string['nologs'] = 'Il n\'y a pas encore de journaux de fusion. Bien pour vous!';
$string['no_saveselection'] = 'Vous n\'avez sélectionné ni ancien ni nouvel utilisateur.';
$string['olduser'] = 'Utilisateur à supprimer';
$string['olduserid'] = 'ID utilisateur à supprimer';
$string['olduseridonlog'] = 'Utilisateur supprimé';
$string['pluginname'] = 'Fusionner les comptes d\'utilisateurs';
$string['privacy:metadata'] = 'Le plugin Merge User Accounts ne stocke aucune donnée personnelle.';
$string['qa_action_delete_fromid'] = 'Conserver les tentatives du nouvel utilisateur';
$string['qa_action_delete_toid'] = 'Conserver les tentatives de l\'ancien utilisateur';
$string['qa_action_remain'] = 'Ne rien faire : ne pas fusionner ni supprimer';
$string['qa_action_remain_log'] = 'Les données utilisateur du tableau <strong>{$a}</strong> ne sont pas mises à jour.';
$string['qa_action_renumber'] = 'Fusionner les tentatives des deux utilisateurs et renuméroter';
$string['qa_chosen_action'] = 'Option active pour les tentatives de quiz : {$a}.';
$string['qa_grades'] = 'Notes recalculées pour les quiz : {$a}.';
$string['quizattemptsaction'] = 'Comment résoudre les tentatives de quiz';
$string['quizattemptsaction_desc'] = 'Lors de la fusion de tentatives de quiz, il peut exister trois cas : <ol> <li>Seul l\'ancien utilisateur a des tentatives de quiz. Toutes les tentatives apparaîtront comme si elles avaient été faites par le nouvel utilisateur.</li> <li>Seul le nouvel utilisateur a des tentatives de quiz. Tout est correct et rien n\'est fait.</li> <li>Les deux utilisateurs ont des tentatives pour le même quiz. <strong>Vous devez choisir quoi faire dans ce cas de conflit. </strong>. Vous devez choisir l\'une des actions suivantes : <ul> <li><strong>{$a->renumber}</strong>. Les tentatives de l\'ancien utilisateur sont fusionnées avec celles du nouvel utilisateur et renumérotées au moment où elles ont été lancées.</li> <li><strong>{$a->delete_fromid}</strong>. Les tentatives de l\'ancien utilisateur sont supprimées. Les tentatives du nouvel utilisateur sont conservées, car cette option les considère comme les plus importantes.</li> <li><strong>{$a->delete_toid}</strong>. Les tentatives du nouvel utilisateur sont supprimées. Les tentatives de l\'ancien utilisateur sont conservées, car cette option les considère comme les plus importantes.</li> <li><strong>{$a->reste}</strong> (par défaut). Les tentatives ne sont ni fusionnées ni supprimées, elles restent liées à l\'utilisateur qui les a effectuées. Il s\'agit de l\'action la plus sûre, mais la fusion des utilisateurs de l\'utilisateur A à l\'utilisateur B ou de B à A peut produire différentes notes de quiz.</li> </ul> </li> </ol>';
$string['results'] = 'Fusionner les résultats et le journal';
$string['review_users'] = 'Confirmer les utilisateurs à fusionner';
$string['saveselection_submit'] = 'Enregistrer la sélection';
$string['searchuser'] = 'Rechercher un utilisateur';
$string['searchuser_help'] = 'Saisissez un nom d\'utilisateur, un prénom/nom, une adresse e-mail ou un identifiant pour rechercher des utilisateurs potentiels. Vous pouvez également spécifier si vous souhaitez uniquement rechercher dans un champ particulier.';
$string['starttime'] = 'La fusion a commencé à {$a}';
$string['suspenduser_setting'] = 'Suspendre l\'ancien utilisateur';
$string['suspenduser_setting_desc'] = 'S\'il est activé, il suspend automatiquement l\'ancien utilisateur lors d\'un processus de fusion réussi, empêchant l\'utilisateur de se connecter à Moodle (recommandé). S\'il est désactivé, l\'ancien utilisateur reste actif. Dans les deux cas, l\'ancien utilisateur n\'aura pas ses données associées.';
$string['tableko'] = 'Table {$a} : mise à jour PAS OK !';
$string['tableok'] = 'Table {$a} : mise à jour OK';
$string['tableskipped'] = 'Pour des raisons de journalisation ou de sécurité, nous omettons <strong>{$a}</strong>. <br />Pour supprimer ces entrées, supprimez l\'ancien utilisateur une fois ce script exécuté avec succès.';
$string['timetaken'] = 'La fusion a pris {$a} secondes';
$string['transactions_not_supported'] = 'Pour votre information, votre base de données <strong>ne prend pas en charge les transactions</strong>.';
$string['transactions_setting'] = 'Seules les transactions sont autorisées';
$string['transactions_setting_desc'] = 'Si activé, les utilisateurs de fusion ne fonctionneront pas du tout sur les bases de données qui ne prennent PAS en charge les transactions (recommandé). L\'activer est nécessaire pour garantir la cohérence de votre base de données en cas d\'erreurs de fusion. <br />Si désactivé, vous exécuterez toujours des actions de fusion. En cas d\'erreur, le journal de fusion vous indiquera quel était le problème. Le signaler aux supporters du plugin vous donnera une solution en bref. <br />Surtout, les tables de base de Moodle et certains plugins tiers sont déjà pris en compte par ce plugin. Si vous n\'avez pas de plugins tiers dans votre installation Moodle, vous pouvez exécuter ce plugin en toute tranquillité en activant ou en désactivant cette option.';
$string['transactions_supported'] = 'Pour votre information, votre base de données <strong>supporte les transactions</strong>.';
$string['uniquekeynewidtomaintain'] = 'Conserver les données du nouvel utilisateur';
$string['uniquekeynewidtomaintain_desc'] = 'En cas de conflit, comme lorsque la colonne associée à user.id est une clé unique, ce plugin conservera les données du nouvel utilisateur (par défaut). Cela signifie également que les données de l\'ancien utilisateur sont supprimées pour conserver la cohérence. Sinon, si vous décochez cette option, les données de l\'ancien utilisateur seront conservées.';
$string['usermergingheader'] = '&laquo;{$a->nom d\'utilisateur}&raquo; (ID utilisateur = {$a->id})';
$string['userreviewtable_legend'] = '<b>Examiner les utilisateurs à fusionner</b>';
$string['userselecttable_legend'] = '<b>Sélectionner les utilisateurs à fusionner</b>';
$string['viewlog'] = 'Voir les journaux de fusion';
$string['wronglogid'] = 'Le journal que vous demandez n\'existe pas.';
