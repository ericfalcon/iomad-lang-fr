<?php
defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Actions';
$string['active'] = 'Actif';
$string['active_help'] = 'Si le fil n’est pas actif, aucun message ne sera envoyé aux utilisateurs et il ne sera pas visible sur leur tableau de bord.';
$string['blocktitle'] = 'Fils de micro-apprentissage';
$string['bulkassigngroups'] = 'Attribuer des groupes de fil via CSV';
$string['clonethread'] = 'Cloner le fil';
$string['clonethreadcheckfull'] = 'Voulez-vous vraiment cloner le fil {$a} et toutes les pépites associées dans un nouveau fil ? Aucun utilisateur actuellement affecté ne sera copié.';
$string['cmid'] = 'Identifiant du module de cours';
$string['cmid_help'] = 'Identifiant du module de cours pour une section unique. Vous devez définir cette valeur ou l’identifiant de section.';
$string['company_threads_for'] = 'Fils de micro-apprentissage pour le campus {$a}';
$string['company_users_for'] = 'Utilisateurs pour le fil de micro-apprentissage {$a}';
$string['copy'] = '(copie)';
$string['creategroup'] = 'Créer un groupe';
$string['crontask'] = 'Tâche cron de micro-apprentissage IOMAD';
$string['defaultdue'] = 'Échéance après';
$string['defaultdue_help'] = 'Délai après lequel la pépite programmée devient exigible. Ce délai peut être modifié dans la planification du fil.';
$string['deletegroup'] = 'Supprimer le groupe {$a}';
$string['deletegroupcheckfull'] = 'Voulez-vous supprimer le groupe {$a} ? Tous les utilisateurs associés à ce groupe seront également supprimés.';
$string['deletenugget'] = 'Supprimer la pépite';
$string['deletenuggetcheckfull'] = 'Êtes-vous sûr de vouloir supprimer la pépite {$a} ?';
$string['deletethread'] = 'Supprimer le fil';
$string['deletethreadcheckfull'] = 'Êtes-vous sûr de vouloir supprimer définitivement le fil {$a}, ainsi que toutes les pépites et les utilisateurs associés ?';
$string['duedate'] = 'Date d’échéance';
$string['duedatebeforescheduledate'] = 'La date d’échéance est antérieure à la date planifiée';
$string['editgroup'] = 'Modifier le groupe';
$string['editnugget'] = 'Modifier la pépite';
$string['editthread'] = 'Modifier le fil';
$string['erroredgroups'] = 'Affectations de groupes en erreur';
$string['group'] = 'Groupe du fil';
$string['groupcreatedok'] = 'Le groupe a été créé avec succès';
$string['groupdeletedok'] = 'Le groupe a été supprimé avec succès';
$string['groupupdatedok'] = 'Le groupe a été mis à jour avec succès';
$string['group_help'] = 'Groupe du fil de micro-apprentissage auquel l’utilisateur sera affecté.';
$string['halt_until_fulfilled'] = 'Suspendre les messages jusqu’à validation';
$string['halt_until_fulfilled_help'] = 'Suspend l’envoi des messages tant que la pépite précédente n’est pas terminée.';
$string['importgroupsfromfile'] = 'Importer les affectations de groupes';
$string['importthread'] = 'Importer un fil';
$string['importthreadcheckfull'] = 'Voulez-vous vraiment importer le fil {$a} et toutes les pépites associées dans un nouveau fil de ce campus ? Aucun utilisateur actuellement affecté ne sera copié.';
$string['importusergroups'] = 'Importer des groupes d’utilisateurs';
$string['incorrecturl'] = 'L’URL spécifiée ne fait pas partie de ce site';
$string['interval'] = 'Intervalle de diffusion';
$string['interval_help'] = 'Intervalle par défaut entre les dates de planification des pépites.';
$string['iomad_microlearning:addinstance'] = 'Ajouter un bloc de micro-apprentissage';
$string['iomad_microlearning:assign_threads'] = 'Affecter un utilisateur à un fil de micro-apprentissage';
$string['iomad_microlearning:edit_nuggets'] = 'Modifier les pépites de micro-apprentissage';
$string['iomad_microlearning:edit_threads'] = 'Modifier les fils de micro-apprentissage';
$string['iomad_microlearning:importgroupfromcsv'] = 'Importer des groupes depuis un fichier CSV';
$string['iomad_microlearning:import_threads'] = 'Importer des fils de micro-apprentissage';
$string['iomad_microlearning:manage_groups'] = 'Gérer les groupes de fils';
$string['iomad_microlearning:myaddinstance'] = 'Ajouter un bloc de micro-apprentissage à mon tableau de bord';
$string['iomad_microlearning:thread_clone'] = 'Cloner un fil de micro-apprentissage';
$string['iomad_microlearning:thread_delete'] = 'Supprimer un fil de micro-apprentissage';
$string['iomad_microlearning:thread_view'] = 'Afficher les fils de micro-apprentissage';
$string['iomad_microlearning:view'] = 'Voir le micro-apprentissage IOMAD';
$string['learninggroups'] = 'Groupes';
$string['learningnuggets'] = 'Pépites';
$string['learningschedules'] = 'Planifications';
$string['learningusers'] = 'Utilisateurs';
$string['message_preset'] = 'Envoyer un message après';
$string['message_preset_help'] = 'Délai avant l’envoi du message.';
$string['message_time'] = 'Heure d’envoi du message';
$string['message_time_help'] = 'Heure à laquelle le message est envoyé.';
$string['microlearning'] = 'Micro-apprentissage';
$string['microlearninglinkexpires'] = 'Expiration du lien de micro-apprentissage (jours)';
$string['microlearninglinkexpires_help'] = 'Nombre de jours après lesquels le lien de micro-apprentissage envoyé par e-mail expire.';
$string['microllinkexpires'] = 'Expiration du lien de connexion automatique';
$string['microllinkexpires_help'] = 'Délai après lequel le lien envoyé par e-mail ne permet plus la connexion automatique.';
$string['missingname'] = 'Le nom de la pépite est manquant';
$string['missingsectionorcmid'] = 'Veuillez saisir une section de cours ou un identifiant de module';
$string['namehelp'] = 'Nom du groupe';
$string['namehelp_help'] = 'Nom du groupe utilisé dans le fil de micro-apprentissage. Les noms sont uniques par fil.';
$string['nameinuse'] = 'Ce nom est déjà utilisé';
$string['nolearningthreads'] = 'Aucun fil de micro-apprentissage';
$string['nugget'] = 'Pépite';
$string['nuggetcreated'] = 'Pépite créée';
$string['nuggetcreatedok'] = 'Pépite créée avec succès';
$string['nuggetcupdatedok'] = 'Pépite mise à jour avec succès';
$string['nuggetdeleted'] = 'Pépite supprimée';
$string['nuggetmoved'] = 'Ordre des pépites modifié';
$string['nuggetname'] = 'Nom de la pépite';
$string['nuggetname_help'] = 'Choisissez un nom unique pour la pépite';
$string['nuggetorder'] = 'Ordre';
$string['nuggets'] = 'Pépites';
$string['nuggetupdated'] = 'Pépite mise à jour';
$string['pluginname'] = 'Micro-apprentissage IOMAD';
$string['reminder1'] = 'Premier rappel';
$string['reminder1_help'] = 'Délai avant l’envoi du premier rappel si la pépite n’est pas terminée.';
$string['reminder2'] = 'Deuxième rappel';
$string['reminder2_help'] = 'Délai avant l’envoi du deuxième rappel si la pépite n’est pas terminée.';
$string['reminderdatebeforescheduledate'] = 'La date de rappel est antérieure à la date planifiée';
$string['reminderdatesoutoforder'] = 'Les dates de rappel ne sont pas cohérentes';
$string['resetschedule'] = 'Réinitialiser la planification';
$string['resetschedulecheckfull'] = 'Voulez-vous réinitialiser complètement la planification de {$a} ?';
$string['scheduledate'] = 'Date de planification';
$string['scheduleoutoforder'] = 'Les dates de planification ne sont pas cohérentes';
$string['scheduletype'] = 'Type de planification';
$string['scheduletype_help'] = 'Définit la date de démarrage du fil pour l’utilisateur affecté.';
$string['sectionid'] = 'Identifiant de la section du cours';
$string['sectionidalreadyinuse'] = 'Cet identifiant de section est déjà utilisé';
$string['sectionid_help'] = 'Saisissez l’identifiant de section du cours ou l’identifiant du module.';
$string['selectthread'] = 'Sélectionnez un fil de micro-apprentissage';
$string['send_message'] = 'Envoyer le message';
$string['send_message_help'] = 'Permet l’envoi de messages et de rappels par e-mail.';
$string['send_reminder'] = 'Envoyer un rappel';
$string['send_reminder_help'] = 'Permet l’envoi de rappels par e-mail aux utilisateurs affectés.';
$string['startdate'] = 'Date de début';
$string['startdate_help'] = 'Date de début de la planification du fil';
$string['startnextscheduled'] = 'Commencer à la prochaine date planifiée';
$string['starttoday'] = 'Commencer aujourd’hui';
$string['threadcreated'] = 'Fil créé';
$string['threadcreatedok'] = 'Fil créé avec succès';
$string['threaddeleted'] = 'Fil supprimé';
$string['threadname'] = 'Nom du fil';
$string['threadname_help'] = 'Nom du fil de micro-apprentissage';
$string['threads'] = 'Fils';
$string['threadschedule'] = 'Planification des fils';
$string['threadscheduleresetok'] = 'Planification réinitialisée';
$string['threadscheduleupdated'] = 'Planification mise à jour';
$string['threadscheduleupdatedok'] = 'Planification mise à jour avec succès';
$string['threadupdated'] = 'Fil mis à jour';
$string['threadupdatedok'] = 'Fil mis à jour avec succès';
$string['timecreated'] = 'Date de création';
$string['updown'] = 'Haut / Bas';
$string['uploadgroupresult'] = 'Télécharger le résultat des groupes';
$string['url'] = 'URL';
$string['url_help'] = 'Indiquez une URL appartenant à ce site';
// ---- Traductions block_iomad_microlearning ----

