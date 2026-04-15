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

defined('MOODLE_INTERNAL') || die();
$string['canntenrol'] = 'L’inscription est désactivée ou inactive';
$string['customwelcomemessage'] = 'Message de bienvenue personnalisé';
$string['defaultrole'] = 'Attribution de rôle par défaut';
$string['defaultrole_desc'] = 'Sélectionnez le rôle qui doit être attribué aux utilisateurs lors de l’inscription via une licence';
$string['enrolenddate'] = 'Date de fin';
$string['enrolenddaterror'] = 'La date de fin d’inscription ne peut pas être antérieure à la date de début';
$string['enrolme'] = 'Cliquez ici pour commencer ce cours';
$string['enrolperiod'] = 'Période d’inscription';
$string['enrolperiod_desc'] = 'Durée par défaut de la période d’inscription (en secondes).';
$string['enrolstartdate'] = 'Date de début';
$string['groupkey'] = 'Utiliser les clés d’inscription de groupe';
$string['groupkey_desc'] = 'Utiliser les clés d’inscription de groupe par défaut.';
$string['groupkey_help'] = 'En plus de restreindre l’accès au cours, l’utilisation d’une clé d’inscription de groupe permet d’ajouter automatiquement les utilisateurs au groupe lors de leur inscription. Une clé d’inscription doit être définie dans les paramètres du cours ainsi qu’une clé de groupe dans les paramètres du groupe.';
$string['license:config'] = 'Configurer les instances d’inscription par licence';
$string['license:manage'] = 'Gérer les utilisateurs inscrits';
$string['license:unenrol'] = 'Désinscrire les utilisateurs du cours';
$string['license:unenrollicense'] = 'Désinscrire une licence du cours';
$string['license:unenrolself'] = 'Autoriser l’utilisateur à se désinscrire';
$string['licensenolongervalid'] = 'Votre licence pour ce cours n’est plus valide';
$string['licensenotyetvalid'] = 'Votre accès à ce cours sera disponible le {$a}';
$string['longtimenosee'] = 'Désinscription après inactivité';
$string['longtimenosee_help'] = 'Si les utilisateurs n’accèdent pas à un cours pendant une longue période, ils sont automatiquement désinscrits. Ce paramètre définit ce délai, indépendamment de la durée de la licence.';
$string['maxenrolled'] = 'Nombre maximal d’utilisateurs inscrits';
$string['maxenrolledreached'] = 'Le nombre maximal d’utilisateurs autorisés pour cette licence a été atteint.';
$string['maxenrolled_help'] = 'Nombre maximal d’utilisateurs pouvant utiliser une licence. 0 signifie aucune limite.';
$string['nolicenseinformationfound'] = 'Votre compte ne dispose pas d’une licence valide pour accéder à ce cours. Si vous avez besoin d’un accès, contactez le responsable de votre entité pour obtenir une licence.';
$string['password'] = 'Clé d’inscription';
$string['passwordinvalid'] = 'Clé d’inscription incorrecte, veuillez réessayer';
$string['passwordinvalidhint'] = 'Cette clé d’inscription est incorrecte, veuillez réessayer<br /> (Indice : elle commence par « {$a} »)';
$string['password_help'] = 'Une clé d’inscription permet de restreindre l’accès au cours. Si le champ est vide, tout utilisateur peut s’inscrire. La clé n’est requise qu’une seule fois, lors de l’inscription.';
$string['pluginname'] = 'Inscription par licence';
$string['pluginname_desc'] = 'Le plugin d’inscription par licence permet aux utilisateurs d’accéder aux cours après attribution d’une licence. L’inscription s’appuie sur le plugin d’inscription manuelle, qui doit être activé dans le cours.';
$string['privacy:metadata'] = 'Le plugin d’inscription par licence affiche uniquement des données stockées dans d’autres composants.';
$string['requirepassword'] = 'Exiger une clé d’inscription';
$string['requirepassword_desc'] = 'Exiger une clé d’inscription dans les nouveaux cours et empêcher sa suppression dans les cours existants.';
$string['role'] = 'Attribuer un rôle';
$string['sendcoursewelcomemessage'] = 'Envoyer un message de bienvenue au cours';
$string['sendcoursewelcomemessage_help'] = 'Si activé, les utilisateurs reçoivent un message de bienvenue par e-mail lors de leur inscription.';
$string['showhint'] = 'Afficher un indice';
$string['showhint_desc'] = 'Afficher la première lettre de la clé d’accès invité.';
$string['status'] = 'Autoriser les inscriptions par licence';
$string['status_desc'] = 'Autoriser par défaut les utilisateurs à s’inscrire au cours.';
$string['status_help'] = 'Détermine si un utilisateur peut s’inscrire et se désinscrire du cours.';
$string['unenrollicenseconfirm'] = 'Voulez-vous vraiment vous désinscrire du cours « {$a} » ?';
$string['usepasswordpolicy'] = 'Utiliser la politique de mot de passe';
$string['usepasswordpolicy_desc'] = 'Utiliser la politique standard de mot de passe pour les clés d’inscription.';
$string['welcometocourse'] = 'Bienvenue à {$a}';
$string['welcometocoursetext'] = 'Bienvenue dans {$a->coursename} ! Veuillez compléter votre profil afin que nous puissions mieux vous connaître : {$a->profileurl}';