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
 * @package    auth
 * @subpackage iomadoidc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_updated'] = 'Le paramètre de l’application OpenID Connect a été mis à jour.';
$string['application_updated_azure'] = 'Le paramètre de l\'application OpenID Connect a été mis à jour.<br/> <span class="warning" style="color: red;">L\'administrateur Azure devra <b>Fournir le consentement de l\'administrateur</b> et <b>Vérifier la configuration</ b> à nouveau sur la <a href="{$a}" target="_blank">page de configuration de l\'intégration Microsoft 365</a> si les paramètres « Type de fournisseur d\'identité (IdP) » ou « Méthode d\'authentification client » sont mis à jour.</span>';
$string['authendpoint'] = 'Point de terminaison d’autorisation';
$string['authendpoint_help'] = 'L\'URL du point de terminaison d\'autorisation de votre IdP à utiliser.<br/> Notez que si le site doit être configuré pour permettre aux utilisateurs d\'autres locataires d\'accéder, le point de terminaison d\'autorisation spécifique au locataire ne peut pas être utilisé.';
$string['authentication_and_endpoints_saved'] = 'Paramètres d’authentification et de point de terminaison mis à jour.';
$string['auth_method_certificate'] = 'Certificat';
$string['cfg_authenticationlink_desc'] = '<a href="{$a}" target="_blank">Lien vers la configuration de l\'IdP et de l\'authentification</a>';
$string['cfg_field_mapping_desc'] = 'Les données de profil utilisateur peuvent être mappées depuis l\'IdP Open ID Connect vers Moodle.<br/> <ul> <li>Les données de profil de base sont disponibles à partir des jetons d\'identification de tous les IdP.</li> <li>Si Azure AD est utilisé comme IdP, des données de profil supplémentaires peuvent être rendues disponibles en installant et en configurant le <a href="https://moodle.org/plugins/local_o365">plugin d\'intégration Microsoft 365 (local_o365)</a>.</li> <li >Si la fonctionnalité de synchronisation du profil SDS est activée dans le plugin local_o365, certains champs de profil peuvent être synchronisés de SDS vers Moodle. lors de l\'exécution de la tâche planifiée « Synchroniser avec SDS », et ne se produira pas lors de l\'exécution de la tâche planifiée « Synchroniser les utilisateurs avec Azure AD », ni lorsque l\'utilisateur se connecte.</li> </ul>';
$string['cfg_forceredirect_desc'] = 'Si activé, ignorera la page d’index de connexion et redirigera vers la page OpenID Connect. Peut être contourné avec le paramètre d\'URL ?noredirect=1';
$string['cfg_forceredirect_key'] = 'Forcer la redirection';
$string['cfg_frontchannellogouturl_desc'] = 'Il s\'agit de l\'URL que votre fournisseur d\'identité doit déclencher lorsqu\'il tente de déconnecter les utilisateurs de Moodle.<br/> Pour la plateforme d\'identité Microsoft Azure AD/Microsoft, le paramètre est appelé « URL de déconnexion du canal frontal » et est configurable dans Azure. application.';
$string['cfg_frontchannellogouturl_key'] = 'URL de déconnexion du canal frontal';
$string['cfg_logoutendpoint_desc'] = 'L\'URL du point de terminaison de déconnexion de votre IdP à utiliser.';
$string['cfg_logoutendpoint_key'] = 'Point de terminaison de déconnexion IdP';
$string['cfg_redirecturi_key'] = 'URL de redirection';
$string['cfg_signoffintegration_desc'] = 'Si l\'option est activée, lorsqu\'un utilisateur Moodle connecté à l\'IdP configuré se déconnecte de Moodle, l\'intégration déclenchera une demande à l\'extrémité de déconnexion ci-dessous, tentant également de déconnecter l\'utilisateur de l\'IdP.<br/> Remarque pour l\'intégration avec Microsoft Azure AD, l\'URL du site Moodle ({$a}) doit être ajoutée en tant qu\'URI de redirection dans l\'application Azure créée pour l\'intégration de Moodle et Microsoft 365.';
$string['cfg_signoffintegration_key'] = 'Single Sign Out (de Moodle à IdP)';
$string['cfg_userrestrictionscasesensitive_desc'] = 'Cela contrôle si l\'option "/i" dans l\'expression régulière est utilisée dans la correspondance de restriction utilisateur.<br/>Si elle est activée, toutes les vérifications de restriction utilisateur seront effectuées comme avec la casse. Notez que si cette option est désactivée, tous les modèles sur la casse des lettres seront ignorés.';
$string['cfg_userrestrictionscasesensitive_key'] = 'Restrictions utilisateur sensibles à la casse';
$string['cleanup_iomadoidc_tokens'] = 'Nettoyer les jetons OpenID Connect';
$string['clientauthmethod'] = 'Texte standard
Méthode d\'authentification client';
$string['clientauthmethod_help'] = '<ul> <li>Les fournisseurs d\'identité de tous types peuvent utiliser la méthode d\'authentification "<b>Secret</b>".</li> <li>Les fournisseurs d\'identité de type <b>Plateforme d\'identité Microsoft (v2.0)</b> peut également utiliser la méthode d\'authentification <b>Certificat</b>.</li> </ul> Remarque La méthode d\'authentification <b>Certificat</b> n\'est pas prise en charge dans la connexion <b>Attribution des informations d\'identification par mot de passe du propriétaire de la ressource</b>. couler.';
$string['clientcert'] = 'Clé publique du certificat client';
$string['clientcert_help'] = 'Lorsque vous utilisez la méthode d\'authentification par <b>certificat</b>, il s\'agit de la clé publique, ou du certificat, utilisée pour s\'authentifier auprès de l\'IdP.';
$string['clientid'] = 'ID d\'application';
$string['clientid_help'] = 'Votre application/ID client enregistré sur l’IdP.';
$string['clientprivatekey'] = 'Clé privée du certificat client';
$string['clientprivatekey_help'] = 'Lorsque vous utilisez la méthode d\'authentification par <b>certificat</b>, il s\'agit de la clé privée du certificat utilisée pour s\'authentifier auprès de l\'IdP.';
$string['clientsecret'] = 'Secret client';
$string['clientsecret_help'] = 'Lorsque vous utilisez la méthode d\'authentification <b>secrète</b>, il s\'agit du secret client sur l\'IdP. Chez certains fournisseurs, on l\'appelle également clé.';
$string['delete_token'] = 'Supprimer le jeton';
$string['delete_token_and_reference'] = 'Supprimer le jeton et la référence';
$string['errorauthloginfaileddupemail'] = 'Connexion invalide : un compte existant sur ce Moodle a la même adresse e-mail que le compte que vous essayez de créer, et le paramètre "Autoriser les comptes avec la même adresse e-mail" (allowaccountssameemail) est désactivé.';
$string['errorauthnoaccesstoken'] = 'Jeton d\'accès non reçu.';
$string['errorauthnocredsandendpoints'] = 'Veuillez configurer les informations d\'identification et les points de terminaison du client OpenID Connect.';
$string['erroriomadoidcclientinvalidendpoint'] = 'URL du point d\'accès non valide reçu.';
$string['errorusermatched'] = 'Le compte Microsoft 365 "{$a->aadupn}" correspond déjà à l\'utilisateur Moodle "{$a->username}". Pour terminer la connexion, veuillez d\'abord vous connecter en tant qu\'utilisateur Moodle et suivre les instructions du bloc Microsoft.';
$string['error_empty_client_cert'] = 'La clé publique du certificat client ne peut pas être vide lors de l\'utilisation de la méthode d\'authentification « certificat »';
$string['error_empty_client_private_key'] = 'La clé privée du certificat client ne peut pas être vide lors de l\'utilisation de la méthode d\'authentification « certificat »';
$string['error_empty_client_secret'] = 'Le secret client ne peut pas être vide lors de l\'utilisation de la méthode d\'authentification « secrète »';
$string['error_empty_iomadoidcresource'] = 'La ressource ne peut pas être vide lors de l’utilisation d’Azure AD (v1.0) ou d’autres types d’IdP.';
$string['error_empty_tenantnameorguid'] = 'Le nom du locataire ou le GUID ne peut pas être vide lors de l’utilisation d’IdP Azure AD (v1.0) ou de la plateforme d’identités Microsoft (v2.0).';
$string['error_empty_tenantname_or_guid'] = 'Le nom du locataire ou le GUID ne peut pas être vide lors de l\'utilisation de la méthode d\'authentification « certificat »';
$string['error_endpoint_mismatch_auth_endpoint'] = 'Le point de terminaison d\'autorisation configuré ne correspond pas au type de fournisseur d\'identité configuré.<br/> <ul> <li>Lorsque vous utilisez le type de fournisseur d\'identité « Azure AD (v1.0) », utilisez le point de terminaison v1.0, par exemple. https://login.microsoftonline.com/common/oauth2/authorize</li> <li>Lorsque vous utilisez le type d\'IdP « Microsoft Identity Platform (v2.0) », utilisez le point de terminaison v2.0, par ex. https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li> </ul>';
$string['error_endpoint_mismatch_token_endpoint'] = 'Le point de terminaison du jeton configuré ne correspond pas au type d\'IdP configuré.<br/> <ul> <li>Lorsque vous utilisez le type d\'IdP « Azure AD (v1.0) », utilisez le point de terminaison v1.0, par ex. https://login.microsoftonline.com/common/oauth2/token</li> <li>Lorsque vous utilisez le type d\'IdP « Microsoft Identity Platform (v2.0) », utilisez le point de terminaison v2.0, par ex. https://login.microsoftonline.com/common/oauth2/v2.0/authorize</li> </ul>';
$string['error_invalid_client_authentication_method'] = 'Méthode d\'authentification client non valide';
$string['heading_additional_options'] = 'Options additionelles';
$string['heading_basic'] = 'Paramètres de base';
$string['heading_debugging'] = 'Débogage';
$string['heading_display'] = 'Afficher';
$string['heading_sign_out'] = 'Intégration de déconnexion';
$string['heading_user_restrictions'] = 'Restrictions de l\'utilisateur';
$string['idptype'] = 'Type de fournisseur d\'identité (IdP)';
$string['idptype_help'] = 'Trois types d\'IdP sont actuellement pris en charge : <ul> <li><b>Azure AD (v1.0)</b> : Azure AD avec des points de terminaison oauth2 v1.0, par ex. https://login.microsoftonline.com/common/oauth2/authorize.</li> <li><b>Plateforme d\'identité Microsoft (v2.0)</b> : Azure AD avec points de terminaison oath2 v2.0, par ex. https://login.microsoftonline.com/common/oauth2/v2.0/authorize.</li> <li><b>Autre</b> : tout fournisseur d\'identité autre qu\'Azure AD.</li> </ul> Les différences entre les options <b>Azure AD (v1.0)</b> et <b>Microsoft Identity Platform (v2.0)</b> sont disponibles sur <a href="https://docs.microsoft .com/en-us/azure/active-directory/azuread-dev/azure-ad-endpoint-comparison">https://docs.microsoft.com/en-us/azure/active-directory/azuread-dev/ azure-ad-endpoint-comparison</a>.<br/> Notamment, l\'application configurée peut utiliser un <b>certificat</b> en plus du <b>secret</b> pour l\'authentification lors de l\'utilisation de la <b>plate-forme d\'identité Microsoft (v2.0)</b> IdP.<br/> Les points de terminaison d\'autorisation et de jeton doivent être configurés en fonction du type d\'IdP configuré.';
$string['idp_type_other'] = 'Autre';
$string['iomadoidcresource'] = 'Ressource';
$string['iomadoidcresource_help'] = 'La ressource OpenID Connect pour laquelle envoyer la demande.<br/> <b>Remarque</b> ce paramètre n\'est pas pris en charge dans le type d\'IdP <b>Microsoft Identity Platform (v2.0)</b>.';
$string['iomadoidcscope'] = 'Portée';
$string['iomadoidcscope_help'] = 'Portée IOMADoIDC à utiliser.';
$string['mismatched'] = 'Inadaptée';
$string['mismatched_details'] = 'L\'enregistrement de jeton contient le nom d\'utilisateur "{$a->tokenusername}" ; L\'utilisateur Moodle correspondant a le nom d\'utilisateur "{$a->moodleusername}".';
$string['no_token_to_cleanup'] = 'Il n’y a aucun jeton IOMADoIDC à nettoyer.';
$string['settings_fieldmap_feild_not_mapped'] = '(non mappé)';
$string['settings_fieldmap_field_businessPhones'] = 'Téléphone de bureau';
$string['settings_fieldmap_field_city'] = 'Ville';
$string['settings_fieldmap_field_companyName'] = 'Nom de l\'entité';
$string['settings_fieldmap_field_country'] = 'Pays';
$string['settings_fieldmap_field_department'] = 'Département';
$string['settings_fieldmap_field_displayName'] = 'Afficher le nom';
$string['settings_fieldmap_field_employeeId'] = 'ID d\'employé';
$string['settings_fieldmap_field_extensionattribute'] = 'Attribut d\'extension {$a}';
$string['settings_fieldmap_field_faxNumber'] = 'Numéro de fax';
$string['settings_fieldmap_field_givenName'] = 'Prénom';
$string['settings_fieldmap_field_groups'] = 'Groupes';
$string['settings_fieldmap_field_jobTitle'] = 'titre du poste';
$string['settings_fieldmap_field_manager'] = 'Nom du gestionnaire';
$string['settings_fieldmap_field_manager_email'] = 'Courriel du gestionnaire';
$string['settings_fieldmap_field_mobilePhone'] = 'Téléphone mobile';
$string['settings_fieldmap_field_objectId'] = 'ID d\'objet';
$string['settings_fieldmap_field_officeLocation'] = 'Bureau';
$string['settings_fieldmap_field_postalCode'] = 'Code Postal';
$string['settings_fieldmap_field_preferredLanguage'] = 'Langue';
$string['settings_fieldmap_field_preferredName'] = 'nom préféré';
$string['settings_fieldmap_field_roles'] = 'Rôles';
$string['settings_fieldmap_field_sds_school_id'] = 'ID d\'école SDS ({$a})';
$string['settings_fieldmap_field_sds_school_name'] = 'Nom de l\'école SDS ({$a})';
$string['settings_fieldmap_field_sds_school_role'] = 'Rôle de l\'école SDS (« Étudiant » ou « Enseignant »)';
$string['settings_fieldmap_field_sds_student_birthDate'] = 'Date de naissance de l\'étudiant SDS';
$string['settings_fieldmap_field_sds_student_externalId'] = 'ID externe de l\'étudiant SDS';
$string['settings_fieldmap_field_sds_student_grade'] = 'Note de l\'étudiant SDS';
$string['settings_fieldmap_field_sds_student_graduationYear'] = 'Année d\'obtention du diplôme des étudiants SDS';
$string['settings_fieldmap_field_sds_student_studentNumber'] = 'Numéro d\'étudiant SDS';
$string['settings_fieldmap_field_sds_teacher_externalId'] = 'ID externe de l\'enseignant SDS';
$string['settings_fieldmap_field_sds_teacher_teacherNumber'] = 'Numéro d\'enseignant SDS';
$string['settings_fieldmap_field_state'] = 'Etat';
$string['settings_fieldmap_field_streetAddress'] = 'Nom de rue';
$string['settings_fieldmap_field_surname'] = 'Nom de famille';
$string['settings_fieldmap_field_teams'] = 'Équipes';
$string['settings_fieldmap_field_telephoneNumber'] = 'Numéro de téléphone';
$string['settings_fieldmap_field_userPrincipalName'] = 'Nom d\'utilisateur (UPN)';
$string['settings_page_application'] = 'IdP et authentification';
$string['settings_page_cleanup_iomadoidc_tokens'] = 'Nettoyer les jetons OpenID Connect';
$string['settings_page_field_mapping'] = 'Mappages de champs';
$string['settings_page_other_settings'] = 'Autres options';
$string['settings_section_authentication'] = 'Authentification';
$string['settings_section_basic'] = 'Paramètres de base';
$string['settings_section_endpoints'] = 'Points de terminaison';
$string['settings_section_other_params'] = 'Autres paramètres';
$string['table_iomadoidc_username'] = 'Nom d\'utilisateur IOMADoIDC';
$string['table_matching_details'] = 'Détails';
$string['table_matching_status'] = 'Statut correspondant';
$string['table_token_id'] = 'ID d\'enregistrement de jeton';
$string['table_token_unique_id'] = 'ID unique IOMADoIDC';
$string['task_cleanup_iomadoidc_state_and_token'] = 'Nettoyer l\'état IOMADoIDC et le jeton invalide';
$string['tenantnameorguid'] = 'Nom du locataire ou GUID';
$string['tenantnameorguid_help'] = 'N\'incluez pas https:// si vous utilisez le nom du locataire.';
$string['tokenendpoint'] = 'Point de terminaison du jeton';
$string['tokenendpoint_help'] = 'L\'URL du point de terminaison du jeton de votre IdP à utiliser.<br/> Notez que si le site doit être configuré pour permettre aux utilisateurs d\'autres locataires d\'accéder, le point de terminaison du jeton spécifique au locataire ne peut pas être utilisé.';
$string['token_deleted'] = 'Le jeton a été supprimé avec succès';
$string['unmatched'] = 'Non trouvé';
$string['update_oncreate_and_onlogin'] = 'A la création et à chaque connexion';
$string['update_oncreate_and_onlogin_and_usersync'] = 'Lors de la création, chaque connexion et chaque tâche de synchronisation utilisateur exécutée';
$string['update_onlogin_and_usersync'] = 'À chaque connexion et à chaque exécution de tâche de synchronisation utilisateur';
