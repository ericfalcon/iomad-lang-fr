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
 * @subpackage email
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addnewtemplate'] = 'Remplacer un modèle par défaut';
$string['add_template_button'] = 'Passer outre';
$string['admin_deleted_body'] = '<p>Bonjour {User_Firstname} {User_Lastname},</p> <p>Vos privilèges d\'administrateur ont été révoqués sur {SiteURL}. Vous n\'avez plus accès à la gestion de votre campus</p> <p>Votre e-mail : {User_Email}</p><p>Si vous pensez qu\'il s\'agit d\'une erreur, veuillez contacter votre responsable.</p>';
$string['admin_deleted_name'] = 'Rôle de gestionnaire supprimé';
$string['admin_deleted_name_help'] = 'Cet e-mail est envoyé lorsqu\'un rôle de gestionnaire est supprimé d\'un utilisateur.';
$string['admin_deleted_subject'] = 'Le compte a été rétrogradé';
$string['advertise_classroom_based_course_body'] = '<o>Ceci pour vous informer du cours en classe suivant :</p> <p>{Course_FullName}</p> <p>Il se déroulera dans {Classroom_Name}, qui se trouve à</p> <p> {Classroom_Address}</br> {Classroom_City} {Classroom_Postcode}</br> {Classroom_Country}</br> <p>et a une capacité de {Classroom_Capacity}.</p> <p>Veuillez cliquer sur <a href= "{CourseURL}">{CourseURL}</a> pour en savoir plus sur ce cours et réserver sur cet événement</p>';
$string['advertise_classroom_based_course_name'] = 'Annoncez un événement de formation';
$string['advertise_classroom_based_course_name_help'] = 'Modèle envoyé lorsqu\'un responsable annonce un nouvel événement de formation.';
$string['advertise_classroom_based_course_subject'] = 'Cours {Course_FullName}';
$string['applytemplateset'] = 'Appliquer le jeu de modèles aux campus';
$string['approval_body'] = '<p>Vous avez été invité à approuver l\'accès au cours {Course_FullName} pour {User_FirstName} {User_LastName}.</p> <p>veuillez vous connecter à {Site_FullName} (<a href="{LinkURL}">{LinkURL} </a>) pour approuver ou refuser cette demande.</p>';
$string['approval_name'] = 'Approbation de la demande de cours du gestionnaire';
$string['approval_name_help'] = 'Modèle envoyé aux responsables lorsqu\'un utilisateur a demandé l\'approbation d\'un cours.';
$string['approval_subject'] = 'Approbation du nouveau cours';
$string['approved_body'] = '<p>Vous avez été autorisé à accéder au cours {Course_FullName}. Pour y accéder, veuillez cliquer sur <a href="{CourseURL}">{CourseURL}</a>.</p>';
$string['approved_name'] = 'Accès au cours utilisateur approuvé';
$string['approved_name_help'] = 'Modèle envoyé aux utilisateurs lorsqu\'ils ont obtenu l\'accès à un cours.';
$string['approved_subject'] = 'Vous avez été autorisé à accéder à {Course_FullName}';
$string['backtocompanytemplates'] = 'Terminer la modification du jeu de modèles';
$string['blocktitle'] = 'Modèles d\'e-mails';
$string['body'] = 'Corps';
$string['cc'] = 'Adresse CC';
$string['ccother'] = 'Adresse CC manuelle';
$string['company_licenseassigned_body'] = '<p>Cher {User_FirstName} {User_LastName},</p> <p>De nouveaux cours ont été attribués à votre campus sur {SiteURL}.</p> <p>Veuillez vous connecter en utilisant votre nom d\'utilisateur {User_Username} pour gérer cela .</p>';
$string['company_licenseassigned_name'] = 'Licence attribuée àau campus';
$string['company_licenseassigned_name_help'] = 'Cet e-mail est envoyé au responsable du campus lorsqu\'une licence a été créée pour le campus.';
$string['company_licenseassigned_subject'] = 'Nouvelle formation attribuée à {Company_Name}';
$string['company_suspended_body'] = '<p>Bonjour {User_FirstName} {User_LastName},</p> <p>Votre compte de campus a été suspendu sur {SiteURL}. Vous n\'avez plus accès à la gestion de votre campus</p> <p>Votre e-mail : {User_Email}</p><p>Si vous pensez qu\'il s\'agit d\'une erreur, veuillez contacter l\'assistance</p>';
$string['company_suspended_name'] = 'Campus suspendu';
$string['company_suspended_name_help'] = 'Cet e-mail est envoyé aux directeurs de campus lorsque leur campus est suspendu.';
$string['company_suspended_subject'] = 'Le compte du campus a été suspendu';
$string['company_unsuspended_body'] = '<p>Bonjour {User_FirstName} {User_LastName},</p> <p>Votre compte de campus a été réactivé sur {SiteURL}. Vous avez maintenant accès à la gestion de votre campus</p> <p>Votre e-mail : {User_Email}</p><p>Si vous avez d\'autres questions, veuillez contacter l\'assistance</p>';
$string['company_unsuspended_name'] = 'campus réactivé';
$string['company_unsuspended_name_help'] = 'Cet e-mail est envoyé aux directeurs de campus lorsque leur campus est réactivée';
$string['company_unsuspended_subject'] = 'Le compte du campus a été réactivé';
$string['completion_course_supervisor_body'] = '<p>{User_FirstName} {User_LastName} a terminé le cours de {Course_FullName}. Veuillez trouver ci-joint une copie de leur certificat pour vos dossiers.</p> <p>Le certificat est également disponible dans la section Rapport d\'utilisateur de notre système si vous avez besoin d\'une copie à l\'avenir.</p>';
$string['completion_course_supervisor_name'] = 'Rapport du superviseur  de l\'utilisateur l\'achèvement de cours';
$string['completion_course_supervisor_name_help'] = 'Modèle envoyé à l\'adresse e-mail d\'un superviseur d\'utilisateurs (si défini) lorsqu\'un utilisateur a terminé un cours.';
$string['completion_course_supervisor_subject'] = 'Avis : Le cours {Course_FullName} est terminé';
$string['completion_course_user_body'] = '<p>Cher {User_FirstName},</p> <p>Félicitations pour avoir suivi le cours de {Course_FullName}. Veuillez trouver ci-joint une copie de leur certificat pour vos dossiers.</p> <p>Le certificat est également disponible à partir de votre tableau de bord si vous avez besoin d\'une copie à l\'avenir.</p>';
$string['completion_course_user_name'] = 'Achèvement du cours utilisateur';
$string['completion_course_user_name_help'] = 'Cet e-mail est envoyé lorsqu\'un utilisateur termine avec succès un cours';
$string['completion_course_user_subject'] = 'Le cours {Course_FullName} est terminé';
$string['completion_digest_manager_body'] = '<p>Cher {User_FirstName},</p> <p>les utilisateurs suivants ont terminé leur formation au cours de la semaine dernière :</p> <p>{Course_ReportText}</p>';
$string['completion_digest_manager_name'] = 'Rapport d\'avertissement d\'achèvement de cours pour les gestionnaires – résumé';
$string['completion_digest_manager_name_help'] = 'Modèle envoyé à un responsable l\'informant que les utilisateurs n\'ont pas terminé les cours dans un délai configuré lorsque les e-mails du responsable sont envoyés sous forme de résumé.';
$string['completion_digest_manager_subject'] = 'Rapport d\'achèvement de l\'utilisateur';
$string['completion_expiry_warn_name'] = 'Rapport d\'achèvement de l\'utilisateur

