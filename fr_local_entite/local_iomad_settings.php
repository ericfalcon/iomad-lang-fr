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
 * @subpackage iomad_settings
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['customtext2'] = 'Texte personnalisé 2';
$string['customtext3'] = 'Texte personnalisé 3';
$string['dateformat'] = 'Format de date';
$string['emaildelay'] = 'Délai de courriel';
$string['emaildelay_help'] = 'Tous les e-mails Iomad auront cette valeur (en secondes) ajoutée à l\'heure d\'envoi par défaut. Cela permet un délai par défaut dans l\'envoi, un peu comme pour les messages de forum, de tout e-mail Iomad. Les timings seront toujours impactés par la tâche cron local_mail mais ce délai sera une valeur minimale';
$string['iomadcertificate_border'] = 'Bordure par défaut du certificat d\'entreprise Iomad';
$string['iomadcertificate_borderdesc'] = 'Il s\'agit de l\'image de bordure par défaut utilisée pour le type de certificat Iomad Company. Vous pouvez le remplacer dans les pages d\'édition de l\'entreprise. L\'image téléchargée doit être de 800 pixels x 604 pixels.';
$string['iomadcertificate_logo'] = 'Logo par défaut pour le certificat d\'entreprise Iomad';
$string['iomadcertificate_logodesc'] = 'Il s\'agit de l\'image du logo par défaut utilisée pour le type de certificat Iomad Company. Vous pouvez le remplacer dans les pages d\'édition de l\'entreprise. L\'image téléchargée doit mesurer 80 pixels de haut et avoir un fond transparent.';
$string['iomadcertificate_signature'] = 'Signature par défaut pour le certificat d\'entreprise Iomad';
$string['iomadcertificate_signaturedesc'] = 'Il s\'agit de l\'image de signature par défaut utilisée pour le type de certificat Iomad Company. Vous pouvez le remplacer dans les pages d\'édition de l\'entreprise. L\'image téléchargée doit mesurer 31 pixels x 150 pixels et avoir un fond transparent';
$string['iomadcertificate_watermark'] = 'Filigrane par défaut pour le certificat de la société Iomad';
$string['iomadcertificate_watermarkdesc'] = 'Il s\'agit de l\'image de filigrane par défaut utilisée pour le type de certificat Iomad Company. Vous pouvez le remplacer dans les pages d\'édition de l\'entreprise. L\'image téléchargée ne doit pas dépasser 800 pixels x 604 pixels.';
$string['iomad_allow_username'] = 'Peut spécifier le nom d\'utilisateur';
$string['iomad_allow_username_help'] = 'La sélection de cette option permettra au champ du nom d\'utilisateur d\'être présenté lors de la création de comptes. Cela remplacera l\'utilisation de l\'adresse e-mail comme paramètre de nom d\'utilisateur.';
$string['iomad_autoenrol_managers'] = 'Inscrire les gestionnaires en tant que non-étudiants';
$string['iomad_autoenrol_managers_help'] = 'Si cette option est décochée, les comptes de gestionnaire ne seront pas inscrits en tant que rôles d\'enseignant de l\'entreprise dans les cours d\'inscription manuelle';
$string['iomad_autoreallocate_licenses'] = 'Réattribuer automatiquement la licence';
$string['iomad_autoreallocate_licenses_help'] = 'Si cette case est cochée, lorsque l\'entrée de cours sous licence d\'un utilisateur est supprimée dans le rapport d\'utilisateur, le système essaiera automatiquement d\'en réaffecter une autre à partir du pool de licences de l\'entreprise.';
$string['iomad_hidevalidcourses'] = 'Afficher uniquement les résultats du cours actuel dans les rapports par défaut';
$string['iomad_hidevalidcourses_help'] = 'Cela modifie l\'affichage des rapports d\'achèvement de sorte qu\'il n\'affiche par défaut que les résultats des cours actuels (ceux qui n\'ont pas encore expiré ou qui n\'ont pas d\'expiration).';
$string['iomad_max_list_classrooms'] = 'Nombre maximum de salles de classe répertoriées';
$string['iomad_max_list_classrooms_help'] = 'Ceci définit le nombre maximum de classes affichées sur une page';
$string['iomad_max_list_companies'] = 'Nombre maximum de sociétés listée';
$string['iomad_max_list_companies_help'] = 'Ceci définit le nombre maximum d\'entreprises affichées sur une page';
$string['iomad_max_list_competencies'] = 'Compétences maximales répertoriées';
$string['iomad_max_list_competencies_help'] = 'Ceci définit le nombre maximum de compétences affichées sur une page';
$string['iomad_max_list_courses'] = 'Nombre maximum de cours répertoriés';
$string['iomad_max_list_courses_help'] = 'Ceci définit le nombre maximum de cours affichés sur une page';
$string['iomad_max_list_email_templates'] = 'Nombre maximal de modèles d\'e-mails répertoriés';
$string['iomad_max_list_email_templates_help'] = 'Ceci définit le nombre maximum de modèles d\'e-mails affichés sur une page';
$string['iomad_max_list_frameworks'] = 'Nombre maximal de référentiels répertoriés';
$string['iomad_max_list_frameworks_help'] = 'Ceci définit le nombre maximum de référentiels affichés sur une page';
$string['iomad_max_list_licenses'] = 'Nombre maximal de licences répertoriées';
$string['iomad_max_list_licenses_help'] = 'Ceci définit le nombre maximum de licences affichées sur une page';
$string['iomad_max_list_templates'] = 'Nombre maximal de modèles de plan d\'apprentissage répertoriés';
$string['iomad_max_list_templates_help'] = 'Cela définit le nombre maximum de modèles de plan d\'apprentissage affichés sur une page';
$string['iomad_max_list_users'] = 'Nombre maximal d\'utilisateurs répertoriés';
$string['iomad_max_list_users_help'] = 'Ceci définit le nombre maximum d\'utilisateurs affichés sur une page';
$string['iomad_max_select_courses'] = 'Nombre maximum de cours répertoriés dans le sélecteur';
$string['iomad_max_select_courses_help'] = 'Cela définit le nombre maximum de cours affichés dans un sélecteur de recherche de formulaire avant que trop de cours ne soient affichés';
$string['iomad_max_select_frameworks'] = 'Nombre maximum de référentiels répertoriés dans le sélecteur';
$string['iomad_max_select_frameworks_help'] = 'Cela définit le nombre maximum de référentiels affichés dans un sélecteur de recherche de formulaire avant que trop de référentiels ne soient affichés';
$string['iomad_max_select_templates'] = 'Nombre maximal de modèles de plan d\'apprentissage répertoriés dans le sélecteur';
$string['iomad_max_select_templates_help'] = 'Cela définit le nombre maximum de modèles de plan d\'apprentissage affichés dans un sélecteur de recherche de formulaire avant que trop de modèles ne soient affichés';
$string['iomad_max_select_users'] = 'Nombre maximal d\'utilisateurs répertoriés dans le sélecteur';
$string['iomad_max_select_users_help'] = 'Cela définit le nombre maximal d\'utilisateurs affichés dans un sélecteur de recherche de formulaire avant que trop d\'utilisateurs soient affichés.';
$string['iomad_report_fields'] = 'Champs de profil de rapport supplémentaires';
$string['iomad_report_fields_help'] = 'Il s\'agit d\'une liste de champs de profil séparés par une virgule. Si vous souhaitez utiliser un champ de profil facultatif, vous devez utiliser profile_field_<shortname> où <shortname> est le nom abrégé défini pour le champ de profil. L\'ordre donné est l\'ordre dans lequel ils sont affichés.';
$string['iomad_report_grade_places'] = 'Nombre de décimales pour les notes dans les rapports';
$string['iomad_report_grade_places_help'] = 'Cela définit le nombre de décimales qui seront affichées dans les rapports Iomad chaque fois qu\'une note d\'utilisateur est répertoriée';
$string['iomad_settings:addinstance'] = 'Ajouter de nouveaux paramètres Iomad';
$string['iomad_sync_department'] = 'Synchroniser le département de l\'entreprise avec le profil';
$string['iomad_sync_department_help'] = 'Si vous sélectionnez cette option, le champ du profil utilisateur du service sera synchronisé avec le nom du service de l\'entreprise dans lequel se trouve l\'utilisateur.';
$string['iomad_sync_institution'] = 'Synchroniser le nom de l\'entreprise avec le profil';
$string['iomad_sync_institution_help'] = 'Si vous sélectionnez cette option, le champ du profil utilisateur de l\'institution sera synchronisé avec le nom abrégé de l\'entreprise dans laquelle se trouve l\'utilisateur.';
$string['iomad_use_email_as_username'] = 'Utiliser l\'adresse e-mail comme nom d\'utilisateur';
$string['iomad_use_email_as_username_help'] = 'La sélection de cette option changera la façon dont un nom d\'utilisateur est automatiquement créé pour un nouveau compte d\'utilisateur dans Iomad afin qu\'il utilise simplement l\'adresse e-mail.';
$string['pluginname'] = 'Paramètres Iomad';
$string['privacy:metadata'] = 'Le plug-in de paramètres Local Iomad affiche uniquement les données stockées dans d\'autres emplacements.';
$string['reset_annually'] = 'Annuellement';
$string['reset_daily'] = 'Quotidiennement';
$string['reset_never'] = 'Jamais';
$string['reset_sequence'] = 'Réinitialiser le numéro de séquence';
$string['samplecertify'] = 'Il s\'agit de certifier que';
$string['samplecode'] = 'Numéro de certificat :';
$string['samplecoursegrade'] = 'avec le résultat de';
$string['sampledate'] = 'au';
$string['sampleonbehalfof'] = 'Au nom de la Société';
$string['samplesigned'] = 'Signé:';
$string['samplestatement'] = 'a suivi une formation en ligne sur';
$string['sampletitle'] = 'Certificat de formation';
$string['serialnumberformat'] = 'Format du numéro de série';
$string['serialnumberformat_help'] = '<p>Les champs de texte personnalisé et le format du numéro de série peuvent avoir les variables suivantes :</p><ul> <li>{EC} = code d\'établissement</li> <li>{CC} = numéro d\'identification du cours</ li> <li>{CD:DDMMYY} = Date (avec format)</li> <li>{SEQNO:n} = Numéro de séquence (avec remplissage n)</li> <li>{SN} = Numéro de série du certificat (vide si utilisé dans le champ Format du numéro de série))</li> </ul>';
$string['typesample'] = 'exemple';
