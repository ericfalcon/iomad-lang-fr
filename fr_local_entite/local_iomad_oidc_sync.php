<?php
defined('MOODLE_INTERNAL') || die();

$string['agreeconsent'] = 'Donner son consentement';
$string['approvalset'] = 'Autorisation de synchronisation IOMAD OIDC accordée avec succès';
$string['boilerplate'] = 'Pour configurer les tâches de synchronisation OIDC, vous devez d’abord fournir le NOM DU TENANT ou le GUID, puis cliquer sur le lien d’autorisation. Une fois l’autorisation accordée, si la connexion ne s’affiche pas en vert, cliquez sur la croix rouge pour vérifier l’état.';
$string['configerror'] = 'Configuration invalide détectée.';
$string['configlogs'] = 'Journaux de configuration';
$string['consent_title'] = 'Consentement de synchronisation OIDC de l’entité';
$string['consentlink'] = 'Soumettre le consentement via Microsoft';
$string['graphproperties'] = 'Champs utilisateur sélectionnés via Microsoft Graph';
$string['graphproperties_help'] = 'Par défaut, seul un ensemble limité de propriétés est retourné (businessPhones, displayName, givenName, id, jobTitle, mail, mobilePhone, officeLocation, preferredLanguage, surname, userPrincipalName).<br> Pour retourner un autre ensemble de propriétés, vous pouvez spécifier la liste souhaitée sous forme de valeurs séparées par des virgules, sans espaces. Par exemple, pour retourner <b>uniquement</b> displayName, givenName et postalCode, définissez cette valeur sur <i>displayName,givenName,postalCode</i>.';
$string['iomad_oidc_sync:manage'] = 'Gérer les paramètres de synchronisation OIDC IOMAD';
$string['iomad_oidc_sync:view'] = 'Afficher l’état de la synchronisation OIDC IOMAD';
$string['loglink'] = 'Afficher le journal de configuration';
$string['managermapping'] = '<b>REMARQUE</b> – Si vous associez des champs locaux à l’objet manager distant, veuillez utiliser le format <b>manager.<i>champ</i></b> comme valeur d’association. Par exemple : <b>manager.mail</b>.';
$string['oidc_sync_task'] = 'Tâche de synchronisation OIDC IOMAD';
$string['pluginname'] = 'Synchronisation OIDC IOMAD';
$string['privacy:metadata'] = 'Le plugin de synchronisation OIDC IOMAD affiche uniquement des données stockées dans d’autres emplacements.';
$string['settenantnameorguid'] = 'Définir le nom du tenant ou le GUID';
$string['syncgroupid'] = 'Identifiant facultatif de l’objet groupe à synchroniser';
$string['tenantnameorguid'] = 'Nom du tenant ou GUID';
$string['tenantnameorguid_changed_success'] = 'Les options de l’entité ont été enregistrées avec succès';
$string['tenantnameorguid_changed_warning'] = 'Les options de l’entité ont été enregistrées avec succès.<br> En raison de la modification du nom du tenant ou du GUID, vous devrez peut‑être passer à nouveau par le processus d’autorisation.';
$string['unsuspendonsync'] = 'Réactiver les utilisateurs existants lors de la synchronisation';
$string['useroptions'] = 'Concernant les utilisateurs supprimés, nous';