Avertissement d\'expiration de la formation de l\'utilisateur';
$string['completion_expiry_warn_name_help'] = 'Modèle envoyé à un utilisateur lorsque sa formation a expiré.

Avertissement d\'expiration de la formation de l\'utilisateur';
$string['completion_expiry_warn_supervisor_body'] = '<p>La formation de {User_FirstName} {User_LastName} dans le cours {Course_FullName} va bientôt expirer. Veuillez prendre des dispositions pour qu\'ils reprennent cette formation, le cas échéant.</p>';
$string['completion_expiry_warn_supervisor_name'] = 'Avertissement d\'expiration de la formation du superviseur de l\'utilisateur';
$string['completion_expiry_warn_supervisor_name_help'] = 'Modèle envoyé à l\'adresse e-mail d\'un superviseur d\'utilisateurs (si défini) lorsque la formation d\'un utilisateur a expiré.';
$string['completion_expiry_warn_supervisor_subject'] = 'Avis : expiration de la formation du cours {Course_FullName}';
$string['completion_warn_manager_body'] = '<p>Cher {User_FirstName},</p> <p>les utilisateurs suivants n\'ont pas terminé leur formation dans les délais normaux :</p> <p>{Course_ReportText}</p>';
$string['completion_warn_manager_name'] = 'Rapport d\'avertissement de fin de cours du gestionnaire';
$string['completion_warn_manager_name_help'] = 'Modèle envoyé à un responsable l\'informant qu\'un utilisateur n\'a pas terminé un cours dans le temps configuré.';
$string['completion_warn_manager_subject'] = 'Rapport d\'échec d\'achèvement de l\'utilisateur';
$string['completion_warn_supervisor_body'] = '<p>{User_FirstName} {User_LastName} n\'a pas terminé sa formation dans le cours {Course_FullName} dans les délais normaux</p>';
$string['completion_warn_supervisor_name'] = 'Avertissement de fin de cours du superviseur de l\'utilisateur.';
$string['completion_warn_supervisor_name_help'] = 'Modèle envoyé à l\'adresse e-mail d\'un superviseur d\'utilisateurs (si défini) lorsqu\'un utilisateur n\'a pas terminé un cours dans le délai configuré.';
$string['completion_warn_supervisor_subject'] = 'Avis : Le cours {Course_FullName} n\'est pas terminé';
$string['completion_warn_user_body'] = '<p>Cher {User_FirstName},</p> <p>Vous n\'avez toujours pas terminé votre formation sur {Course_FullName}. Veuillez visiter <a href="{CourseURL}">{CourseURL}</a> pour rectifier cela.</p>';
$string['completion_warn_user_name'] = 'Avertissement de fin de cours utilisateur';
$string['completion_warn_user_name_help'] = 'Modèle envoyé à un utilisateur lorsqu\'il n\'a pas terminé un cours dans le temps configuré.';
$string['completion_warn_user_subject'] = 'Avis : Le cours {Course_FullName} n\'est pas terminé';
$string['controls'] = 'Contrôles';
$string['courseclassroom_approved_body'] = '<p>Vous avez été autorisé à accéder au cours {Event_Name}. Pour y accéder, veuillez cliquer sur <a href="{CourseURL}">{CourseURL}</a>.<p>';
$string['courseclassroom_approved_name'] = 'Événement de formation des utilisateurs approuvé';
$string['courseclassroom_approved_name_help'] = 'Modèle envoyé aux utilisateurs lorsqu\'ils ont obtenu l\'accès à un événement de formation.';
$string['courseclassroom_approved_subject'] = 'Vous avez été autorisé à accéder à {Event_Name}';
$string['course_classroom_approval_body'] = '<p>Il vous a été demandé d\'approuver l\'accès au cours de formation en face à face {Event_Name} pour {Approveuser_FirstName} {Approveuser_LastName} lors de l\'événement suivant -</p> <br> Heure : {Classroom_Time}</br> Lieu : {Classroom_Name}</br> Adresse : {Classroom_Address}</br> {Classroom_City} {Classroom_Postcode}</br> </br> <p>veuillez vous connecter sur {Site_FullName} (https://iomad.passionanimation.fr) pour approuver ou refuser cette demande.</p>';
$string['course_classroom_approval_name'] = 'Demande d\'approbation d\'événement de formation de gestionnaire';
$string['course_classroom_approval_name_help'] = 'Modèle envoyé aux responsables lorsqu\'un utilisateur a demandé l\'approbation d\'un événement de formation.';
$string['course_classroom_approval_request_body'] = '<p>Vous avez demandé l\'accès à la formation en présentiel {Event_Name} lors de l\'événement suivant -</p> </br> Heure : {Classroom_Time}</br> Lieu : {Classroom_Name}</br> Adresse  : {Classroom_Address}</br> {Classroom_City} {Classroom_Postcode}</br> <p>Vous serez averti une fois que votre responsable aura approuvé ou refusé l\'accès.</p>';
$string['course_classroom_approval_request_name'] = 'Confirmation de la demande d\'événement de formation des utilisateurs';
$string['course_classroom_approval_request_name_help'] = 'Modèle envoyé à l\'utilisateur lorsqu\'il demande l\'accès à un événement de formation.';
$string['course_classroom_approval_request_subject'] = 'Nouvelle demande d\'approbation d\'événement de formation en face à face envoyée';
$string['course_classroom_approval_subject'] = 'Approbation d\'un nouvel événement de formation en face à face';
$string['course_classroom_approved_body'] = '<p>Vous avez été autorisé à accéder au cours de formation en face à face {Event_Name} lors de l\'événement suivant -</p> </br> Heure : {Classroom_Time}</br> Lieu : {Classroom_Name}</br> Adresse  : {Classroom_Address}</br> {Classroom_City} {Classroom_Postcode}';
$string['course_classroom_approved_name'] = 'L\'accès à l\'événement de formation des utilisateurs a été approuvé';
$string['course_classroom_approved_name_help'] = 'Modèle envoyé aux utilisateurs lorsqu\'ils ont obtenu l\'accès à un événement de formation.';
$string['course_classroom_approved_subject'] = 'Événement de formation en face à face approuvé';
$string['course_classroom_denied_body'] = '<p>Votre demande d\'approbation a été rejetée pour {Event_Name} à l\'événement suivant -</p> </br> Heure : {Classroom_Time}</br> Lieu : {Classroom_Name}</br> Adresse : {Classroom_Address}< /br> {Classroom_City} {Classroom_Postcode}';
$string['course_classroom_denied_name'] = 'Accès à l\'événement de formation utilisateur refusé';
$string['course_classroom_denied_name_help'] = 'Modèle envoyé aux utilisateurs lorsqu\'ils se sont vu refuser l\'accès à un événement de formation.';
$string['course_classroom_denied_subject'] = 'Approbation de l\'événement de formation en face à face refusée';
$string['course_classroom_manager_denied_body'] = '<p>La demande d\'approbation pour {Approveuser_FirstName} {Approveuser_LastName} a été rejetée par {User_FirstName} {User_LastName} ({User_Email}) pour {Event_Name} à l\'événement suivant -</p> </br> Heure : {Classroom_Time} </br> Emplacement : {Classroom_Name}</br> Adresse : {Classroom_Address}</br> {Classroom_City} {Classroom_Postcode}';
$string['course_classroom_manager_denied_name'] = 'Accès refusé à l\'événement de formation des responsables de service';
$string['course_classroom_manager_denied_name_help'] = 'Modèle envoyé au responsable du service lorsqu\'un utilisateur s\'est vu refuser l\'accès à un événement de formation.';
$string['course_classroom_manager_denied_subject'] = 'Approbation de l\'événement de formation en face à face refusée par le directeur de campus';
$string['course_completed_manager_body'] = '<p>Cher {User_FirstName}</p> <p>{Course_ReportText}</p>';
$string['course_completed_manager_name'] = 'Rapport de fin de cours de gestionnaire';
$string['course_completed_manager_name_help'] = 'Modèle envoyé à un responsable lorsqu\'un utilisateur termine un cours.';
$string['course_completed_manager_subject'] = 'Rapport de fin de cours de l\'étudiant';
$string['course_not_started_warning_body'] = '<p>Cher {User_FirstName},</p> <p>Vous n\'avez toujours pas commencé votre formation sur {Course_FullName}. Veuillez visiter <a href="{CourseURL}">{CourseURL}</a> pour rectifier cela.</p>';
$string['course_not_started_warning_name'] = 'Avertissement de Cours non commencé';
$string['course_not_started_warning_name_help'] = 'Cet e-mail est envoyé à un utilisateur lorsqu\'il a accès à un cours et qu\'il ne l\'a pas commencé dans le délai défini dans les paramètres du cours Iomad.';
$string['course_not_started_warning_subject'] = 'Avis : Le cours {Course_FullName} n\'a pas commencé';
$string['crontask'] = 'Traitement des e-mails Iomad';
$string['custom'] = 'personnalisé';
$string['daily'] = 'Au quotidien';
$string['default'] = 'défaut';
$string['deletetemplateset'] = 'Supprimer le jeu de modèles';
$string['deletetemplatesetfull'] = 'Êtes-vous absolument sûr de vouloir supprimer l\'ensemble de modèles {$a} ?';
$string['delete_template'] = 'Supprimer le modèle';
$string['delete_template_button'] = 'Revenir à la valeur par défaut';
$string['delete_template_checkfull'] = 'Êtes-vous absolument sûr de vouloir rétablir {$a} le modèle par défaut ?';
$string['editatemplate'] = 'Modifier un modèle de remplacement';
$string['edittemplateset'] = 'Modifier l\'ensemble de modèles';
$string['edit_template'] = 'Modifier le modèle d\'e-mail';
$string['email:add'] = 'Remplacer les modèles d\'e-mail par défaut';
$string['email:delete'] = 'Rétablir les modèles d\'e-mail par défaut';
$string['email:edit'] = 'Modifier les modèles d\'e-mail';
$string['email:list'] = 'Liste des modèles d\'e-mail';
$string['email:send'] = 'Envoyer des e-mails à l\'aide de modèles';
$string['email:templateset_list'] = 'Répertorier les ensembles de modèles d\'e-mail enregistrés';
$string['emailrepeatday'] = 'Jour de renvoi de l\'e-mail**';
$string['emailrepeatday_help'] = 'Il s\'agit du jour précis où un e-mail est renvoyé.';
$string['emailrepeatinfo'] = '<p>**Seuls les e-mails d\'avertissement seront répétés.</p>';
$string['emailrepeatperiod'] = 'E-mail renvoyé tous les**';
$string['emailrepeatperiod_help'] = 'Il s\'agit de la fréquence à laquelle un e-mail est renvoyé à l\'utilisateur.';
$string['emailrepeatvalue'] = 'Nombre de renvoi d\'e-mail**';
$string['emailrepeatvalue_help'] = 'C\'est le nombre maximum de fois que l\'e-mail est renvoyé.';
$string['emailtemplatename'] = 'Nom du modèle d\'e-mail';
$string['emailtemplatesets'] = 'Ensembles de modèles d\'e-mails';
$string['emailtemplatesetsaved'] = 'Ensemble de modèles enregistré avec succès';
$string['email_data'] = 'Données de remplacement';
$string['email_template'] = 'Modèle d\'e-mail \'{$a->name}\' pour \'{$a->companyname}\\';
$string['email_templates_for'] = 'Modèles d\'e-mail pour \'{$a}\\';
$string['email_template_send'] = 'Envoyer un message à tous les utilisateurs concernés de \'{$a->companyname}\' en utilisant \'{$a->name}\\';
$string['enable_manager'] = 'Activer pour les gestionnaires';
$string['enable_supervisor'] = 'Activer pour les superviseurs';
$string['expire_body'] = '<p>Ceci est pour vous informer que votre formation dans {Course_FullName} expire bientôt.</p>';
$string['expire_manager_body'] = '<p>Cher {User_FullName},</p> <p>l\'accréditation des utilisateurs suivants dans {Course_FullName} a expiré :</p> <p>{User_ReportText}</p>';
$string['expire_manager_name'] = 'Rapport d\'expiration de la formation des managers';
$string['expire_manager_name_help'] = 'Modèle envoyé à un responsable l\'informant de tous les utilisateurs dont la formation a expiré.';
$string['expire_manager_subject'] = 'Rapport d\'accréditation expiré pour {Course_FullName}';
$string['expire_name'] = 'Formation utilisateur expirée';
$string['expire_name_help'] = 'Modèle envoyé à un utilisateur lorsque sa formation dans un cours a expiré.';
$string['expire_subject'] = 'Le cours expire';
$string['expiry_warn_manager_body'] = '<p>Cher {User_FirstName},</p> <p>l\'accréditation des utilisateurs suivants va bientôt expirer :</p> <p>{Course_ReportText}</p>';
$string['expiry_warn_manager_name'] = 'Avertissement d\'expiration de la formation des managers';
$string['expiry_warn_manager_name_help'] = 'Modèle envoyé aux managers les informant des utilisateurs dont la formation arrive à expiration.';
$string['expiry_warn_manager_subject'] = 'Rapport d\'expiration de l\'accréditation';
$string['expiry_warn_user_body'] = '<p>Cher {User_FirstName},</p> <p>votre formation accréditée sur {Course_FullName} expire bientôt. Veuillez organiser une ré-accréditation, le cas échéant</p>';
$string['expiry_warn_user_name'] = 'Avertissement d\'expiration de la formation des utilisateurs';
$string['expiry_warn_user_name_help'] = 'Modèle envoyé à un utilisateur lorsque sa formation dans un cours arrive à expiration.';
$string['expiry_warn_user_subject'] = 'Avis : L\'accréditation dans {Course_FullName} expirera bientôt.';
$string['fortnightly'] = 'Bimensuel';
$string['fromother'] = 'Adresse d\'expédition manuelle';
$string['fromothername'] = 'Nom de l\'expéditeur manuel';
$string['invoice_ordercomplete_admin_body'] = '<p>Cher administrateur e-commerce</p> <p>La commande suivante vient d\'être soumise par {Invoice_FirstName} {Invoice_LastName} de {Invoice_Company}.</br> Une facture leur a été envoyée par e-mail.</ p> <p>{Invoice_Itemized}</p>';
$string['invoice_ordercomplete_admin_name'] = 'Ordre de facturation administrateur créé';
$string['invoice_ordercomplete_admin_name_help'] = 'Modèle envoyé à l\'administrateur de la boutique lorsqu\'une commande avec facture est générée.';
$string['invoice_ordercomplete_admin_subject'] = 'Commande e-commerce (facture {Invoice_Reference})';
$string['invoice_ordercomplete_body'] = '<p>Cher {User_FirstName} {User_LastName}</p> <p>Votre référence de commande est {Invoice_Reference}</p> <p>Merci pour votre commande de ce qui suit :</p> <p>{Invoice_Itemized} </p> <p>Une fois cette facture payée, les licences seront créées ou les inscriptions seront effectuées par l\'administrateur.</p>';
$string['invoice_ordercomplete_name'] = 'Ordre de facturation utilisateur créé';
$string['invoice_ordercomplete_name_help'] = 'Modèle envoyé à un utilisateur lorsqu\'il passe une commande avec facture dans la boutique.';
$string['invoice_ordercomplete_subject'] = 'Merci pour votre commande sur {Site_ShortName}';
$string['licensepoolexpiring_body'] = '<p>Bonjour {User_FirstName} {User_LastName}</p> <p>Ce message vise à informer votre compte de campus {Company_Name} que la licence de votre programme {License_Name}, {License_ID} expire le {License_Expirydate}. Vous ne pourrez plus attribuer de licences supplémentaires aux utilisateurs une fois la date d\'expiration atteinte. Veuillez contacter votre gestionnaire de programme si vous avez d\'autres questions</p>';
$string['licensepoolexpiring_name'] = 'Avertissement relatif à la date d\'expiration de la licence';
$string['licensepoolexpiring_name_help'] = 'Cet e-mail est envoyé aux responsables du campus lorsqu\'une licence est sur le point d\'expirer.';
$string['licensepoolexpiring_subject'] = 'Alerte : Expiration du pool de licences {License_Name} {License_Expirydate}, {License_ID}';
$string['licensepoolwarning_body'] = '<p>Bonjour {User_FirstName} {User_LastName}</p> <p>Ce message vous informe que votre compte de campus {Company_Name} a utilisé 90 % du pool de licences {License_Name}, {License_ID} . Vous ne pourrez plus attribuer de licences supplémentaires une fois que vous aurez atteint 100 % d\'utilisation.</p> <p>Veuillez contacter votre responsable de programme Fletdefense pour plus de détails</p>';
$string['licensepoolwarning_name'] = 'Avertissement d\'utilisation de la licence';
$string['licensepoolwarning_name_help'] = 'Cet e-mail est envoyé lorsque le nombre d\'emplacements alloués dans la licence est atteint';
$string['licensepoolwarning_subject'] = '90 % du groupe de licences utilisé {License_Name}, {License_ID}';
$string['license_allocated_body'] = '<p>Cher {User_FirstName},</p> <p>Vous avez été autorisé à accéder à la formation en ligne pour {Course_FullName}. Veuillez visiter <a href="{CourseURL}">{CourseURL}</a> pour participer à cette formation.</br> Une fois inscrit au cours, vous y aurez accès pendant {License_Length} jours. L\'accès inutilisé expirera après {License_Valid}</p>';
$string['license_allocated_name'] = 'Licence utilisateur attribuée';
$string['license_allocated_name_help'] = 'Modèle envoyé à un utilisateur lorsqu\'il s\'est vu attribuer une licence sur un cours.';
$string['license_allocated_subject'] = 'Accès au cours {Course_FullName} accordé';
$string['license_reminder_body'] = '<p>Cher {User_FirstName},</p> <p>Vous avez été autorisé à accéder à la formation en ligne pour {Course_FullName}. Veuillez visiter <a href="{CourseURL}">{CourseURL}</a> pour participer à cette formation.</br> Une fois inscrit au cours, vous y aurez accès pendant {License_Length} jours. L\'accès inutilisé expirera après {License_Valid}</p>';
$string['license_reminder_name'] = 'Rappel d\'activation de la licence utilisateur';
$string['license_reminder_name_help'] = 'Modèle envoyé à un utilisateur lorsqu\'un responsable lui envoie un rappel indiquant qu\'il n\'a pas encore accès à un cours pour lequel il a reçu une licence.';
$string['license_reminder_subject'] = 'Rappel : le cours {Course_FullName} vous a été attribué';
$string['license_removed_body'] = '<p>Votre accès au cours {Course_FullName} a été révoqué. Si vous pensez qu\'il s\'agit d\'une erreur, veuillez contacter votre responsable de formation</p>';
$string['license_removed_name'] = 'Licence de cours utilisateur révoquée';
$string['license_removed_name_help'] = 'Modèle envoyé à un utilisateur lorsqu\'une licence de cours lui a été retirée.';
$string['license_removed_subject'] = 'Accès au cours {Course_FullName} supprimé';
$string['managetemplatesets'] = 'Gérer les ensembles de modèles';
$string['microlearning_nugget_reminder1_body'] = '<p>Bonjour {User_FirstName}</p> <p>Vous n\'avez pas encore terminé votre Pépite de micro-apprentissage. Vous pouvez y accéder en cliquant sur <a href=\'{Nugget_URL}\'>{Nugget_Name}</a> ou en vous connectant au <a href=\'{SiteURL}\'>Site</a></p>';
$string['microlearning_nugget_reminder1_name'] = 'Premier rappel de la pépite de micro-apprentissage pour l\'utilisateur';
$string['microlearning_nugget_reminder1_name_help'] = 'Cet e-mail est envoyé à un utilisateur lorsqu\'une pépite de microlearning dans un thread de microlearning atteint le premier rappel et n\'a pas encore été terminée.';
$string['microlearning_nugget_reminder1_subject'] = 'Rappel - Nouvelle pépite de microlearning pour vous.';
$string['microlearning_nugget_reminder2_body'] = '<p>Bonjour {User_FirstName}</p> <p>Vous n\'avez pas encore terminé votre pépite de microlearning. Vous pouvez y accéder en cliquant sur <a href=\'{Nugget_URL}\'>{Nugget_Name}</a> ou en vous connectant au <a href=\'{SiteURL}\'>Site</a></p>';
$string['microlearning_nugget_reminder2_name'] = 'Deuxième rappel de la pépite de microlearning pour l\'utilisateur';
$string['microlearning_nugget_reminder2_name_help'] = 'Cet e-mail est envoyé à un utilisateur lorsqu\'une pépite de microlearning dans un thread de microlearning atteint le premier rappel et n\'a pas encore été terminée.';
$string['microlearning_nugget_reminder2_subject'] = 'Rappel - Nouvelle pépite de microlearning pour vous.';
$string['microlearning_nugget_scheduled_body'] = '<p>Bonjour {User_FirstName}</p> <p>Vous avez une nouvelle pépite de microlearning à compléter. Vous pouvez y accéder en cliquant sur <a href=\'{Nugget_URL}\'>{Nugget_Name}</a></p>';
$string['microlearning_nugget_scheduled_name'] = 'Pépite de microlearning prévue pour l\'utilisateur';
$string['microlearning_nugget_scheduled_name_help'] = 'Cet e-mail est envoyé à un utilisateur lorsqu\'une pépite de microlearning dans un thread de microlearning est planifiée.';
$string['microlearning_nugget_scheduled_subject'] = 'Nouvelle pépite de microlearning pour vous.';
$string['missingtemplatesetname'] = 'Veuillez saisir un nom d\'ensemble de modèles';
$string['monthly'] = 'Mensuel';
$string['override'] = 'outrepasser';
$string['password_update_body'] = '<p>Votre mot de passe a été mis à jour par le personnel administratif. Votre nouveau mot de passe est</p> <p>{User_Newpassword}</p> <p>Veuillez visiter <a href="{LinkURL}">{LinkURL}</a> pour le modifier</p>';
$string['password_update_name'] = 'Mot de passe utilisateur modifié';
$string['password_update_name_help'] = 'Modèle envoyé à un utilisateur lorsque son mot de passe a été modifié par un responsable.';
$string['password_update_subject'] = 'Notification de changement de mot de passe pour {User_FirstName}';
$string['pluginname'] = 'Local : Courriel';
$string['privacy:metadata:local_email'] = 'Iomad email information';
$string['privacy:metadata:local_email:body'] = 'Corps de l\'e-mail';
$string['privacy:metadata:local_email:courseid'] = 'ID du cours';
$string['privacy:metadata:local_email:headers'] = 'En-tête supplémentaire d\'e-mail';
$string['privacy:metadata:local_email:id'] = 'ID de l\'enregistrement dans la table local_email';
$string['privacy:metadata:local_email:invoiceid'] = 'ID de facture Iomad eCommerce';
$string['privacy:metadata:local_email:senderid'] = 'ID utilisateur de l\'expéditeur';
$string['privacy:metadata:local_email:sent'] = 'Horodatage Unix du moment où l\'e-mail a été envoyé';
$string['privacy:metadata:local_email:subject'] = 'Sujet du courriel';
$string['privacy:metadata:local_email:templatename'] = 'Nom du modèle d\'e-mail envoyé';
$string['privacy:metadata:local_email:userid'] = 'ID utilisateur du destinataire';
$string['replyto'] = 'Répondre à';
$string['replytoother'] = 'Réponse manuelle à';
$string['save'] = 'Sauvegarder';
$string['savetemplateset'] = 'Enregistrer en tant que jeu de modèles';
$string['save_to_override_default_template'] = 'Enregistrer pour remplacer le modèle par défaut';
$string['select_course'] = 'Sélectionnez un cours';
$string['select_email_var'] = 'Sélectionnez la variable d\'e-mail';
$string['send_button'] = 'Envoyer';
$string['send_emails'] = 'Envoyer des emails';
$string['signature'] = 'Signature';
$string['signatureseparator'] = '<p>--</p>';
$string['subject'] = 'Sujet';
$string['templateaddedok'] = 'Le modèle a été ajouté avec succès.';
$string['templatesetdeleted'] = 'Ensemble de modèles supprimé avec succès';
$string['templatesetname'] = 'Nom du jeu de modèles';
$string['templatesetname_help'] = 'Il s\'agit du nom par lequel le jeu de modèles sera référencé.';
$string['templatetype'] = 'Type de modèle';
$string['templateupdatedok'] = 'Le modèle a été mis à jour avec succès.';
$string['template_list_title'] = 'Modèles d\'e-mails';
$string['toother'] = 'Manuel à l\'adresse';
$string['user_added_to_course_body'] = '<p>Cher {User_FirstName}</p> <br> <p>Vous avez été autorisé à accéder à la formation en ligne pour {Course_FullName}. Veuillez visiter <a href="{CourseURL}">{CourseURL}</a> pour participer à cette formation.</p>';
$string['user_added_to_course_name'] = 'Utilisateur inscrit au cours';
$string['user_added_to_course_name_help'] = 'Modèle envoyé aux utilisateurs lorsqu\'ils sont inscrits à un cours.';
$string['user_added_to_course_subject'] = 'Ajouté à {Course_FullName}';
$string['user_create_body'] = '<p>Cher {User_FirstName},</p> <p>Un nouveau compte utilisateur a été créé pour vous sur le "Système de gestion de la formation" et vous avez reçu un nouveau mot de passe temporaire.</p> <p>Votre les informations de connexion actuelles sont désormais :<p> <p>nom d\'utilisateur : {User_Username}</br> mot de passe : {User_Newpassword}</br> (vous devrez changer votre mot de passe lorsque vous vous connecterez pour la première fois)</p> <p>Pour commencer à utiliser \'Training Management System\', connectez-vous à</p> <p><a href="{LinkURL}">{LinkURL}</a></p> <p>Dans la plupart des programmes de messagerie, cela devrait apparaître comme un lien bleu sur lequel vous pouvez simplement cliquer. Si cela ne fonctionne pas, coupez et collez l\'adresse dans la ligne d\'adresse en haut de la fenêtre de votre navigateur Web.</p> <p>Pour les questions techniques, veuillez contacter votre équipe d\'assistance informatique/Helpdesk</p> < p>Cordialement,</p> <p>{Sender_FirstName} {Sender_LastName}</p>';
$string['user_create_name'] = 'Compte utilisateur créé';
$string['user_create_name_help'] = 'Modèle envoyé à un nouvel utilisateur lorsqu\'un nouveau compte a été créé.';
$string['user_create_subject'] = 'Un nouveau compte d\'apprentissage en ligne a été créé pour vous';
$string['user_deleted_body'] = '<p>Bonjour {User_FirstName} {User_LastName},</p> <p>Votre compte a été supprimé sur {SiteURL}. Vous n\'avez plus accès à aucune de vos formations</p> <p>Si vous pensez qu\'il s\'agit d\'une erreur, veuillez contacter votre responsable</p> <p>Votre email : {User_Email}</p>';
$string['user_deleted_name'] = 'Utilisateur supprimé';
$string['user_deleted_name_help'] = 'Cet e-mail est envoyé à un utilisateur lorsque son compte est supprimé.';
$string['user_deleted_subject'] = 'Le compte a été supprimé';
$string['user_programcompleted_body'] = '<p>Cher {User_FirstName} {User_LastName},</p> <p>Félicitations ! Vous avez suivi tous les cours de votre programme de formation</p>';
$string['user_programcompleted_name'] = 'Programme de cours utilisateur terminé';
$string['user_programcompleted_name_help'] = 'Cet e-mail est envoyé lorsqu\'un utilisateur termine tous les cours d\'une licence de programme';
$string['user_programcompleted_subject'] = 'Le programme des cours est complet';
$string['user_promoted_body'] = '<p>Bonjour {User_FirstName} {User_LastName},</p> <p>Vous avez reçu des privilèges d\'administrateur. Pour accéder à la suite administrative, aux outils de suivi et de rapport, veuillez cliquer sur le lien suivant ou copier et coller le lien dans votre navigateur pour définir votre mot de passe et vous connecter {SiteURL}</p> <p>Sur la page de connexion, cliquez sur le bouton Activer pour activer votre compte pour la première connexion.</p> <p>Votre email : {User_Email}</p>';
$string['user_promoted_name'] = 'Utilisateur promu gestionnaire';
$string['user_promoted_name_help'] = 'Utilisateur promu gestionnaire

