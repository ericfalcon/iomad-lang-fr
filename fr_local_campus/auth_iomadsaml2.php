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
 * @subpackage iomadsaml2
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['metadatafetchfailed'] = 'Échec de la récupération des métadonnées : {$a}';
$string['metadatafetchfailedstatus'] = 'Échec de la récupération des métadonnées : code d\'état {$a}';
$string['metadatafetchfailedunknown'] = 'Échec de la récupération des métadonnées : erreur cURL inconnue';
$string['multiidp:label:admin'] = 'Pour les utilisateurs administrateurs uniquement';
$string['multiidp:label:admin_help'] = 'Tous les utilisateurs qui se connectent à l\'aide de cet IdP deviendront automatiquement administrateur du site.';
$string['multiidp:label:defaultidp'] = 'IdP par défaut';
$string['multiidp:label:displayname'] = 'Nom affiché';
$string['multiidp:label:whitelist'] = 'Adresses IP redirigées';
$string['multiidp:label:whitelist_help'] = 'S’il est défini, cela forcera les clients à accéder à cet IdP. Format : xxx.xxx.xxx.xxx/bitmask. Séparez plusieurs sous-réseaux sur une nouvelle ligne.';
$string['multiidpbuttons'] = 'Boutons avec icônes';
$string['multiidpdisplay'] = 'Type d\'affichage de plusieurs IdP';
$string['multiidpdisplay_help'] = 'Si un XML de métadonnées IdP contient plusieurs campuss IdP, comment chaque IdP disponible sera-t-il affiché ?';
$string['multiidpdropdown'] = 'Liste déroulante';
$string['multiidpinfo'] = '<ul> <li>Un IdP ne peut être utilisé que s\'il est défini comme Actif</li> <li>Lorsque la double connexion a été activée, tous les IdP actifs seront affichés sur la page de connexion</li> <li>Lorsqu\'un IdP L\'IdP a été défini par défaut et la duallogin n\'est pas activée, cet IdP sera automatiquement utilisé à moins que ?multiidp=on ou saml=off ne soit transmis sur /login/index.php</li> <li>Un IdP peut recevoir un Alias, lorsque vous accédez à /login/index.php?idpalias={alias}, l\'alias peut être transmis pour utiliser directement cet IdP</li> </ul>';
$string['nameidasattrib'] = 'Exposer NameID en tant qu\'attribut';
$string['nameidasattrib_help'] = 'La revendication NameID sera exposée à SSPHP en tant qu\'attribut nommé nameid';
$string['nameidpolicy'] = 'Politique d\'ID de nom';
$string['noattribute'] = 'Vous vous êtes connecté avec succès mais nous n\'avons pas trouvé votre attribut \'{$a}\' pour vous associer à un compte dans Moodle.';
$string['noidpfound'] = 'L\'IdP \'{$a}\' n\'a pas été trouvé en tant qu\'IdP configuré.';
$string['nouser'] = 'Vous vous êtes connecté avec succès en tant que \'{$a}\' mais vous n\'avez pas de compte dans Moodle.';
$string['nullprivatecert'] = 'La création du certificat privé a échoué.';
$string['nullpubliccert'] = 'La création du certificat public a échoué.';
$string['organizationalunitname'] = 'Unité organisationnelle';
$string['passivemode'] = 'Mode passif';
$string['phone1'] = 'Téléphone';
$string['phone2'] = 'Téléphone mobile';
$string['plugindisabled'] = 'Le plugin d\'authentification IOMAD SAML2 est désactivé';
$string['privacy:no_data_reason'] = 'Le plugin d\'authentification Saml2 ne stocke aucune donnée personnelle.';
$string['privatekeypass'] = 'Mot de passe de la clé de certificat privé';
$string['privatekeypass_help'] = 'Ceci est utilisé pour signer le certificat Moodle local, toute modification invalidera le certificat actuel.';
$string['regenerateheader'] = 'Régénérer la clé privée et le certificat';
$string['regenerateheading'] = 'Régénérer la clé privée et le certificat';
$string['regeneratepath'] = 'Chemin du chemin du certificat : {$a}';
$string['regeneratesuccess'] = 'Clé privée et certificat régénérés avec succès';
$string['regeneratewarning'] = 'Avertissement! La génération d\'un nouveau certificat écrasera le certificat actuel et vous devrez peut-être mettre à jour votre IDP';
$string['regenerate_submit'] = 'Régénérer';
$string['rememberidp'] = 'Mémoriser le service de connexion';
$string['requestedattributes'] = 'Attributs demandés';
$string['requestedattributes_help'] = 'Certains IdP ont besoin que le SP déclare quels attributs seront demandés ou requis. Ajoutez chaque attribut sur une nouvelle ligne et ceux-ci seront présents dans les métadonnées du SP sous la balise <code>AttributeConsumingService</code>. Si vous souhaitez qu\'un champ soit obligatoire, mettez un espace puis * après cette ligne. {$a->exemple}';
$string['required'] = 'Ce champ est obligatoire';
$string['requireint'] = 'Ce champ est obligatoire et doit être un entier positif';
$string['selectloginservice'] = 'Sélectionnez un service de connexion';
$string['sha1'] = 'SHA1 hérité (Dangereux)';
$string['showidplink'] = 'Afficher le lien IdP';
$string['showidplink_help'] = 'Cela affichera le lien IdP lorsque le site sera configuré.';
$string['signaturealgorithm'] = 'Algorithme de signature';
$string['signaturealgorithm_help'] = 'C\'est l\'algorithme qui sera utilisé pour signer les requêtes SAML. Avertissement : L\'algorithme SHA1 est uniquement fourni à des fins de compatibilité ascendante. À moins que vous ne deviez absolument l\'utiliser, il est recommandé de l\'éviter et d\'utiliser au moins SHA256 à la place.';
$string['spentityid'] = 'ID d\'campus';
$string['spentityid_help'] = 'Remplacez l\'ID d\'campus du fournisseur de services. Dans la plupart des cas, laissez ce champ vide et une bonne valeur par défaut sera utilisée à la place.';
$string['spmetadata'] = 'Métadonnées SP';
$string['spmetadatasign'] = 'Signature des métadonnées SP';
$string['spmetadatasign_help'] = 'Signer les métadonnées SP.';
$string['spmetadata_help'] = '<a href=\'{$a}\'>Afficher les métadonnées du fournisseur de services</a> | <a href=\'{$a}?download=1\'>Télécharger les métadonnées du SP</a> <p>Vous devrez peut-être les transmettre à l\'administrateur de l\'IdP pour qu\'il vous ajoute à la liste blanche.</p>';
$string['stateorprovincename'] = 'Etat ou Province';
$string['status'] = 'Statut';
$string['suspendeduser'] = 'Vous vous êtes connecté avec succès en tant que \'{$a}\' mais votre compte a été suspendu dans Moodle.';
$string['taskmetadatarefresh'] = 'Tâche d\'actualisation des métadonnées';
$string['testdebuggingdisabled'] = 'Pour utiliser cette page de test, le débogage SAML doit être activé';
$string['test_auth_button_login'] = 'Connexion IdP';
$string['test_auth_button_logout'] = 'Déconnexion du fournisseur d\'idcampus';
$string['test_auth_str'] = 'Testez isAuthenticated et connectez-vous';
$string['test_endpoint'] = 'URL de test de connexion';
$string['test_endpoint_desc'] = 'Entrez une URL pour tester la connexion pour la redirection IdP à partir du navigateur client. Certains utilisateurs ou réseaux peuvent ne pas disposer de connectivité à l\'IdP en fonction des autorisations du compte ou du réseau.';
$string['test_idp_conn'] = 'Tester la connexion IdP';
$string['test_noticetestrequirements'] = 'Pour utiliser ce test, le plugin doit être configuré, activé et le mode de débogage doit être activé dans les paramètres du plugin.';
$string['test_passive_str'] = 'Tester avec isPassive';
$string['tolower'] = 'Correspondance de cas';
$string['tolower:caseandaccentinsensitive'] = 'Insensible à la casse et aux accents';
$string['tolower:caseinsensitive'] = 'Insensible à la casse';
$string['tolower:exact'] = 'Exacte';
$string['tolower:lowercase'] = 'Minuscules';
$string['tolower_help'] = '<p>Exact : la correspondance est sensible à la casse (par défaut).</p> <p>Minuscules : applique les minuscules à l\'attribut IdP avant la correspondance.</p> <p>Insensible à la casse : ignore la casse lors de la correspondance.</p> <p>Insensible à la casse : ignore la casse lors de la correspondance.</p> <p>Insensible à la casse : ignore la casse lors de la correspondance.</p> <p>Insensible à la casse : ignore la casse lors de la correspondance.</p> <p> p>';
$string['unlocked'] = 'Débloqué';
$string['unlockedifempty'] = 'Débloqué si vide';
$string['update_never'] = 'Jamais';
$string['update_oncreate'] = 'À la création';
$string['update_onlogin'] = 'A chaque connexion';
$string['update_onupdate'] = 'Lors de la mise à jour';
$string['wantassertionssigned'] = 'Je veux que les affirmations soient signées';
$string['wantassertionssigned_help'] = 'Si les assertions reçues par ce SP doivent être signées';
$string['wrongauth'] = 'Vous vous êtes connecté avec succès en tant que \'{$a}\' mais n\'êtes pas autorisé à accéder à Moodle.';
