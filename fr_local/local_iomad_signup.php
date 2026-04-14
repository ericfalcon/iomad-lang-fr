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
 * @subpackage iomad_signup
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authenticationtypes'] = 'Sélectionnez les types d\'authentification';
$string['authenticationtypes_desc'] = 'Ce sont les types d\'authentification qui peuvent être utilisés pour attribuer automatiquement un utilisateur à une entreprise';
$string['autoenrol'] = 'Inscription automatique de l\'utilisateur';
$string['autoenrol_help'] = 'Si vous sélectionnez cette option, les nouveaux utilisateurs seront automatiquement inscrits aux cours sans licence ou à auto-inscription attribués à l\'entreprise.';
$string['autoenrol_unassigned'] = 'Inscription automatique aux cours non attribués';
$string['autoenrol_unassigned_help'] = 'Si vous sélectionnez cette option, les nouveaux utilisateurs seront automatiquement inscrits à des cours sans licence ou à inscription automatique qui ne sont attribués à aucune entreprise.';
$string['choosepassword'] = 'Créer un nouvel utilisateur';
$string['company'] = 'Les utilisateurs par défaut de l\'entreprise sont affectés à';
$string['configcompany'] = 'Il s\'agit de la société à laquelle l\'utilisateur sera affecté une fois qu\'il aura terminé le processus d\'inscription si aucune autre société n\'est définie via l\'inscription ou via le domaine de messagerie.';
$string['configrole'] = 'C\'est le rôle que l\'utilisateur se verra attribuer une fois qu\'il aura terminé le processus d\'inscription';
$string['emailasusernamehelp'] = 'Entrez votre adresse email. Ce sera votre nom d\'utilisateur';
$string['emaildomaindoesntmatch'] = 'Votre domaine de messagerie n\'est pas dans la liste des domaines acceptés pour cette entreprise';
$string['enable'] = 'Activer';
$string['enable_help'] = 'Les nouveaux utilisateurs seront affectés à une entreprise lors de la création lorsque cela est activé';
$string['logininfo'] = 'Remplissez le formulaire ci-dessous pour créer un nouvel utilisateur. Un e-mail sera envoyé à l\'adresse e-mail que vous spécifiez pour vérifier le compte et autoriser l\'accès.';
$string['pluginname'] = 'Inscription Iomad';
$string['privacy:metadata'] = 'Le plug-in d\'inscription Local Iomad affiche uniquement les données stockées dans d\'autres emplacements.';
$string['role'] = 'Rôle à attribuer';
$string['showinstructions'] = 'Afficher les instructions d\'auto-inscription sur la page de connexion';
$string['showinstructions_help'] = 'Par défaut, Moodle affichera les instructions d\'auto-inscription sur la page de connexion lorsque l\'auto-inscription est activée. Cela permet de les supprimer';
$string['useemail'] = 'Forcer l\'e-mail à être le nom d\'utilisateur';
$string['useemail_help'] = 'La sélection de cette option supprimera la possibilité pour un utilisateur de sélectionner son propre nom d\'utilisateur. Leur adresse e-mail sera utilisée à la place.';