Cet e-mail est envoyé lorsqu\'un utilisateur est promu au rang de responsable dans un campus';
$string['user_promoted_subject'] = 'Nouveau rôle accordé';
$string['user_removed_from_event_body'] = '<p>Cher {User_FirstName},</p> <p>vous avez été marqué comme ne participant plus à la formation en face à face sur {Course_FullName} à l\'événement suivant -</p> <p>Heure : {Classroom_Time}< /br> Lieu : {Classroom_Name}</br> Adresse : {Classroom_Address}</br> {Classroom_City} {Classroom_Postcode}';
$string['user_removed_from_event_name'] = 'Événement de formation des utilisateurs annulé';
$string['user_removed_from_event_name_help'] = 'Modèle envoyé à un utilisateur pour confirmation lorsqu\'il a été retiré d\'un événement de formation.';
$string['user_removed_from_event_subject'] = 'Avis d\'annulation {Course_FullName}';
$string['user_reset_body'] = '<p>Cher {User_FirstName},</p> <p>Les détails de votre compte utilisateur sont les suivants.</p> <p>nom d\'utilisateur : {User_Username}</br> mot de passe : {User_Newpassword}</br> (vous devrez changer votre mot de passe lorsque vous vous connecterez)</p> <p>Cordialement,</p> <p>{Sender_FirstName} {Sender_LastName}</p>';
$string['user_reset_name'] = 'Réinitialisation du compte utilisateur';
$string['user_reset_name_help'] = 'Modèle envoyé à un utilisateur lorsqu\'un responsable réinitialise ses informations d\'utilisateur.';
$string['user_reset_subject'] = 'Les identifiants de connexion de votre compte ont été réinitialisés';
$string['user_signed_up_for_event_body'] = '<p>Cher {User_FirstName},</p> <p>vous vous êtes inscrit à la formation en face à face sur {Course_FullName} à l\'événement suivant -</p> <p>Heure : {Classroom_Time}</br> Emplacement : {Classroom_Name}</br> Adresse : {Classroom_Address}</br> {Classroom_City} {Classroom_Postcode}</br> <p>Veuillez vous assurer que vous avez terminé les tâches préalables au cours requises avant de participer</p>';
$string['user_signed_up_for_event_name'] = 'Inscription des utilisateurs à l\'événement de formation';
$string['user_signed_up_for_event_name_help'] = 'Modèle envoyé à un utilisateur lorsqu\'il s\'inscrit à un événement de formation qui ne nécessite pas l\'approbation du responsable.';
$string['user_signed_up_for_event_subject'] = 'Avis de présence {Course_FullName}';
$string['user_suspended_body'] = '<p>Bonjour {User_FirstName} {User_LastName},</p> <p>Votre compte a été suspendu sur {SiteURL}. Vous n\'avez plus accès à aucune de vos formations</p> <p>Si vous pensez qu\'il s\'agit d\'une erreur, veuillez contacter votre responsable</p> <p>Votre email : {User_Email}</p>';
$string['user_suspended_name'] = 'Utilisateur suspendu';
$string['user_suspended_name_help'] = 'Cet e-mail est envoyé à un utilisateur lorsque celui-ci est suspendu.';
$string['user_suspended_subject'] = 'Le compte a été suspendu';
$string['user_unsuspended_body'] = '<p>Bonjour {User_FirstName} {User_LastName},</p> <p>Votre compte a été réactivé sur {SiteURL}. Vous avez maintenant accès à toutes vos formations</p> <p>Si vous avez d\'autres questions, veuillez contacter votre responsable</p> <p>Votre email : {User_Email}</p>';
$string['user_unsuspended_name'] = 'L\'utilisateur a été réactivé';
$string['user_unsuspended_name_help'] = 'Cet e-mail est envoyé à un utilisateur lorsque son compte est réactivé';
$string['user_unsuspended_subject'] = 'Le compte a été réactivé';
$string['weekly'] = 'Hebdomadaire';
