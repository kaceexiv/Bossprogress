<?php
/**
*
* dkp_bossprogress.php [German (Casual Honorifics)]
*
* @package language
* @version 1.0.6
* @copyright (c) 2011 phpBB Group
* @author 2011-06-05 - phpBB.de
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
	'HEADERTYPE'	=> 'Wie der Vorgang im Header bild angezeigt werden sollte.',
	'OLDPHOTO'	=> 'Überzug mit Alter Photo',
	'BLUE'	=> 'Blaues Überzug',
	'BPSTYLE'	=> 'Style: ',
	'BP_STYLE_BP'	=> 'Raidvorgang Standard',
	'BP_STYLE_BPS'	=> 'Raidvorgang Simpel',
	'BP_STYLE_RP2R'	=> 'Raidvorgang 2/reihen',
	'BP_STYLE_RP3R'	=> 'Raidvorgang 3/reihen',
	'SHOWZONEPROGRESS'	=> 'Gebietsvorgangsanzeige ?',
	'HIDENEWZONE'	=> 'Gebiete ohne Bosskills nicht zeigen ?',
	'HIDENEWBOSS'	=> 'Nie getötete Bossen nicht zeigen?',
	'SHOWZONE'	=> 'Zeige: ',
	'SHOWZONES'	=> 'Zeige Gebiete',
	'RP_ZONE'	=> 'Gebietseinstellungen',
	'RP_ZONE_EXPLAIN'	=> 'Hier kannst du Gebietsbilder verwalten, oder ob Gebietsbilder mit Vorgangsanzeige aufgeführt werden und die Art wie, oder ob Gebiete ohne Siege angezeigt werden (übersteuert "schau an" Spalte).<br />In die Liste kann geändert werden : Gebietsnamen, Kurzname, Bildname (ohne dateityp), und ob das Gebiet Komplett besiegt worden ist. <br />Gebiete können gelöscht werden, aber dies löscht auch die Bosse des Gebietes.<br />Zur Verwaltung, clicke den grünen Ring. zur Gebietszufügung, clicke den ’Hinzufügen’ Knopf. ',
	'RP_ZONE_ADD_EXPLAIN'	=> 'Hier kannst du ein Gebiet zufügen',
	'RP_ZONEDEL'	=> 'Gebiet wurde gelöscht',
	'ZONE_NAME'	=> 'Gebietsname',
	'ZONE_NAME_EXPLAIN'	=> 'Tippe der Gebietsname zudem den Boss gehört. ',
	'ZONE_NAME_SHORT'	=> 'Kurzname',
	'ZONE_NAME_SHORT_EXPLAIN'	=> 'Gebietskurzname',
	'ZONE_IMAGENAME'	=> 'Dateiname',
	'XZONE_IMAGENAME_EXPLAIN'	=> 'PNG Farbenbilddateiname, ohne dateityp. Die Datei muss existieren im Verzeichnis /images/bossprogress/%s/zones/normal',
	'ZONE_WEBID'	=> 'Web id',
	'ZONE_WEBID_EXPLAIN'	=> 'Wowhead oder Allakhazam id zum Konstruieren des URL',
	'ZONE_WEBLINK'	=> 'Web link',
	'ZONE_SEQUENCE'	=> 'Gebietsfolge',
	'ZONE_SEQUENCE_EXPLAIN'	=> 'Wähle den Gebietsnamen wonach dieses Gebiet plaziert wird.',
	'ZONE_COMPLETED'	=> 'Besiegt',
	'ZONE_COMPLETED_EXPLAIN'	=> 'Bitte Ankreuzen wenn dieses Gebiet besiegt worden ist',
	'ZONE_COMPLETEDATE'	=> 'Siegestag',
	'ZONE_COMPLETEDATE_EXPLAIN'	=> 'Wähle den Tag andem dieses Gebiet vollendet ist.',
	'SHOW_ZONE'	=> 'Show',
	'SHOW_ZONE_EXPLAIN'	=> 'Bitte ankreuzen wenn dieses Gebiet auf der Vorgangsanzeigetafel gesehen werden soll.',
	'SHOW_ZONE_PORTAL'	=> 'Zeige auf Portal',
	'SHOW_ZONE_PORTAL_EXPLAIN'	=> 'Bitte ankreuzen wenn dieses Gebiet im Bossvorgang Block erscheinen soll.',
	'RP_ZONEDELETCONFIRM'	=> 'Bitte bestätige die Löschung von Gebiet %s. Dies wird auch alle verbundenen Bosse löschen.',
	'RP_ZONEADDED'	=> 'Gebiet %s wurde erfolgreich zugefügt.',
	'RP_ZONEUPDATED'	=> 'Gebiet %s wurdenerfolgreich aktualisiert.',
	'RP_BOSS'	=> 'Boss Verwaltung',
	'RP_BOSS_EXPLAIN'	=> 'Hier kannst du Bossbilder verwalten, oder ob nie getötete Bosse versteckt bleiben.<br />In die Liste, kann geändert werde : Bossnamen, Kurznamen,   Bildernamen (müssen Unik sein), und ob den Boss besiegt worden ist und wenn. ',
	'RP_BOSS_ADD_EXPLAIN'	=> 'Hier kannst du einen Boss zufügen oder aktualisieren.',
	'RP_BOSSDEL'	=> 'Boss ist gelöscht worden',
	'BOSS_NAME'	=> 'Bossname',
	'BOSS_NAME_EXPLAIN'	=> 'Der lange Name des Bosses',
	'BOSS_NAME_SHORT'	=> 'Kurzname',
	'BOSS_NAME_SHORT_EXPLAIN'	=> 'Der kurze Name des Bosses',
	'BOSS_IMAGENAME'	=> 'Bildername',
	'BOSS_IMAGENAME_EXPLAIN'	=> 'gif Farbenbilddateiname, ohne dateityp. Die Datei muss existieren im Verzeichnis /images/bossprogress/%s/bosses',
	'BOSS_TYPE'	=> 'URL Typ',
	'BOSS_TYPE_EXPLAIN'	=> 'Parametername (npc, object, boss, ...) zum konstruieren des URL',
	'BOSS_WEBID'	=> 'Web id',
	'BOSS_WEBID_EXPLAIN'	=> 'Wowhead oder Allakhazam zum konstruieren des URL',
	'BOSS_COMPLETED'	=> 'Besiegt',
	'BOSS_COMPLETED_EXPLAIN'	=> 'Bitte ankreuzen ob dieser Boss getötet worden ist',
	'BOSS_COMPLETEDATE'	=> 'Siegestag',
	'BOSS_COMPLETEDATE_EXPLAIN'	=> 'Wähle den Tag andem dieser Boss getötet wurde.',
	'BOSS_SHOW'	=> 'Zeige an',
	'BOSS_SHOW_EXPLAIN'	=> 'Bitte ankreuzen ob dieser Boss auf der Vorgangsanzeigetafel erscheinen soll.',
	'RP_BOSSDELETCONFIRM'	=> 'Bitte bestätige die Löschung von Boss %s.',
	'RP_BOSSADDED'	=> 'Boss %s wurde erfolgreich zum Gebiet %s zugefügt',
	'BP_BOSSEDITED'	=> 'die änderungen für Boss %s wurden gespeichert. ',
	'BP_BPSAVED'	=> 'Die Bossvorgangsänderungen wurden erfolgreich gespeichert. ',
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
	'WOW_BASEURL' => 'http://de.wowhead.com/?npc=%s',
	'WOW_ZONEURL' => 'http://de.wowhead.com/?zone=%s',
	/*http://telarapedia.com/wiki*/
	'RIFT_ZONEURL' => 'http://rift.zam.com/en/zone/%s',
	'RIFT_BASEURL' => 'http://rift.zam.com/en/npc.html?riftnpc=%s',
	'SWTOR_BASEURL' => 'NOT AVAILABLE',
	'SWTOR_ZONEURL' => 'NOT AVAILABLE',
));

?>