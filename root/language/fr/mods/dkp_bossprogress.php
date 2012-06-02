<?php
/**
*
* dkp_bossprogress.php[French]
*
* @package language
* @version $Id: $
* @copyright (c) 2011 phpBB Group
* @author 2011-06-05 - Maël Soucaze
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'GENERAL'	=> 'Paramètres générals',
	'HEADERTYPE'	=> 'Type de la barre d’avancement ?',
	'OLDPHOTO'	=> 'Photo Sepia',
	'BLUE'	=> 'Photo Bleue',
	'BPSTYLE'	=> 'Style: ',
	'BP_STYLE_BP'	=> 'Progrès par défaut',
	'BP_STYLE_BPS'	=> 'Progrès simple',
	'BP_STYLE_RP2R'	=> 'Progrès sur 2 lignes',
	'BP_STYLE_RP3R'	=> 'Progrès sur 3 lignes',
	'SHOWZONEPROGRESS'	=> 'Afficher barre d’avancement ?',
	'HIDENEWZONE'	=> 'Ne pas montrer une zone non visitée?',
	'HIDENEWBOSS'	=> 'Ne pas montrer des Boss non vaincus ?',
	'SHOWZONE'	=> 'Montrer: ',
	'SHOWZONES'	=> 'Montrer Zones',
	'RP_ZONE'	=> 'Configuration de Zone',
	'RP_ZONE_EXPLAIN'	=> 'Ici vous pouvez configurer les Zones, avec leur photo, style d’affichage, si une zone est affichée avec une barre d’avancement, si des zones non visitées seront montrées. <br /> Dans la liste, vous pouvez saisir le nom de la zone, le nom de l’image, l’id sur le web. En cliquant sur la roue verte, vous pouvez visualiser les images et mettre plus d’informations<br />Pour supprimer, Appuyez la croix rouge. ceci supprime aussi les boss liés. <br />Pour ajouter une zone, cliquez le bouton Ajouter en bas.  ',
	'RP_ZONE_ADD_EXPLAIN'	=> 'Ceci vous permet d’ajouter une zone.',
	'RP_ZONEDEL'	=> 'Zone Supprimée',
	'ZONE_NAME'	=> 'Nom de Zone',
	'ZONE_NAME_EXPLAIN'	=> 'Choisissez un nom de zone',
	'ZONE_NAME_SHORT'	=> 'Nom raccourci',
	'ZONE_NAME_SHORT_EXPLAIN'	=> 'le nom raccourci de la Zone',
	'ZONE_IMAGENAME'	=> 'Nom de l’image',
	'XZONE_IMAGENAME_EXPLAIN'	=> 'l’image en couleur, sans extension. le fichier doit exister dans le repertoire /images/bossprogress/%s/zones/normal',
	'ZONE_WEBID'	=> 'Web id',
	'ZONE_WEBLINK'	=> 'Web link',
	'ZONE_WEBID_EXPLAIN'	=> 'le id wowhead ou allakhazam ou autre id web. utilisé pour construire le lien.',
	'ZONE_SEQUENCE'	=> 'Ordre des Zones',
	'ZONE_SEQUENCE_EXPLAIN'	=> 'Choisir le nom de la zone après laquelle cette zone est placée',
	'ZONE_COMPLETED'	=> 'Zone Vaincue',
	'ZONE_COMPLETED_EXPLAIN'	=> 'Cochez si vous avez vaincu cette zone.',
	'ZONE_COMPLETEDATE'	=> 'Date de completion',
	'ZONE_COMPLETEDATE_EXPLAIN'	=> 'Saisir la date à laquelle cette zone a été vaincue. ',
	'SHOW_ZONE'	=> 'Montrer',
	'SHOW_ZONE_EXPLAIN'	=> 'Cochez si cette zone doit être affichée sur le site.',
	'SHOW_ZONE_PORTAL'	=> 'Montrer dans le portail',
	'SHOW_ZONE_PORTAL_EXPLAIN'	=> 'Cochez si vous voulez voir cette zone dans le bloc sur le Portail. ',
	'RP_ZONEDELETCONFIRM'	=> 'Veuillez confirmer la suppression de cette zone %s. Ceci supprimme aussi les Boss rattaches à cette zone.',
	'RP_ZONEADDED'	=> 'Zone %s ajoutée avec succès',
	'RP_ZONEUPDATED'	=> 'Zone %s mise à jour avec succès. ',
	'RP_BOSS'	=> 'Configuration des Boss',
	'RP_BOSS_EXPLAIN'	=> 'Ici vous pouvez configurer le images des Boss, si il a été vaincu, et la date date de la victoire;',
	'RP_BOSS_ADD_EXPLAIN'	=> 'Ici vous pouvez editer l’mage du boss, et en ajouter ou supprimer.',
	'RP_BOSSDEL'	=> 'Boss supprimé',
	'BOSS_NAME'	=> 'Nom du Boss',
	'BOSS_NAME_EXPLAIN'	=> 'Le nom complet du Boss ',
	'BOSS_NAME_SHORT'	=> 'Raccourci',
	'BOSS_NAME_SHORT_EXPLAIN'	=> 'Nom raccourci du Boss',
	'BOSS_IMAGENAME'	=> 'nom d’image',
	'BOSS_IMAGENAME_EXPLAIN'	=> 'nom d’image en couleur, sana extension. ce fichier doit exister dans le répertoire /images/bossprogress/%s/bosses',
	'BOSS_TYPE'	=> 'type d’url',
	'BOSS_TYPE_EXPLAIN'	=> 'valeur du paramètre (npc, object, boss, ...) pour construire le url du boss chez Wowhead, etc',
	'BOSS_WEBID'	=> 'Web id',
	'BOSS_WEBID_EXPLAIN'	=> 'l’id wowhead ou allakhazam pour créer l’url',
	'BOSS_COMPLETED'	=> 'Vaincu ',
	'BOSS_COMPLETED_EXPLAIN'	=> 'Cochez si le boss est vaincu',
	'BOSS_COMPLETEDATE'	=> 'Date victoire',
	'BOSS_COMPLETEDATE_EXPLAIN'	=> 'Date à laquelle vous avez tué le Boss',
	'BOSS_SHOW'	=> 'Montrer',
	'BOSS_SHOW_EXPLAIN'	=> 'Cochez si vous voulez voir ce boss sur la page de Progrès.',
	'RP_BOSSDELETCONFIRM'	=> 'Confirmez la suppression du boss %s.',
	'RP_BOSSADDED'	=> 'boss %s a été ajouté avec succès à la zone %s.',
	'BP_BOSSEDITED'	=> 'Changements sur Boss %s sont sauvegardé.',
	'BP_BPSAVED'	=> 'Les Réglages sur la module Progrès de Boss sont sauvegardés.',
	'AION_BASEURL' => 'http://db.aion.ign.com/npc/%s', 
	'AION_ZONEURL' => 'http://db.aion.ign.com/%s',
	'EQ_BASEURL' => 'http://eqbeastiary.allakhazam.com/search.shtml?cmob=%s',
	'EQ_ZONEURL' => 'http://eqbeastiary.allakhazam.com/search.shtml?zone=%s',
	'EQ2_ZONEURL' => 'http://eq2.wikia.com/wiki/index.php/%s',
	'EQ2_BASEURL' => 'http://eq2.wikia.com/wiki/index.php/%s',	
	'DAOC_ZONEURL' => 'http://camelot.allakhazam.com/db/%s',
	'DAOC_BASEURL' => 'http://camelot.allakhazam.com/db/search.html?cmob=%s',
	'LOTRO_ZONEURL' => 'http://lotro.allakhazam.com/db/%s',
	'LOTRO_BASEURL' => 'http://lotro.allakhazam.com/db/bestiary.html?lotrmob=%s',
	'VANGUARD_BASEURL' => 'http://vg.mmodb.com/bestiary/%s.php', 
	'VANGUARD_ZONEURL' => 'http://vg.mmodb.com/zones/%s.php',
	'FFXI_BASEURL' => 'http://ffxi.allakhazam.com/db/bestiary.html?fmob=%s', 
	'FFXI_ZONEEURL' => 'http://ffxi.allakhazam.com/db/areas.html?farea=%s', 
	'WARHAMMER_BASEURL' => 'NOT AVAILABLE',
	'WARHAMMER_ZONEURL' => 'NOT AVAILABLE',
	'WOW_BASEURL' => 'http://fr.wowhead.com/?npc=%s',
	'WOW_ZONEURL' => 'http://fr.wowhead.com/?zone=%s',
	/*http://telarapedia.com/wiki*/
	'RIFT_ZONEURL' => 'http://rift.zam.com/en/zone/%s',
	'RIFT_BASEURL' => 'http://rift.zam.com/en/npc.html?riftnpc=%s',
	'SWTOR_BASEURL' => 'NOT AVAILABLE',
	'SWTOR_ZONEURL' => 'NOT AVAILABLE',
));

?>