$string['cmidalreadyinuse'] = 'L’identifiant du module de cours est déjà utilisé';

$string['ibnalidthreadid'] = 'Le fil que vous recherchez n’existe pas';

$string['nonuggets'] = 'Il n’existe aucun élément pour ce fil';

$string['privacy:metadata'] = 'Le bloc IOMAD Microlearning affiche uniquement des données stockées dans d’autres emplacements.';

$string['privacy:metadata:microlearning_thread_user'] = 'Informations des données utilisateur du fil microlearning. Aucune donnée personnelle n’est stockée.';

$string['privacy:metadata:microlearning_thread_user:accesskey'] = 'Clé d’accès email du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:due_date'] = 'Date d’échéance du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:groupid'] = 'Identifiant du groupe du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:id'] = 'Identifiant d’enregistrement du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:messagetime'] = 'Délai avant l’envoi des messages du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:message_delivered'] = 'Indicateur de livraison du message du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:nuggetid'] = 'Identifiant de l’élément du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:reminder1_date'] = 'Date du premier rappel du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:reminder1_delivered'] = 'Indicateur de livraison du premier rappel du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:reminder2_date'] = 'Date du second rappel du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:reminder2_delivered'] = 'Indicateur de livraison du second rappel du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:schedule_date'] = 'Date de planification du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:threadid'] = 'Identifiant du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:timecompleted'] = 'Date d’achèvement de l’élément du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:timecreated'] = 'Date de création du fil microlearning';

$string['privacy:metadata:microlearning_thread_user:userid'] = 'Identifiant de l’utilisateur du fil microlearning';

$string['userassigned'] = 'Utilisateur attribué';

$string['userunassigned'] = 'Utilisateur retiré';
