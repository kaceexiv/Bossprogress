<?php
/**
 * dkp_bossprogress.php file [English]
 * @author Sajaki@bbdkp.com
 * @package bbDKP
 * @copyright 2009 bbdkp <http://code.google.com/p/bbdkp/>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 1.0.6
 * 
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
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
//
// Some characters you may want to copy&paste:
// ‚Äô ¬ª ‚Äú ‚Äù ‚Ä¶
//

// DKP
$lang = array_merge($lang, array(
//Boss progress
'GENERAL' => 'General settings',

'HEADERTYPE' => 'How to display the progress in the header image?',
'OLDPHOTO' => 'old photo overlay',
'BLUE' => 'Blue overlay',
'NONE' => 'No progressbar',

'BPSTYLE' => 'Style: ',
'BP_STYLE_BP'   => 'RaidProgress default',
'BP_STYLE_BPS'  => 'RaidProgress simple',
'BP_STYLE_RP2R' => 'Raidprogress 2/row',
'BP_STYLE_RP3R' => 'Raidprogress 3/row',

'SHOWZONEPROGRESS' => 'Show a zone progression bar?',
'HIDENEWZONE' => 'Hide zones with no boss kills?',
'HIDENEWBOSS' => 'Hide never killed bosses?',

'SHOWZONE' => 'Show: ',

'SHOWZONES' => 'Show Zones',
'RP_ZONE' => 'Zone configuration',
'RP_ZONE_EXPLAIN' => 'Here you can configure the Zones header photo, Boss progress style, whether a zone has a progressbar, 
or that zones without kills will be shown (overrides the "shown" column), hide bosses that were never killed.<br />In the list, you can edit the Zone name, shortname, 
Imagename (filename without extension), if the zone is completed and the completiondate. <br />To delete a Zone, this will also delete any bosses in that zone. <br />To add a Zone, click the Add button.  ' , 
'RP_ZONE_ADD_EXPLAIN' => 'Here you can add a Zone', 
'RP_ZONEDEL' => 'Zone deleted',

'ZONE_NAME' => 'Zone name', 
'ZONE_NAME_EXPLAIN' => 'Choose the zone name to which this boss belongs. ',
'ZONE_NAME_SHORT' => 'Short name',
'ZONE_NAME_SHORT_EXPLAIN' => 'The short name of the Zone',
'ZONE_IMAGENAME' => 'Imagename',
'ZONE_IMAGENAME_EXPLAIN' => 'the colour imagename, without file extension. the file has to exist in /images/bossprogress/%s/zones/normal' ,
'ZONE_WEBID' => 'Web id',
'ZONE_WEBID_EXPLAIN' => 'The wowhead or allakhazam or other id to create the url',
'ZONE_WEBLINK' => 'Web link',
'ZONE_SEQUENCE' => 'Zone sequence', 
'ZONE_SEQUENCE_EXPLAIN' => 'Choose the zone name after which this zone will be placed ',
'ZONE_COMPLETED' => 'Completed',
'ZONE_COMPLETED_EXPLAIN' => 'Check if you completed this zone',
'ZONE_COMPLETEDATE' => 'Completion date',
'ZONE_COMPLETEDATE_EXPLAIN' => 'Set the date on which this zone was completed',
'SHOW_ZONE' => 'Show',
'SHOW_ZONE_EXPLAIN' => 'Check if you want to see this zone on the progress page.',
'SHOW_ZONE_PORTAL' => 'Show on Portal',
'SHOW_ZONE_PORTAL_EXPLAIN' => 'Check if you want to see this zone on the bossprogress block on the portal.',
'RP_ZONEDELETCONFIRM' => 'Please confirm deletion of zone %s. This will also delete any bosses attached to this zone.',   
'RP_ZONEADDED' => 'Zone %s was added successfully',  
'RP_ZONEUPDATED' => 'Zone %s was updated successfully',  

'RP_BOSS' => 'Boss configuration',
'RP_BOSS_EXPLAIN' => 'Here you can configure the boss photo, select to hide bosses that
 were never killed.<br />In the list, you can edit the boss name, shortname, 
 Imagename (this must be unique), whether the boss was killed and the completiondate. ', 
'RP_BOSS_ADD_EXPLAIN' => 'Here you can add or edit a Boss.', 
'RP_BOSSDEL' => 'Boss deleted',

'BOSS_NAME' => 'Boss name', 
'BOSS_NAME_EXPLAIN' => 'The full name of the Boss', 
'BOSS_NAME_SHORT' => 'Short name',
'BOSS_NAME_SHORT_EXPLAIN' => 'The short name of the Boss',
'BOSS_IMAGENAME' => 'Imagename',
'BOSS_IMAGENAME_EXPLAIN' => 'the colour imagename, without file extension. the file has to exist in /images/bossprogress/%s/bosses',
'BOSS_TYPE' => 'The url type',
'BOSS_TYPE_EXPLAIN' => 'type the parameter value (npc, object, boss, ...) to construct the boss url',
'BOSS_WEBID' => 'Web id',
'BOSS_WEBID_EXPLAIN' => 'The wowhead or allakhazam or other id to create the url',
'BOSS_COMPLETED' => 'Killed',
'BOSS_COMPLETED_EXPLAIN' => 'Check if you killed this boss',
'BOSS_COMPLETEDATE' => 'killdate',
'BOSS_COMPLETEDATE_EXPLAIN' => 'Set the date on which this boss was killed',
'BOSS_SHOW' => 'Show',
'BOSS_SHOW_EXPLAIN' => 'Check if you want to see this boss on the Boss progress page.',
'RP_BOSSDELETCONFIRM' => 'Please confirm deletion of boss %s.',   
'RP_BOSSADDED' => 'boss %s was added successfully to zone %s.',   
'BP_BOSSEDITED' => 'Boss %s changes were saved. ', 
'BP_BPSAVED' => 'Bossprogress changes were saved. ',

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

'WOW_BASEURL' => 'http://www.wowhead.com/?npc=%s',
'WOW_ZONEURL' => 'http://www.wowhead.com/?zone=%s',

/*http://telarapedia.com/wiki*/
'RIFT_ZONEURL' => 'http://rift.zam.com/en/zone/%s',
'RIFT_BASEURL' => 'http://rift.zam.com/en/npc.html?riftnpc=%s',

'SWTOR_BASEURL' => 'NOT AVAILABLE',
'SWTOR_ZONEURL' => 'NOT AVAILABLE',

));

?>
