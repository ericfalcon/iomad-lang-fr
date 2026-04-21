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

$string['application_updated'] = 'Le paramètre de l’application OpenID Connect a été mis à jour.';
$string['application_updated_azure'] = 'Le paramètre de l’application OpenID Connect a été mis à jour.<br/><span class="warning" style="color:red;">L’administrateur Azure devra <b>fournir le consentement administrateur</b> et <b>vérifier à nouveau la configuration</b> sur la <a href="{$a}" target="_blank">page de configuration de l’intégration Microsoft 365</a> si les paramètres « Type de fournisseur d’identité (IdP) » ou « Méthode d’authentification client » sont modifiés.</span>';
$string['authendpoint'] = 'Point de terminaison d’autorisation';
$string['authendpoint_help'] = 'URL du point de terminaison d’autorisation de votre fournisseur d’identité.<br/>Si le site doit autoriser des utilisateurs provenant d’autres locataires, un point de terminaison spécifique au locataire ne peut pas être utilisé.';
$string['authentication_and_endpoints_saved'] = 'Les paramètres d’authentification et des points de terminaison ont été mis à jour.';
$string['auth_method_certificate'] = 'Certificat';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Lien vers la configuration du fournisseur d’identité et de l’authentification</a>';
$string['cfg_field_mapping_desc'] = 'Les données du profil utilisateur peuvent être associées depuis le fournisseur d’identité OpenID Connect vers Moodle.<br/><ul><li>Les données de base sont disponibles dans les jetons d’identification.</li><li>Avec Azure AD, des données supplémentaires peuvent être exposées via le plugin Microsoft 365 (local_o365).</li><li>Si la synchronisation SDS est activée, certains champs peuvent être synchronisés par tâche planifiée.</li></ul>';
$string['cfg_forceredirect_key'] = 'Forcer la redirection';
$string['cfg_forceredirect_desc'] = 'Si activé, la page de connexion standard est ignorée et l’utilisateur est automatiquement redirigé vers OpenID Connect. Peut être contourné avec le paramètre d’URL ?noredirect=1.';
$string['cfg_frontchannellogouturl_key'] = 'URL de déconnexion du canal frontal';
$string['cfg_frontchannellogouturl_desc'] = 'URL appelée par le fournisseur d’identité lors de la déconnexion.<br/>Pour Microsoft Azure AD, il s’agit de l’« URL de déconnexion du canal frontal ».';
$string['cfg_logoutendpoint_key'] = 'Point de terminaison de déconnexion IdP';
$string['cfg_logoutendpoint_desc'] = 'URL du point de terminaison de déconnexion du fournisseur d’identité.';
$string['cfg_redirecturi_key'] = 'URL de redirection';
$string['cfg_signoffintegration_key'] = 'Déconnexion unique (Moodle → IdP)';
$string['cfg_signoffintegration_desc'] = 'Si activé, la déconnexion de Moodle déclenchera également une tentative de déconnexion auprès du fournisseur d’identité.<br/>Pour Microsoft Azure AD, l’URL du site Moodle ({$a}) doit être enregistrée comme URI de redirection.';
$string['cfg_userrestrictionscasesensitive_key'] = 'Restrictions utilisateur sensibles à la casse';
$string['cfg_userrestrictionscasesensitive_desc'] = 'Détermine si les restrictions utilisateur utilisent une correspondance sensible à la casse.';
$string['cleanup_iomadoidc_tokens'] = 'Nettoyer les jetons OpenID Connect';
$string['clientauthmethod'] = 'Méthode d’authentification client';
$string['clientauthmethod_help'] = '<ul><li>Tous les fournisseurs d’identité peuvent utiliser la méthode <b>Secret</b>.</li><li>La plateforme d’identité Microsoft (v2.0) supporte également l’authentification par <b>Certificat</b>.</li></ul>';
$string['clientid'] = 'ID d’application';
$string['clientid_help'] = 'Identifiant de l’application enregistrée auprès du fournisseur d’identité.';
$string['clientsecret'] = 'Secret client';
$string['clientsecret_help'] = 'Secret d’authentification fourni par le fournisseur d’identité.';
$string['clientcert'] = 'Certificat client (clé publique)';
$string['clientcert_help'] = 'Certificat public utilisé pour l’authentification auprès du fournisseur d’identité.';
$string['clientprivatekey'] = 'Clé privée du certificat client';
$string['clientprivatekey_help'] = 'Clé privée associée au certificat client.';
$string['clientcertsource_2'] = 'Source du certificat client';
$string['clientcertsource_2_help'] = 'Définit l’origine du certificat lors de l’authentification par certificat. Le mode « Texte brut » nécessite de saisir le contenu du certificat et de la clé privée dans les champs suivants. Le mode « Nom de fichier » requiert que les fichiers soient présents dans le dossier microsoft_certs du répertoire de données Moodle.';
$string['clientprivatekeyfile_2'] = 'Nom du fichier de la clé privée du certificat client';
$string['clientprivatekeyfile_2_help'] = 'Nom du fichier contenant la clé privée du certificat client lorsque le mode « Nom de fichier » est utilisé. Le fichier doit se trouver dans le dossier microsoft_certs du répertoire de données Moodle.';
$string['clientcertfile_2'] = 'Nom du fichier du certificat client (clé publique)';
$string['clientcertfile_2_help'] = 'Nom du fichier du certificat ou de la clé publique utilisé(e) pour l’authentification auprès du fournisseur d’identité lorsque le mode « Nom de fichier » est utilisé.';
$string['clientcertpassphrase_2'] = 'Phrase de passe du certificat client';
$string['clientcertpassphrase_2_help'] = 'Phrase de passe utilisée pour déchiffrer la clé privée du certificat client si celle‑ci est chiffrée.';
$string['delete_token'] = 'Supprimer le jeton';
$string['delete_token_and_reference'] = 'Supprimer le jeton et la référence';
$string['error_empty_tenantnameorguid'] = 'Le nom du locataire ou le GUID ne peut pas être vide lors de l’utilisation d’Azure AD ou de la plateforme d’identité Microsoft.';
$string['heading_additional_options'] = 'Options additionnelles';
$string['heading_basic'] = 'Paramètres de base';
$string['heading_debugging'] = 'Débogage';
$string['heading_display'] = 'Affichage';
$string['heading_sign_out'] = 'Déconnexion';
$string['heading_user_restrictions'] = 'Restrictions utilisateur';
$string['idptype'] = 'Type de fournisseur d’identité (IdP)';
$string['idp_type_other'] = 'Autre';
$string['iomadoidcresource'] = 'Ressource';
$string['iomadoidcresource_help'] = 'Ressource OpenID Connect à utiliser.';
$string['iomadoidcscope'] = 'Portée';
$string['iomadoidcscope_help'] = 'Portée OpenID Connect utilisée lors de l’authentification.';
$string['silentlogin'] = 'Mode de connexion silencieuse';
$string['silentlogin_help'] = 'Lorsque ce mode est activé, Moodle tente d’utiliser la session active d’un utilisateur déjà authentifié auprès du fournisseur d’identité afin de le connecter automatiquement. L’option « Forcer la connexion des utilisateurs » doit être activée, ainsi que l’option « Forcer la redirection ».';
$string['tenantnameorguid'] = 'Nom du locataire ou GUID';
$string['tenantnameorguid_help'] = 'Indiquez le nom du locataire ou son identifiant GUID, sans le préfixe https://.';
$string['tokenendpoint'] = 'Point de terminaison du jeton';
$string['tokenendpoint_help'] = 'URL du point de terminaison du jeton du fournisseur d’identité.';
$string['token_deleted'] = 'Le jeton a été supprimé avec succès.';
$string['autoadd'] = 'Ajout automatique';