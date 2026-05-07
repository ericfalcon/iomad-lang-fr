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
 * Strings for component 'tool_iomadpolicy', language 'fr'
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
$string['acceptancestatusacceptedbehalf'] = 'Accepté au nom de l’utilisateur';
$string['acceptancestatusdeclined'] = 'Refusé';
$string['acceptancestatusdeclinedbehalf'] = 'Refusé au nom de l’utilisateur';
$string['acceptancestatusoverall'] = 'Global';
$string['acceptancestatuspartial'] = 'Partiellement accepté';
$string['acceptancestatuspending'] = 'En attente';
$string['acceptanceusers'] = 'Utilisateurs';
$string['activate'] = 'Définir le statut sur « Actif »';
$string['activateconfirm'] = '<p>Vous êtes sur le point d’activer la politique <em>« {$a->name} »</em> et de faire de la version <em>« {$a->revision} »</em> la version actuelle.</p><p>Tous les utilisateurs devront accepter cette nouvelle version pour pouvoir utiliser le site.</p>';
$string['activateconfirmyes'] = 'Activer';
$string['activating'] = 'Activation d’une politique';
$string['agreepolicies'] = 'Veuillez accepter les politiques suivantes';
$string['backtoprevious'] = 'Revenir à la page précédente';
$string['backtotop'] = 'Retour en haut de page';
$string['cachedef_iomadpolicy_optional'] = 'Cache de l’indicateur facultatif ou obligatoire pour les versions de politique';
$string['consentbulk'] = 'Consentement';
$string['consentpagetitle'] = 'Consentement';
$string['contactdpo'] = 'Pour toute question concernant les politiques, veuillez contacter le responsable de la protection des données.';
$string['dataproc'] = 'Traitement des données personnelles';
$string['declineacknowledgement'] = 'Je reconnais avoir reçu une demande de refus de consentement au nom du ou des utilisateurs ci-dessus.';
$string['declinetheiomadpolicy'] = 'Refuser le consentement de l’utilisateur';
$string['deleteconfirm'] = '<p>Êtes-vous sûr de vouloir supprimer la politique <em>« {$a->name} »</em> ?</p><p>Cette action est irréversible.</p>';
$string['deleting'] = 'Suppression d’une version';
$string['editingiomadpolicydocument'] = 'Modification de la politique';
$string['erroriomadpolicyversioncompulsory'] = 'Les politiques obligatoires ne peuvent pas être refusées.';
$string['erroriomadpolicyversionnotfound'] = 'Aucune version de politique ne correspond à cet identifiant.';
$string['errorsaveasdraft'] = 'Une modification mineure ne peut pas être enregistrée en tant que brouillon.';
$string['errorusercantviewiomadpolicyversion'] = 'L’utilisateur n’a pas accès à cette version de la politique.';
$string['event_acceptance_created'] = 'Accord de politique créé';
$string['event_acceptance_updated'] = 'Accord de politique mis à jour';
$string['filtercapabilityno'] = 'Autorisation : ne peut pas accepter';
$string['filtercapabilityyes'] = 'Autorisation : peut accepter';
$string['filteriomadpolicy'] = 'Politique : {$a}';
$string['filterplaceholder'] = 'Rechercher un mot-clé ou sélectionner un filtre';
$string['filterrole'] = 'Rôle : {$a}';
$string['filters'] = 'Filtres';
$string['filterstatusdeclined'] = 'Statut : refusé';
$string['filterstatuspending'] = 'Statut : en attente';
$string['filterstatusyes'] = 'Statut : accepté';
$string['guestconsent:continue'] = 'Continuer';
$string['guestconsentmessage'] = 'En poursuivant votre navigation sur ce site, vous acceptez nos politiques :';
$string['iagree'] = 'J’accepte {$a}';
$string['iagreetotheiomadpolicy'] = 'Donner son consentement';
$string['idontagree'] = 'Non merci, je refuse {$a}';
$string['importiomadpolicy'] = 'Importer des politiques depuis tool_policy';
$string['inactivate'] = 'Définir le statut sur « Inactif »';
$string['inactivating'] = 'Désactivation d’une politique';
$string['inactivatingconfirm'] = '<p>Vous êtes sur le point de désactiver la politique <em>« {$a->name} »</em>, version <em>« {$a->revision} »</em>.</p>';
$string['inactivatingconfirmyes'] = 'Désactiver';
$string['invalidversionid'] = 'Il n’existe aucune politique avec cet identifiant.';
$string['iomadpolicy:accept'] = 'Accepter les politiques';
$string['iomadpolicy:acceptbehalf'] = 'Accepter les politiques au nom d’un autre utilisateur';
$string['iomadpolicy:managedocs'] = 'Gérer les politiques';
$string['iomadpolicy:viewacceptances'] = 'Afficher les rapports de consentement';
$string['iomadpolicydocaudience'] = 'Audience';
$string['iomadpolicydocaudience0'] = 'Tous les utilisateurs';
$string['iomadpolicydocaudience1'] = 'Utilisateurs authentifiés';
$string['iomadpolicydocaudience2'] = 'Invités';
$string['iomadpolicydoccontent'] = 'Politique complète';
$string['iomadpolicydochdriomadpolicy'] = 'Politique';
$string['iomadpolicydochdrversion'] = 'Version du document';
$string['iomadpolicydocname'] = 'Nom';
$string['iomadpolicydocoptional'] = 'Consentement facultatif';
$string['iomadpolicydocoptionalno'] = 'Obligatoire';
$string['iomadpolicydocoptionalyes'] = 'Optionnel';
$string['iomadpolicydocsummary'] = 'Résumé';
$string['iomadpolicydocsummary_help'] = 'Ce texte doit fournir un résumé clair et compréhensible de la politique.';