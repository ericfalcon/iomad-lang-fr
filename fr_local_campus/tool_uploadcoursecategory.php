<?php

defined('MOODLE_INTERNAL') || die();

/**
 * Strings for component 'tool_uploadcoursecategory', language 'fr'
 *
 * @package    tool
 * @subpackage uploadcoursecategory
 */

$string['allowdeletes'] = 'Autoriser les suppressions';
$string['allowrenames'] = 'Autoriser les renommages';

$string['ccbulk'] = 'Sélectionner pour les opérations groupées';
$string['ccbulkall'] = 'Toutes les catégories de cours';
$string['ccbulknew'] = 'Nouvelles catégories de cours';
$string['ccbulkupdated'] = 'Catégories de cours mises à jour';

$string['cccsvline'] = 'Ligne CSV';

$string['ccfullnametemplate'] = 'Modèle de nom complet';
$string['ccidnumbertemplate'] = 'Modèle d’identifiant';

$string['cclegacy1role'] = '(Étudiant d’origine) typeN=1';
$string['cclegacy2role'] = '(Enseignant d’origine) typeN=2';
$string['cclegacy3role'] = '(Enseignant sans édition d’origine) typeN=3';

$string['ccnametemplate'] = 'Modèle de nom';

$string['ccnoemailduplicates'] = 'Empêcher les doublons d’adresse électronique';

$string['ccoptype'] = 'Type d’import';
$string['ccoptype_addinc'] = 'Ajouter tout, incrémenter les noms si nécessaire';
$string['ccoptype_addnew'] = 'Ajouter uniquement les nouveaux, ignorer les catégories existantes';
$string['ccoptype_addupdate'] = 'Ajouter les nouveaux et mettre à jour les catégories existantes';
$string['ccoptype_update'] = 'Mettre à jour uniquement les catégories existantes';

$string['ccpasswordcron'] = 'Généré par la tâche cron';
$string['ccpasswordnew'] = 'Mot de passe du nouveau cours';
$string['ccpasswordold'] = 'Mot de passe du cours existant';

$string['ccstandardnames'] = 'Standardiser les noms';

$string['ccupdateall'] = 'Remplacer par le fichier et les valeurs par défaut';
$string['ccupdatefromfile'] = 'Remplacer par le fichier';
$string['ccupdatemissing'] = 'Compléter les valeurs manquantes avec le fichier et les valeurs par défaut';
$string['ccupdatetype'] = 'Détails des catégories existantes';

$string['coursecategoriescreated'] = 'Catégories de cours créées';
$string['coursecategoriesdeleted'] = 'Catégories de cours supprimées';
$string['coursecategoriesrenamed'] = 'Catégories de cours renommées';
$string['coursecategoriesskipped'] = 'Catégories de cours ignorées';
$string['coursecategoriesupdated'] = 'Catégories de cours mises à jour';

$string['coursecategoryavailability'] = 'Disponibilité des catégories de cours';
$string['coursecategoryavailability_help'] = 'Définit si les catégories sont visibles ou masquées par défaut';

$string['coursecategoryavailable'] = 'Catégorie visible';
$string['coursecategoryavailablenot'] = 'Catégorie masquée';

$string['coursecategorydeleted'] = 'Catégorie de cours supprimée';

$string['coursecategorynotadded'] = 'Catégorie de cours non ajoutée - existe déjà';
$string['coursecategorynotaddederror'] = 'Catégorie de cours non ajoutée - erreur';

$string['coursecategorynotdeletedadmin'] = 'Catégorie de cours non supprimée - pas d’accès administrateur';
$string['coursecategorynotdeletederror'] = 'Catégorie de cours non supprimée - erreur';
$string['coursecategorynotdeletedmissing'] = 'Catégorie de cours non supprimée - introuvable';
$string['coursecategorynotdeletedoff'] = 'Catégorie de cours non supprimée - suppression désactivée';

$string['coursecategorynotrenamedadmin'] = 'Catégorie de cours non renommée - pas d’administration';
$string['coursecategorynotrenamedexists'] = 'Catégorie de cours non renommée - la destination existe déjà';
$string['coursecategorynotrenamedmissing'] = 'Catégorie de cours non renommée - source introuvable';
$string['coursecategorynotrenamedoff'] = 'Catégorie de cours non renommée - renommage désactivé';

