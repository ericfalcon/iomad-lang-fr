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
$string['application_updated_azure'] = 'Le paramètre de l’application OpenID Connect a été mis à jour.<br/><span class="warning" style="color:red;">L’administrateur Azure devra <b>fournir le consentement administrateur</b> et <b>vérifier à nouveau la configuration</b> sur la page de configuration de l’intégration Microsoft 365 si les paramètres « Type de fournisseur d’identité (IdP) » ou « Méthode d’authentification client » sont modifiés.</span>';
$string['authendpoint'] = 'Point de terminaison d’autorisation';
$string['authendpoint_help'] = 'URL du point de terminaison d’autorisation de votre fournisseur d’identité.<br/> Notez que si le site doit être configuré pour permettre aux utilisateurs d’autres locataires d’accéder, le point de terminaison spécifique au locataire ne peut pas être utilisé.';
$string['authentication_and_endpoints_saved'] = 'Paramètres d’authentification et de points de terminaison mis à jour.';
$string['auth_method_certificate'] = 'Certificat';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Lien vers la configuration du fournisseur d’identité et de l’authentification</a>';
$string['cfg_field_mapping_desc'] = 'Les données de profil utilisateur peuvent être mappées depuis le fournisseur d’identité OpenID Connect vers Moodle.<br/> <ul> <li>Les données de profil de base sont disponibles à partir des jetons d’identification.</li> <li>Si Azure AD est utilisé comme fournisseur d’identité, des données supplémentaires peuvent être exposées via le plugin d’intégration Microsoft 365 (local_o365).</li> <li>Si la synchronisation SDS est activée, certains champs peuvent être synchronisés depuis SDS lors de l’exécution de la tâche planifiée correspondante.</li> </ul>';
$string['cfg_forceredirect_desc'] = 'Si activé, ignore la page d’index de connexion et redirige automatiquement vers OpenID Connect. Peut être contourné avec le paramètre d’URL ?noredirect=1';
$string['cfg_forceredirect_key'] = 'Forcer la redirection';
$string['cfg_frontchannellogouturl_desc'] = 'URL déclenchée par le fournisseur d’identité lors de la déconnexion.<br/> Pour Microsoft Azure AD, ce paramètre correspond à « URL de déconnexion du canal frontal ».';
$string['cfg_frontchannellogouturl_key'] = 'URL de déconnexion du canal frontal';
$string['cfg_logoutendpoint_desc'] = 'URL du point de terminaison de déconnexion du fournisseur d’identité.';
$string['cfg_logoutendpoint_key'] = 'Point de terminaison de déconnexion IdP';
$string['cfg_redirecturi_key'] = 'URL de redirection';
$string['cfg_signoffintegration_desc'] = 'Si activé, la déconnexion de Moodle déclenchera également une tentative de déconnexion auprès du fournisseur d’identité.<br/> Pour Microsoft Azure AD, l’URL du site Moodle ({$a}) doit être enregistrée comme URI de redirection.';
$string['cfg_signoffintegration_key'] = 'Déconnexion unique (Moodle → IdP)';
$string['cfg_userrestrictionscasesensitive_desc'] = 'Détermine si les restrictions utilisateur utilisent une correspondance sensible à la casse.';
$string['cfg_userrestrictionscasesensitive_key'] = 'Restrictions utilisateur sensibles à la casse';
$string['cleanup_iomadoidc_tokens'] = 'Nettoyer les jetons OpenID Connect';
$string['clientauthmethod'] = 'Méthode d’authentification client';
$string['clientauthmethod_help'] = '<ul> <li>Tous les fournisseurs d’identité peuvent utiliser la méthode <b>Secret</b>.</li> <li>La plateforme d’identité Microsoft (v2.0) peut également utiliser un <b>Certificat</b>.</li> </ul>';
$string['clientcert'] = 'Certificat client (clé publique)';
$string['clientcert_help'] = 'Certificat public utilisé pour l’authentification auprès du fournisseur d’identité.';
$string['clientid'] = 'ID d’application';
$string['clientid_help'] = 'Identifiant de l’application enregistrée auprès du fournisseur d’identité.';
$string['clientprivatekey'] = 'Clé privée du certificat client';
$string['clientprivatekey_help'] = 'Clé privée associée au certificat client.';
$string['clientsecret'] = 'Secret client';
$string['clientsecret_help'] = 'Secret d’authentification fourni par le fournisseur d’identité.';
$string['delete_token'] = 'Supprimer le jeton';
$string['delete_token_and_reference'] = 'Supprimer le jeton et la référence';
$string['error_empty_tenantnameorguid'] = 'Le nom du locataire ou le GUID ne peut pas être vide lors de l’utilisation d’Azure AD ou de la plateforme d’identité Microsoft.';
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
$string['iomadoidcscope_help'] = 'Portée OpenID Connect utilisée par l’authentification.';
$string['tenantnameorguid'] = 'Nom du locataire ou GUID';
$string['tenantnameorguid_help'] = 'Indiquez le nom du locataire ou son identifiant GUID (sans https://).';
$string['tokenendpoint'] = 'Point de terminaison du jeton';
$string['tokenendpoint_help'] = 'URL du point de terminaison de jeton du fournisseur d’identité.';
$string['token_deleted'] = 'Le jeton a été supprimé avec succès';
// ---- Ajouts manquants auth_iomadoidc ----
$string['application_not_changed'] = 'Le paramètre de l’application OpenID Connect n’a pas été modifié.';
$string['application_updated_microsoft'] = 'Le paramètre de l’application OpenID Connect a été mis à jour.<br/><span class="warning" style="color:red;">L’administrateur Azure devra <b>fournir le consentement administrateur</b> et <b>vérifier à nouveau la configuration</b> sur la <a href="{$a}" target="_blank">page de configuration de l’intégration Microsoft 365</a> si les paramètres « Type de fournisseur d’identité (IdP) » ou « Méthode d’authentification client » sont modifiés.</span>';
$string['auth_method_secret'] = 'Secret';
$string['cert_source_path'] = 'Nom du fichier';
$string['cert_source_text'] = 'Texte brut';
$string['cfg_cleanupiomadoidctokens_desc'] = 'Si vos utilisateurs rencontrent des problèmes de connexion avec leur compte Microsoft 365, essayez de nettoyer les jetons OpenID Connect. Cela supprime les jetons incomplets ou invalides pouvant provoquer des erreurs. ATTENTION : cela peut interrompre les connexions en cours, à effectuer de préférence pendant une période de maintenance.';
$string['cfg_cleanupiomadoidctokens_key'] = 'Nettoyer les jetons OpenID Connect';
$string['cfg_icon_desc'] = 'Icône affichée à côté du nom du fournisseur sur la page de connexion.';
$string['cfg_loginflow_authcode'] = 'Demande d’autorisation (recommandée)';
$string['cfg_loginflow_authcode_desc'] = 'Avec cette méthode, l’utilisateur clique sur le fournisseur d’identité et est redirigé pour se connecter. C’est la méthode recommandée, sécurisée et standard.';
$string['cfg_loginflow_rocreds'] = 'Connexion via nom d’utilisateur / mot de passe (obsolète)';
$string['cfg_loginflow_rocreds_desc'] = 'Cette méthode est obsolète. Elle autorise l’utilisateur en arrière-plan sans interaction directe avec le fournisseur d’identité.';
$string['cfg_no_response_available'] = 'Aucune réponse disponible.';
$string['cfg_silentloginmode_desc'] = 'Si activé, Moodle tentera d’utiliser une session existante du fournisseur d’identité pour connecter automatiquement l’utilisateur (SSO).';
$string['cfg_silentloginmode_key'] = 'Mode de connexion silencieuse';
$string['cfg_userrestrictionscasesensitive_desc'] = 'Détermine si les restrictions utilisateur sont sensibles à la casse.';
$string['error_invalid_client_authentication_method'] = 'Méthode d’authentification client non valide';
$string['error_no_response_available'] = 'Aucune réponse disponible.';
$string['idp_type_microsoft_entra_id'] = 'Microsoft Entra ID (v1.0)';
$string['idp_type_microsoft_identity_platform'] = 'Microsoft identity platform (v2.0)';
$string['na'] = 'Non disponible';
$string['pluginname'] = 'OpenID Connect';
$string['secretexpiryrecipients'] = 'Destinataires des notifications d’expiration du secret';
$string['secretexpiryrecipients_help'] = 'Liste des adresses email (séparées par des virgules) à notifier lors de l’expiration du secret. Si vide, l’administrateur principal sera notifié.';
$string['settings_section_secret_expiry_notification'] = 'Notification d’expiration du secret';
$string['table_action'] = 'Action';
$string['heading_additional_options_desc'] = 'Options supplémentaires de configuration.';
$string['heading_basic_desc'] = 'Paramètres principaux de configuration.';
$string['heading_debugging_desc'] = 'Paramètres de journalisation et de diagnostic.';
$string['heading_display_desc'] = 'Paramètres d’affichage du fournisseur.';
$string['heading_sign_out_desc'] = 'Configuration de la déconnexion.';
$string['heading_user_restrictions_desc'] = 'Configuration des restrictions d’accès utilisateur.';
$string['settings_fieldmap_field_mail'] = 'Adresse e-mail';
$string['settings_fieldmap_field_mobile'] = 'Téléphone mobile';
$string['settings_fieldmap_field_onPremisesSamAccountName'] = 'Identifiant SAM local';
$string['settings_page_secret_expiry_notification'] = 'Notification d’expiration du secret';
// ---- Suffix _4 translations auth_iomadoidc ----

