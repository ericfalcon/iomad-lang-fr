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
 * @package    tool
 * @subpackage iomadpolicy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptanceacknowledgement'] = 'Je reconnais avoir reçu une demande de consentement au nom du ou des utilisateurs ci-dessus.';
$string['acceptancenote'] = 'Remarques';
$string['acceptancepolicies'] = 'Politiques';
$string['acceptancessavedsucessfully'] = 'Les accords ont été enregistrés avec succès.';
$string['acceptancestatusaccepted'] = 'Accepté';
$string['acceptancestatusacceptedbehalf'] = 'Accepté au nom de l\'utilisateur';
$string['acceptancestatusdeclined'] = 'Refusé';
$string['acceptancestatusdeclinedbehalf'] = 'Refusé au nom de l\'utilisateur';
$string['acceptancestatusoverall'] = 'Dans l\'ensemble';
$string['acceptancestatuspartial'] = 'Partiellement accepté';
$string['acceptancestatuspending'] = 'En attente';
$string['acceptanceusers'] = 'Utilisateurs';
$string['activate'] = 'Définir le statut sur "Actif"';
$string['activateconfirm'] = '<p>Vous êtes sur le point d\'activer la politique <em>\'{$a->name}\'</em> et de faire de la version <em>\'{$a->revision}\'</em> la version actuelle.< /p><p>Tous les utilisateurs devront accepter cette nouvelle version de la politique pour pouvoir utiliser le site.</p>';
$string['activateconfirmyes'] = 'Activer';
$string['activating'] = 'Activation d\'une politique';
$string['agreepolicies'] = 'Veuillez accepter les politiques suivantes';
$string['backtoprevious'] = 'Revenir à la page précédente';
$string['backtotop'] = 'Retour au haut de page';
$string['cachedef_iomadpolicy_optional'] = 'Cache de l\'indicateur facultatif/obligatoire pour les versions de stratégie';
$string['consentbulk'] = 'Consentement';
$string['consentpagetitle'] = 'Consentement';
$string['contactdpo'] = 'pour toute question concernant les politiques, veuillez contacter le responsable de la confidentialité.';
$string['dataproc'] = 'Traitement des données personnelles';
$string['declineacknowledgement'] = 'Je reconnais avoir reçu une demande de refus de consentement au nom du ou des utilisateurs ci-dessus.';
$string['declinetheiomadpolicy'] = 'Refuser le consentement de l\'utilisateur';
$string['deleteconfirm'] = '<p>Êtes-vous sûr de vouloir supprimer la politique<em>\'{$a->name}\'</em> ?</p><p>Cette opération ne peut pas être annulée.</p>';
$string['deleting'] = 'Supprimer une version';
$string['editingiomadpolicydocument'] = 'Modification de politique';
$string['erroriomadpolicyversioncompulsory'] = 'Les politiques obligatoires ne peuvent pas être refusées !';
$string['erroriomadpolicyversionnotfound'] = 'Il n\'existe aucune version de politique avec cet identifiant.';
$string['errorsaveasdraft'] = 'Une modification mineure ne peut pas être enregistrée en tant que brouillon';
$string['errorusercantviewiomadpolicyversion'] = 'L\'utilisateur n\'a pas accès à cette version de la stratégie.';
$string['event_acceptance_created'] = 'Accord de politique d\'utilisation créé';
$string['event_acceptance_updated'] = 'Accord de politique d\'utilisation mis à jour';
$string['filtercapabilityno'] = 'Autorisation : Je ne peux pas être d\'accord';
$string['filtercapabilityyes'] = 'Autorisation : Peut accepter';
$string['filteriomadpolicy'] = 'Politique : {$a}';
$string['filterplaceholder'] = 'Rechercher un mot clé ou sélectionner un filtre';
$string['filterrole'] = 'Rôle: {$a}';
$string['filters'] = 'Filtres';
$string['filterstatusdeclined'] = 'Statut : Refusé';
$string['filterstatuspending'] = 'Statut: En attente';
$string['filterstatusyes'] = 'Statut : Accepté';
$string['guestconsent:continue'] = 'Continuer';
$string['guestconsentmessage'] = 'Si vous continuez à naviguer sur ce site Web, vous acceptez nos politiques :';
$string['iagree'] = 'J\'accepte le {$a}';
$string['iagreetotheiomadpolicy'] = 'Donner son consentement';
$string['idontagree'] = 'Non merci, je refuse {$a}';
$string['importiomadpolicy'] = 'Importer des politiques à partir de tool_policy';
$string['inactivate'] = 'Définir le statut sur "Inactif"';
$string['inactivating'] = 'Désactivation d\'une politique';
$string['inactivatingconfirm'] = '<p>Vous êtes sur le point de désactiver la politique <em>\'{$a->name}\'</em> version <em>\'{$a->revision}\'</em>.</p>';
$string['inactivatingconfirmyes'] = 'Désactiver';
$string['invalidversionid'] = 'Il n\'y a aucune politique avec cet identifiant !';
$string['iomadpolicy:accept'] = 'Accepter les politiques';
$string['iomadpolicy:acceptbehalf'] = 'Donner son consentement pour les politiques au nom de quelqu\'un d\'autre';
$string['iomadpolicy:managedocs'] = 'Gérer les politiques';
$string['iomadpolicy:viewacceptances'] = 'Afficher les rapports sur les accords d\'utilisation';
$string['iomadpolicydocaudience'] = 'Consentement de l\'utilisateur';
$string['iomadpolicydocaudience0'] = 'Tous les utilisateurs';
$string['iomadpolicydocaudience1'] = 'Utilisateurs authentifiés';
$string['iomadpolicydocaudience2'] = 'Invités';
$string['iomadpolicydoccontent'] = 'Politique complète';
$string['iomadpolicydochdriomadpolicy'] = 'Politique';
$string['iomadpolicydochdrversion'] = 'Version du document';
$string['iomadpolicydocname'] = 'Nom';
$string['iomadpolicydocoptional'] = 'Accord facultatif';
$string['iomadpolicydocoptionalno'] = 'Obligatoire';
$string['iomadpolicydocoptionalyes'] = 'Optionnel';
$string['iomadpolicydocsummary'] = 'Résumé';
$string['iomadpolicydocsummary_help'] = 'Ce texte doit fournir un résumé de la politique, potentiellement sous une forme simplifiée et facilement accessible, en utilisant un langage clair et simple.';