$string['coursecategorynotupdatedadmin'] = 'Catégorie de cours non mise à jour - pas d’administration';
$string['coursecategorynotupdatederror'] = 'Catégorie de cours non mise à jour - erreur';
$string['coursecategorynotupdatednotexists'] = 'Catégorie de cours non mise à jour - n’existe pas';

$string['coursecategoryrenamed'] = 'Catégorie de cours renommée';
$string['coursecategoryupdated'] = 'Catégorie de cours mise à jour';
$string['coursecategoryuptodate'] = 'Catégorie de cours à jour';

$string['coursetemplatename'] = 'Nom du modèle de cours';
$string['coursetemplatename_help'] = 'Sélectionnez un cours existant à utiliser comme modèle pour la création de toutes les catégories de cours';

$string['csvdelimiter'] = 'Délimiteur CSV';

$string['defaultvalues'] = 'Valeurs par défaut';

$string['deleteerrors'] = 'Erreurs de suppression';

$string['encoding'] = 'Encodage';

$string['errors'] = 'Erreurs';

$string['idnumbernotunique'] = 'L’identifiant n’est pas unique';

$string['incorrecttemplatefile'] = 'Fichier modèle introuvable';
$string['invalidbackupfile'] = 'Fichier de sauvegarde invalide';

$string['invalidvalue'] = 'Valeur invalide pour le champ {$a}';

$string['missingtemplate'] = 'Modèle introuvable';

$string['namecoursecategory'] = 'Nom';
$string['namecoursecategory_help'] = 'Le nom de la catégorie est affiché dans la navigation. Vous pouvez utiliser une syntaxe de modèle (%f = fullname, %i = idnumber) ou saisir une valeur initiale incrémentée.';

$string['newcoursecategory'] = 'Catégorie de cours ajoutée';

$string['nochanges'] = 'Aucun changement';

$string['oldnamecoursecategory'] = 'Ancien nom';

$string['pluginname'] = 'Import des catégories de cours';

$string['renameerrors'] = 'Erreurs de renommage';

$string['requiredtemplate'] = 'Obligatoire. Vous pouvez utiliser une syntaxe de modèle (%l = lastname, %f = firstname, %u = coursename).';

$string['rowpreviewnum'] = 'Aperçu des lignes';

$string['templatefile'] = 'Fichier de modèle';

$string['uploadcoursecategories'] = 'Importer des catégories de cours';
$string['uploadcoursecategoriespreview'] = 'Aperçu de l’import des catégories de cours';
$string['uploadcoursecategoriesresult'] = 'Résultats de l’import des catégories de cours';

$string['uploadcoursecategories_help'] = 'Les cours peuvent être importés via un fichier texte. Chaque ligne correspond à un enregistrement.';

$string['uploadpictures'] = 'Importer des images de cours';
$string['uploadpictures_help'] = 'Les images des cours peuvent être importées sous forme d’archive ZIP.';

$string['uploadpicture_badcoursefield'] = 'L’attribut de cours spécifié est invalide';
$string['uploadpicture_cannotmovezip'] = 'Impossible de déplacer le fichier ZIP';
$string['uploadpicture_cannotprocessdir'] = 'Impossible de traiter les fichiers';
$string['uploadpicture_cannotsave'] = 'Impossible d’enregistrer l’image pour le cours {$a}';
$string['uploadpicture_cannotunzip'] = 'Impossible de décompresser le fichier';
$string['uploadpicture_coursefield'] = 'Attribut de cours à utiliser pour associer les images :';

$string['uploadpicture_coursenotfound'] = 'Cours non trouvé ({$a->coursefield} = {$a->coursevalue})';
$string['uploadpicture_courseskipped'] = 'Cours ignoré {$a} (image déjà existante)';
$string['uploadpicture_courseupdated'] = 'Image mise à jour pour le cours {$a}';

$string['uploadpicture_invalidfilename'] = 'Nom de fichier invalide {$a}';
$string['uploadpicture_overwrite'] = 'Remplacer les images existantes des cours ?';