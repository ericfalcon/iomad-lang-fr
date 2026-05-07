<?php
defined('MOODLE_INTERNAL') || die();

$string['metadatafetchfailed'] = 'Échec de la récupération des métadonnées : {$a}';
$string['metadatafetchfailedstatus'] = 'Échec de la récupération des métadonnées : code d\'état {$a}';
$string['metadatafetchfailedunknown'] = 'Échec de la récupération des métadonnées : erreur cURL inconnue';
$string['multiidp:label:admin'] = 'Pour les utilisateurs administrateurs uniquement';
$string['multiidp:label:admin_help'] = 'Tous les utilisateurs qui se connectent avec ce fournisseur d’identité deviendront automatiquement administrateurs du site.';
$string['multiidp:label:defaultidp'] = 'Fournisseur d’identité par défaut';
$string['multiidp:label:displayname'] = 'Nom affiché';
$string['multiidp:label:whitelist'] = 'Adresses IP redirigées';
$string['multiidp:label:whitelist_help'] = 'Si défini, force les clients à utiliser ce fournisseur d’identité. Format : xxx.xxx.xxx.xxx/masque. Un sous-réseau par ligne.';
$string['multiidpbuttons'] = 'Boutons avec icônes';
$string['multiidpdisplay'] = 'Mode d’affichage des fournisseurs d’identité';
$string['multiidpdisplay_help'] = 'Définit comment les fournisseurs d’identité sont affichés lorsque plusieurs sont disponibles.';
$string['multiidpdropdown'] = 'Liste déroulante';
$string['multiidpinfo'] = '<ul> <li>Un fournisseur d’identité doit être actif pour être utilisable.</li> <li>Si la connexion multiple est activée, tous les fournisseurs actifs seront affichés sur la page de connexion.</li> <li>Si un fournisseur est défini par défaut et que la connexion multiple est désactivée, il sera utilisé automatiquement.</li> <li>Un alias peut être défini pour accéder directement à un fournisseur spécifique.</li> </ul>';
$string['nameidasattrib'] = 'Exposer NameID comme attribut';
$string['nameidasattrib_help'] = 'Expose la revendication NameID comme attribut SSPHP nommé nameid.';
$string['nameidpolicy'] = 'Politique NameID';
$string['noattribute'] = 'Connexion réussie, mais l’attribut requis "{$a}" est introuvable.';
$string['noidpfound'] = 'Le fournisseur d’identité "{$a}" est introuvable.';
$string['nouser'] = 'Connexion réussie en tant que "{$a}", mais aucun compte Moodle correspondant n’existe.';$string['nullprivatecert'] = 'Échec de la création de la clé privée.';
$string['nullpubliccert'] = 'Échec de la création du certificat public.';
$string['organizationalunitname'] = 'Unité organisationnelle';
$string['passivemode'] = 'Mode passif';
$string['phone1'] = 'Téléphone';
$string['phone2'] = 'Téléphone mobile';
$string['plugindisabled'] = 'Le plugin d’authentification IOMAD SAML2 est désactivé.';
$string['privacy:no_data_reason'] = 'Le plugin d’authentification SAML2 ne stocke aucune donnée personnelle.';
$string['privatekeypass'] = 'Mot de passe de la clé privée';
$string['privatekeypass_help'] = 'Utilisé pour signer le certificat local. Toute modification invalidera le certificat existant.';
$string['regenerateheader'] = 'Régénérer la clé privée et le certificat';
$string['regenerateheading'] = 'Régénération du certificat';
$string['regeneratepath'] = 'Chemin du certificat : {$a}';
$string['regeneratesuccess'] = 'Clé privée et certificat régénérés avec succès.';
$string['regeneratewarning'] = 'Attention : la génération d’un nouveau certificat remplacera l’actuel.';
$string['regenerate_submit'] = 'Régénérer';
$string['rememberidp'] = 'Mémoriser le fournisseur d’identité';
$string['requestedattributes'] = 'Attributs demandés';
$string['requestedattributes_help'] = 'Indiquez les attributs requis, un par ligne. Ajoutez * pour les rendre obligatoires.';
$string['required'] = 'Champ obligatoire';
$string['requireint'] = 'Champ obligatoire (entier positif attendu)';
$string['selectloginservice'] = 'Sélectionner un service de connexion';
$string['sha1'] = 'SHA1 (obsolète et déconseillé)';
$string['showidplink'] = 'Afficher le lien du fournisseur d’identité';
$string['showidplink_help'] = 'Affiche le lien du fournisseur d’identité sur la page de connexion.';
$string['signaturealgorithm'] = 'Algorithme de signature';
$string['signaturealgorithm_help'] = 'Algorithme utilisé pour signer les requêtes SAML. SHA256 est recommandé.';
$string['spentityid'] = 'Identifiant du campus';
$string['spentityid_help'] = 'Identifiant du fournisseur de services. Laissez vide pour la valeur par défaut.';
$string['spmetadata'] = 'Métadonnées du fournisseur de services';
$string['spmetadatasign'] = 'Signer les métadonnées';
$string['spmetadatasign_help'] = 'Active la signature des métadonnées.';
$string['spmetadata_help'] = '<a href="{$a}">Afficher les métadonnées</a> | <a href="{$a}?download=1">Télécharger</a>';
$string['stateorprovincename'] = 'État ou province';
$string['status'] = 'Statut';
$string['suspendeduser'] = 'Connexion réussie, mais le compte est suspendu.';
$string['taskmetadatarefresh'] = 'Actualisation des métadonnées';
$string['testdebuggingdisabled'] = 'Le débogage SAML doit être activé pour utiliser ce test.';
$string['test_auth_button_login'] = 'Connexion via IdP';
$string['test_auth_button_logout'] = 'Déconnexion du fournisseur d’identité';
$string['test_auth_str'] = 'Tester isAuthenticated';
$string['test_endpoint'] = 'URL de test';
$string['test_endpoint_desc'] = 'URL utilisée pour tester la redirection vers le fournisseur d’identité.';
$string['test_idp_conn'] = 'Tester la connexion IdP';
$string['test_noticetestrequirements'] = 'Le plugin doit être configuré et le débogage activé.';
$string['test_passive_str'] = 'Tester isPassive';
$string['tolower'] = 'Mode de correspondance';
$string['tolower:caseandaccentinsensitive'] = 'Insensible à la casse et aux accents';
$string['tolower:caseinsensitive'] = 'Insensible à la casse';
$string['tolower:exact'] = 'Exact';
$string['tolower:lowercase'] = 'Forcer en minuscules';
$string['tolower_help'] = '<p>Exact : correspondance sensible à la casse.</p> <p>Forcer en minuscules : conversion préalable en minuscules.</p> <p>Insensible à la casse : ignore la casse lors de la correspondance.</p> <p>Insensible à la casse et aux accents : ignore casse et accents.</p>';
$string['unlocked'] = 'Déverrouillé';
$string['unlockedifempty'] = 'Déverrouillé si vide';
$string['update_never'] = 'Jamais';
$string['update_oncreate'] = 'À la création';
$string['update_onlogin'] = 'À chaque connexion';
$string['update_onupdate'] = 'Lors de la mise à jour';
$string['wantassertionssigned'] = 'Exiger la signature des assertions';
$string['wantassertionssigned_help'] = 'Indique si les assertions SAML doivent être signées.';
$string['wrongauth'] = 'Connexion réussie, mais accès non autorisé.';
// ---- Traductions manquantes auth_iomadsaml2 ----

