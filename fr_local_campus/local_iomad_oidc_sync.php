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
$string['agreeconsent'] = 'Donner son consentement';
$string['approvalset'] = 'Autorisation de synchronisation IOMAD OIDC accordée avec succès';
$string['boilerplate'] = 'Pour configurer les tâches de synchronisation OIDC, vous devez d’abord fournir le nom du tenant ou le GUID, puis cliquer sur le lien d’autorisation. Une fois l’autorisation accordée, si la connexion ne s’affiche pas en vert, cliquez sur la croix rouge pour vérifier l’état.';
$string['configerror'] = 'Configuration invalide détectée.';
$string['configlogs'] = 'Journaux de configuration';
$string['consent_title'] = 'Consentement de synchronisation OIDC du campus';
$string['consentlink'] = 'Soumettre le consentement via Microsoft';
$string['graphproperties'] = 'Champs utilisateur sélectionnés via Microsoft Graph';
$string['graphproperties_help'] = 'Par défaut, seul un ensemble limité de propriétés est retourné (businessPhones, displayName, givenName, id, jobTitle, mail, mobilePhone, officeLocation, preferredLanguage, surname, userPrincipalName).<br>Pour retourner un autre ensemble de propriétés, vous pouvez spécifier la liste souhaitée sous forme de valeurs séparées par des virgules, sans espaces. Par exemple, pour retourner <b>uniquement</b> displayName, givenName et postalCode, définissez cette valeur sur <i>displayName,givenName,postalCode</i>.';
$string['iomad_oidc_sync:manage'] = 'Gérer les paramètres de synchronisation OIDC IOMAD';
$string['iomad_oidc_sync:view'] = 'Afficher l’état de la synchronisation OIDC IOMAD';
$string['loglink'] = 'Afficher le journal de configuration';
$string['managermapping'] = '<b>Remarque</b> – Si vous associez des champs locaux à l’objet manager distant, utilisez le format <b>manager.<i>champ</i></b> comme valeur d’association. Par exemple : <b>manager.mail</b>.';
$string['oidc_sync_task'] = 'Tâche de synchronisation OIDC IOMAD';
$string['pluginname'] = 'Synchronisation OIDC IOMAD';
$string['privacy:metadata'] = 'Le plugin de synchronisation OIDC IOMAD affiche uniquement des données stockées dans d’autres composants.';
$string['settenantnameorguid'] = 'Définir le nom du tenant ou le GUID';
$string['syncgroupid'] = 'Identifiant facultatif de l’objet groupe à synchroniser';
$string['tenantnameorguid'] = 'Nom du tenant ou GUID';
$string['tenantnameorguid_changed_success'] = 'Les options du campus ont été enregistrées avec succès';
$string['tenantnameorguid_changed_warning'] = 'Les options du campus ont été enregistrées avec succès.<br>En raison de la modification du nom du tenant ou du GUID, vous devrez peut‑être repasser par le processus d’autorisation.';
$string['unsuspendonsync'] = 'Réactiver les utilisateurs existants lors de la synchronisation';
$string['useroptions'] = 'Concernant les utilisateurs supprimés, nous';
// ---- Traductions local_iomad_settings ----

$string['iomad_downloaddetails'] = 'Télécharger les détails d’activité dans le rapport d’achèvement des cours';

$string['iomad_downloaddetails_help'] = 'Si cette option est activée, tous les détails des critères d’achèvement du cours pour l’utilisateur seront téléchargés, ainsi que leur statut. Sans cette option, seul le statut sera inclus.';

$string['iomad_showcharts'] = 'Afficher les graphiques d’achèvement des cours par défaut';

$string['iomad_showcharts_help'] = 'Si activé, les graphiques seront affichés en premier, avec la possibilité de les afficher sous forme de texte à la place';

$string['iomad_showcompanydropdown'] = 'Afficher le sélecteur de campus dans la barre de navigation';

$string['iomad_showcompanydropdown_help'] = 'Si cette option est activée, le sélecteur de campus est affiché dans la barre de navigation lorsque l’utilisateur peut accéder à plusieurs campus. Si cette option est désactivée, un autre moyen devra être fourni pour accéder au sélecteur de campus si l’utilisateur n’a pas accès au tableau de bord IOMAD du campus actuel.';

$string['iomad_show_company_structure'] = 'Afficher la hiérarchie des campus dans le sélecteur';

$string['iomad_show_company_structure_help'] = 'Si activé, les campus enfants apparaîtront en retrait sous le campus parent dans le sélecteur de campus. Cela peut avoir un impact sur les performances pour les sites volumineux.';

$string['iomad_useicons'] = 'Utiliser des icônes dans le tableau de bord IOMAD';

$string['iomad_useicons_help'] = 'Si activé, les icônes du tableau de bord utiliseront des images au lieu des icônes Font Awesome';

$string['iomad_use_mandatory_courses'] = 'Activer les cours obligatoires';

$string['iomad_use_mandatory_courses_help'] = 'L’activation des cours obligatoires permet de marquer certains cours comme obligatoires. Les rapports d’achèvement et le tableau de bord de l’utilisateur peuvent ensuite filtrer ces cours.';