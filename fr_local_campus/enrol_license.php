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
 * @package    enrol
 * @subpackage license
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['canntenrol'] = 'L\'inscription est désactivée ou inactive';
$string['customwelcomemessage'] = 'Message de bienvenue personnalisé';
$string['defaultrole'] = 'Attribution de rôle par défaut';
$string['defaultrole_desc'] = 'Sélectionnez le rôle qui doit être attribué aux utilisateurs lors de l\'inscription de la licence';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddaterror'] = 'La date de fin d\'inscription ne peut pas être antérieure à la date de début';
$string['enrolme'] = 'Cliquez ici pour commencer ce cours';
$string['enrolperiod'] = 'Période d\'inscription';
$string['enrolperiod_desc'] = 'Durée par défaut de la période d\'inscription (en secondes).';
$string['enrolstartdate'] = 'Date de début';
$string['groupkey'] = 'Utiliser les clés d\'inscription de groupe';
$string['groupkey_desc'] = 'Utilisez les clés d\'inscription de groupe par défaut.';
$string['groupkey_help'] = 'En plus de limiter l\'accès au cours à ceux qui connaissent la clé, l\'utilisation d\'une clé d\'inscription de groupe signifie que les utilisateurs sont automatiquement ajoutés au groupe lorsqu\'ils s\'inscrivent au cours. Pour utiliser une clé d\'inscription de groupe, une clé d\'inscription doit être spécifiée dans les paramètres du cours ainsi que la clé d\'inscription de groupe dans les paramètres du groupe.';
$string['license:config'] = 'Configurer les instances d\'inscription de licence';
$string['license:manage'] = 'Gérer les utilisateurs inscrits';
$string['license:unenrol'] = 'Désinscrire les utilisateurs du cours';
$string['license:unenrollicense'] = 'Désinscription de la licence au cours';
$string['license:unenrolself'] = 'L\'utilisateur peut se désinscrire';
$string['licensenolongervalid'] = 'Votre licence pour ce cours n\'est plus valide';
$string['licensenotyetvalid'] = 'Votre accès à ce cours sera disponible le {$a}';
$string['longtimenosee'] = 'Désinscription inactif après';
$string['longtimenosee_help'] = 'Si les utilisateurs n\'ont pas accédé à un cours pendant une longue période, ils sont automatiquement désinscrits. Ce paramètre spécifie cette limite de temps. Ceci est distinct de l\'heure d\'inscription qui est définie par la licence elle-même.';
$string['maxenrolled'] = 'Nombre maximal d\'utilisateurs inscrits';
$string['maxenrolledreached'] = 'Le nombre maximum d\'utilisateurs autorisés à enregistrer une licence a déjà été atteint.';
$string['maxenrolled_help'] = 'Spécifie le nombre maximal d\'utilisateurs pouvant enregistrer une licence. 0 signifie aucune limite.';
$string['nolicenseinformationfound'] = 'Votre compte ne dispose pas d\'une licence valide pour accéder à ce cours. Si vous avez besoin d\'un accès, contactez le responsable de votre campuss pour obtenir une licence.';
$string['password'] = 'clé d\'inscription';
$string['passwordinvalid'] = 'Clé d\'inscription incorrecte, veuillez réessayer';
$string['passwordinvalidhint'] = 'Cette clé d\'inscription était incorrecte, veuillez réessayer<br /> (Voici un indice - il commence par \'{$a}\')';
$string['password_help'] = 'Une clé d\'inscription permet de restreindre l\'accès au cours aux seuls connaisseurs de la clé. Si le champ est laissé vide, n\'importe quel utilisateur peut s\'inscrire au cours. Si une clé d\'inscription est spécifiée, tout utilisateur tentant de s\'inscrire au cours devra fournir la clé. Notez qu\'un utilisateur n\'a besoin de fournir la clé d\'inscription qu\'UNE SEULE FOIS, lors de son inscription au cours.';
$string['pluginname'] = 'Inscription à la licence';
$string['pluginname_desc'] = 'Le plug-in d\'inscription de licence permet aux utilisateurs d\'accéder aux cours après s\'être vu attribuer une licence. En interne, l\'inscription se fait via le plugin d\'inscription manuelle qui doit être activé dans le même cours.';
$string['privacy:metadata'] = 'Le plug-in d\'inscription à la licence affiche uniquement les données stockées dans d\'autres emplacements.';
$string['requirepassword'] = 'Exiger une clé d\'inscription';
$string['requirepassword_desc'] = 'Exiger la clé d\'inscription dans les nouveaux cours et empêcher la suppression de la clé d\'inscription des cours existants.';
$string['role'] = 'Attribuer un rôle';
$string['sendcoursewelcomemessage'] = 'Envoyer un message de bienvenue au cours';
$string['sendcoursewelcomemessage_help'] = 'Si cette option est activée, les utilisateurs reçoivent un message de bienvenue par e-mail lorsqu\'ils s\'inscrivent à un cours.';
$string['showhint'] = 'Dévoiler un indice';
$string['showhint_desc'] = 'Afficher la première lettre de la clé d\'accès invité.';
$string['status'] = 'Autoriser les inscriptions de licence';
$string['status_desc'] = 'Autoriser les utilisateurs à s\'inscrire au cours par défaut.';
$string['status_help'] = 'Ce paramètre détermine si un utilisateur peut s\'inscrire (et également se désinscrire s\'il dispose de l\'autorisation appropriée) lui-même au cours.';
$string['unenrollicenseconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours "{$a}" ?';
$string['usepasswordpolicy'] = 'Utiliser la politique de mot de passe';
$string['usepasswordpolicy_desc'] = 'Utilisez une stratégie de mot de passe standard pour les clés d\'inscription.';
$string['welcometocourse'] = 'Bienvenue à {$a}';
$string['welcometocoursetext'] = 'Bienvenue dans {$a->coursename} ! Si vous ne l\'avez pas déjà fait, vous devez modifier votre page de profil afin que nous puissions en savoir plus sur vous : {$a->profileurl}';