$string['allowcreate'] = 'Autoriser la création';
$string['allowcreate_help'] = 'Autoriser la création des utilisateurs IdP à la demande';

$string['alterlogout'] = 'URL de déconnexion alternative';
$string['alterlogout_help'] = 'URL de redirection après exécution de tous les mécanismes de déconnexion';

$string['anyauth'] = 'Autoriser tous les types d’authentification';
$string['anyauth_help'] = 'Oui : autoriser la connexion SAML pour tous les utilisateurs. Non : uniquement pour ceux utilisant iomadsaml2.';

$string['anyauthotherdisabled'] = 'Connexion réussie pour "{$a->username}" mais le type d’authentification "{$a->auth}" est désactivé.';

$string['assertionsconsumerservices'] = 'Services de consommation d’assertions';
$string['assertionsconsumerservices_help'] = 'Liste des bindings que le fournisseur de services doit supporter';

$string['attemptsignout'] = 'Tenter une déconnexion IdP';
$string['attemptsignout_help'] = 'Tentera d’envoyer une requête de déconnexion au fournisseur d’identité';

$string['attrsimple'] = 'Simplifier les attributs';
$string['attrsimple_help'] = 'Simplifie les noms d’attributs complexes (URN/XML) en noms simples (ex : givenname).';

$string['authncontext'] = 'Contexte d’authentification';
$string['authncontext_help'] = 'Permet d’ajouter des informations dans les assertions. Laisser vide si inutile.';

$string['auth_data_mapping'] = 'Mapping des données';

$string['auth_fieldlockfield'] = 'Verrouiller la valeur ({$a})';
$string['auth_fieldlocks'] = 'Verrouiller les champs utilisateur';

$string['auth_fieldlock_expl'] = '<p><b>Verrouillage :</b> empêche toute modification du champ dans Moodle. Utilisez si la donnée est gérée côté système externe.</p>';

$string['auth_fieldmapping'] = 'Mapping des données ({$a})';

$string['auth_iomadsaml2blockredirectdescription'] = 'Rediriger ou afficher un message pour les connexions SAML2 en fonction des groupes configurés';

$string['auth_iomadsaml2description'] = 'Authentification via un fournisseur d’identité SAML2';

$string['auth_updatelocalfield'] = 'Mettre à jour local ({$a})';
$string['auth_updateremotefield'] = 'Mettre à jour externe ({$a})';