$string['clientcert_4'] = 'Certificat client (clé publique)';
$string['clientprivatekey_4'] = 'Clé privée du certificat client';
$string['clientprivatekeyfile_4'] = 'Nom du fichier de la clé privée du certificat client';
$string['clientcertfile_4'] = 'Nom du fichier du certificat client';
$string['clientcertpassphrase_4'] = 'Phrase secrète du certificat client';

$string['clientcertsource_4'] = 'Source du certificat';

$string['clientcertsource_4_help'] = 'Lors de l’utilisation de la méthode d’authentification par certificat, ce paramètre permet de définir la source du certificat.
La source « texte brut » nécessite de saisir le contenu du certificat et de la clé privée.
La source « nom de fichier » nécessite que les fichiers soient présents dans le dossier microsoft_certs du répertoire Moodle data.';

$string['iomadoidcresource_4'] = 'Ressource';

$string['iomadoidcresource_4_help'] = 'Ressource OpenID Connect à utiliser.';

$string['iomadoidcscope_4'] = 'Portée';

$string['iomadoidcscope_4_help'] = 'Portée OpenID Connect utilisée pour l’authentification.';

$string['authendpoint_4'] = 'Point de terminaison d’autorisation';
$string['tokenendpoint_4'] = 'Point de terminaison du jeton';