$string['autocreate'] = 'Créer automatiquement les utilisateurs';
$string['autocreate_help'] = 'Autoriser la création d’utilisateurs Moodle à la demande';

$string['autologin'] = 'Connexion automatique';
$string['autologinbycookie'] = 'Vérifier via cookie';
$string['autologinbysession'] = 'Vérifier une fois par session';

$string['autologincookie'] = 'Cookie de connexion automatique';
$string['autologincookie_help'] = 'Nom du cookie utilisé pour déclencher la connexion automatique';

$string['autologin_help'] = 'Connecte automatiquement l’utilisateur si déjà authentifié sur le fournisseur d’identité';

$string['availableidps'] = 'Fournisseurs d’identité disponibles';
$string['availableidps_help'] = 'Sélectionner les IdP utilisables si plusieurs sont présents';

$string['blockredirectheading'] = 'Actions de blocage de compte';

$string['cannotmapfield'] = 'Conflit de mapping : deux champs liés au même élément {$a}';

$string['certificate'] = 'Régénérer le certificat';
$string['certificatedetails'] = 'Détails du certificat';

$string['certificatelock'] = 'Verrouiller le certificat';
$string['certificatelock_help'] = 'Empêche la régénération du certificat';

$string['certificatelock_locked'] = 'Certificat verrouillé';
$string['certificatelock_lockedmessage'] = 'Les certificats sont actuellement verrouillés';

$string['certificatelock_unlock'] = 'Déverrouiller les certificats';

$string['checkcertificateexpired'] = 'Certificat SAML expiré il y a {$a}';
$string['checkcertificateexpiry'] = 'Expiration du certificat SAML';

$string['checkcertificateok'] = 'Certificat SAML expire dans {$a}';
$string['checkcertificatewarn'] = 'Certificat SAML expirera dans {$a}';

$string['commonname'] = 'Nom commun';
$string['countryname'] = 'Pays';

$string['debug'] = 'Débogage';

$string['duallogin'] = 'Connexion double';

$string['emailtaken'] = 'Impossible de créer le compte : email déjà utilisé ({$a})';
$string['emailtakenupdate'] = 'Email non mis à jour : déjà utilisé ({$a})';

$string['error'] = 'Erreur de connexion';

$string['errorinvalidautologin'] = 'Requête de connexion automatique invalide';
$string['errorparsingxml'] = 'Erreur lors du traitement XML : {$a}';

$string['exception'] = 'Exception SAML2 : {$a}';

$string['expirydays'] = 'Durée d’expiration (jours)';

$string['fielddelimiter'] = 'Séparateur de champ';
$string['fielddelimiter_help'] = 'Utilisé lorsque plusieurs valeurs sont reçues';

$string['flaggedresponsetypemessage'] = 'Afficher un message personnalisé';
$string['flaggedresponsetyperedirect'] = 'Rediriger vers une URL externe';

$string['flagmessage'] = 'Message de réponse';
$string['flagmessage_default'] = 'Vous êtes connecté mais avec un accès limité. Contactez l’administrateur.';

$string['flagredirecturl'] = 'URL de redirection';

$string['flagresponsetype'] = 'Type de réponse en cas de blocage';

$string['grouprules'] = 'Règles de groupes';

$string['idpattr'] = 'Attribut IdP';
$string['idpattr_help'] = 'Attribut IdP à comparer avec Moodle';

$string['idpmetadata'] = 'Métadonnées IdP XML ou URL';

$string['idpmetadatarefresh'] = 'Actualisation des métadonnées IdP';

$string['idpmetadata_badurl'] = 'URL de métadonnées invalide : {$a}';

$string['idpname'] = 'Nom du fournisseur';
$string['idpnamedefault'] = 'Connexion via SAML2';
$string['idpnamedefault_varaible'] = 'Connexion via SAML2 ({$a})';

$string['localityname'] = 'Localité';

$string['locked'] = 'Verrouillé';

$string['logdir'] = 'Répertoire des journaux';
$string['logdir_help'] = 'Répertoire pour les logs SimpleSAMLphp';

$string['logtofile'] = 'Activer les logs fichier';
$string['logtofile_help'] = 'Écrit les logs dans un fichier';

$string['manageidpsheading'] = 'Gestion des fournisseurs d’identité';

$string['mdlattr'] = 'Champ Moodle';
$string['mdlattr_help'] = 'Champ Moodle associé';

$string['multiidp:label:active'] = 'Actif';
$string['multiidp:label:alias'] = 'Alias';

$string['noredirectips'] = 'Restreindre noredirect par IP';

$string['organizationname'] = 'Organisation';

$string['pluginname'] = 'SAML2';

$string['sha256'] = 'SHA256';
$string['sha384'] = 'SHA384';
$string['sha512'] = 'SHA512';

$string['source'] = 'Source : {$a}';

$string['sspversion'] = 'Version SimpleSAMLphp';

$string['tempdir'] = 'Répertoire temporaire';
$string['tempdir_help'] = 'Répertoire temporaire utilisé par SimpleSAMLphp';