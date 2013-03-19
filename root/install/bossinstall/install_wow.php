<?php
/**
 * bossprogress wow install data
 * @author Sajaki@betenoire
 * @package bbDkp-installer
 * @copyright (c) 2009 bbDkp <http://code.google.com/p/bbdkp/>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 1.0.7
 */

/**
 * @ignore
 */
if (! defined ( 'IN_PHPBB' ))
{
	exit ();
}

function install_wow()
{
	global $db, $table_prefix, $umil, $user;
    $sql = "select count(sequence) as installcheck from " . $table_prefix . "bbdkp_zonetable where game = 'wow'";
	$result = $db->sql_query($sql);
	$installed = ((int) $db->sql_fetchfield('installcheck') > 0) ? true: false;
	$db->sql_freeresult($result);
	if(!$installed)
	{	
		
		// zones
		unset ( $sql_ary );
		$sql_ary = array ();
		$sql_ary[] = array( 'id' => 1 , 'imagename' =>  'misc' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 2 , 'imagename' =>  'onylair' , 'game' =>  'wow' ,  'tier' =>  'T2' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 3 , 'imagename' =>  'dream' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 4 , 'imagename' =>  'zg' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '1977' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 5 , 'imagename' =>  'bwl' , 'game' =>  'wow' ,  'tier' =>  'T3' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '2677' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 6 , 'imagename' =>  'mc' , 'game' =>  'wow' ,  'tier' =>  'T1' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '2717' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 7 , 'imagename' =>  'aq20' , 'game' =>  'wow' ,  'tier' =>  'T2.5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3429' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 8 , 'imagename' =>  'aq40' , 'game' =>  'wow' ,  'tier' =>  'T2.5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3428' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 9 , 'imagename' =>  'naxx' , 'game' =>  'wow' ,  'tier' =>  'T3' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 10 , 'imagename' =>  'kara' , 'game' =>  'wow' ,  'tier' =>  'T4' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3457' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 11 , 'imagename' =>  'za' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3805' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 12 , 'imagename' =>  'gruuls' , 'game' =>  'wow' ,  'tier' =>  'T4' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3923' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 13 , 'imagename' =>  'maglair' , 'game' =>  'wow' ,  'tier' =>  'T4' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3836' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 14 , 'imagename' =>  'outdoor2' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 15 , 'imagename' =>  'serpent' , 'game' =>  'wow' ,  'tier' =>  'T5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3607' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 16 , 'imagename' =>  'eye' , 'game' =>  'wow' ,  'tier' =>  'T5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3845' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 17 , 'imagename' =>  'hyjal' , 'game' =>  'wow' ,  'tier' =>  'T6' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3606' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 18 , 'imagename' =>  'temple' , 'game' =>  'wow' ,  'tier' =>  'T6' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3959' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 19 , 'imagename' =>  'sunwell' , 'game' =>  'wow' ,  'tier' =>  'T6.5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4075' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 20 , 'imagename' =>  'naxx_10' , 'game' =>  'wow' ,  'tier' =>  'T7' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3456' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 21 , 'imagename' =>  'naxx_25' , 'game' =>  'wow' ,  'tier' =>  'T7.5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '3456' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 22 , 'imagename' =>  'vault_of_archavon_10' , 'game' =>  'wow' ,  'tier' =>  'T8' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4603' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 23 , 'imagename' =>  'vault_of_archavon_25' , 'game' =>  'wow' ,  'tier' =>  'T8' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4603' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 24 , 'imagename' =>  'obsidian_sanctum_10' , 'game' =>  'wow' ,  'tier' =>  'T7' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4493' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 25 , 'imagename' =>  'obsidian_sanctum_25' , 'game' =>  'wow' ,  'tier' =>  'T7.5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4493' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 26 , 'imagename' =>  'eye_of_eternity_10' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4500' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 27 , 'imagename' =>  'eye_of_eternity_25' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4500' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 28 , 'imagename' =>  'ulduar_10' , 'game' =>  'wow' ,  'tier' =>  'T8' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4273' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 29 , 'imagename' =>  'ulduar_25' , 'game' =>  'wow' ,  'tier' =>  'T8.5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4273' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 30 , 'imagename' =>  'trial_of_the_crusader_10' , 'game' =>  'wow' ,  'tier' =>  'T9.1' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4722' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 31 , 'imagename' =>  'trial_of_the_crusader_25' , 'game' =>  'wow' ,  'tier' =>  'T9.2' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4722' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 32 , 'imagename' =>  'trial_of_the_grand_crusader_10' , 'game' =>  'wow' ,  'tier' =>  'T9.2' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4722' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 33 , 'imagename' =>  'trial_of_the_grand_crusader_25' , 'game' =>  'wow' ,  'tier' =>  'T9.3' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4722' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 34 , 'imagename' =>  'onylair_10' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '2159' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 35 , 'imagename' =>  'onylair_25' , 'game' =>  'wow' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '2159' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 37 , 'imagename' =>  'icecrown_citadel_25' , 'game' =>  'wow' ,  'tier' =>  'T10.5' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4812' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 36 , 'imagename' =>  'icecrown_citadel_10' , 'game' =>  'wow' ,  'tier' =>  'T10' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4812' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 38 , 'imagename' =>  'rs_10' , 'game' =>  'wow' ,  'tier' =>  'T10' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4987' ,  'showzone' =>  1, 'showzoneportal' => 0);
		$sql_ary[] = array( 'id' => 39 , 'imagename' =>  'rs_25' , 'game' =>  'wow' ,  'tier' =>  'T10' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '4987' ,  'showzone' =>  1, 'showzoneportal' => 0);
		//cataclysm zones
		$sql_ary[] = array( 'id' => 40 , 'imagename' =>  'bd_10' , 'game' =>  'wow' ,  'tier' =>  'T11' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5094' ,  'showzone' =>  1, 'showzoneportal' => 1);
		$sql_ary[] = array( 'id' => 41 , 'imagename' =>  'bd_25' , 'game' =>  'wow' ,  'tier' =>  'T11' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5094' ,  'showzone' =>  1, 'showzoneportal' => 1);
		$sql_ary[] = array( 'id' => 42 , 'imagename' =>  'bot_10' , 'game' =>  'wow' ,  'tier' =>  'T11' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5334' ,  'showzone' =>  1, 'showzoneportal' => 1);
		$sql_ary[] = array( 'id' => 43 , 'imagename' =>  'bot_25' , 'game' =>  'wow' ,  'tier' =>  'T11' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5334' ,  'showzone' =>  1, 'showzoneportal' => 1);
		$sql_ary[] = array( 'id' => 44 , 'imagename' =>  'tfw_10' , 'game' =>  'wow' ,  'tier' =>  'T11' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5638' ,  'showzone' =>  1, 'showzoneportal' => 1);
		$sql_ary[] = array( 'id' => 45 , 'imagename' =>  'tfw_25' , 'game' =>  'wow' ,  'tier' =>  'T11' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5638' ,  'showzone' =>  1, 'showzoneportal' => 1);
		$db->sql_multi_insert ($table_prefix . 'bbdkp_zonetable', $sql_ary );
		
		// bosses
		unset ($sql_ary);
		$sql_ary[] = array('id' => 1 ,  'imagename' =>  'azuregos' , 'game' =>  'wow' , 'zoneid' =>  1 , 'type' =>  'npc'  , 'webid' =>  '6109' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 2 ,  'imagename' =>  'kazzak' , 'game' =>  'wow' , 'zoneid' =>  1 , 'type' =>  'npc'  , 'webid' =>  '12397' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 3 ,  'imagename' =>  'onyxia' , 'game' =>  'wow' , 'zoneid' =>  2 , 'type' =>  'npc'  , 'webid' =>  '10184' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 4 ,  'imagename' =>  'ysondre' , 'game' =>  'wow' , 'zoneid' =>  3 , 'type' =>  'npc'  , 'webid' =>  '14887' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 5 ,  'imagename' =>  'taerar' , 'game' =>  'wow' , 'zoneid' =>  3 , 'type' =>  'npc'  , 'webid' =>  '14890' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 6 ,  'imagename' =>  'emeriss' , 'game' =>  'wow' , 'zoneid' =>  3 , 'type' =>  'npc'  , 'webid' =>  '14889' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 7 ,  'imagename' =>  'lethon' , 'game' =>  'wow' , 'zoneid' =>  3 , 'type' =>  'npc'  , 'webid' =>  '14888' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 8 ,  'imagename' =>  'mandokir' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '11382' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 9 ,  'imagename' =>  'jindo' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '11380' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 10 ,  'imagename' =>  'gahzranka' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '15114' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 11 ,  'imagename' =>  'grilek' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '15082' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 12 ,  'imagename' =>  'hazzarah' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '15083' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 13 ,  'imagename' =>  'renataki' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '15084' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 14 ,  'imagename' =>  'wushoolay' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '15085' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 15 ,  'imagename' =>  'thekal' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '14509' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 16 ,  'imagename' =>  'arlokk' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '14515' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 17 ,  'imagename' =>  'jeklik' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '14517' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 18 ,  'imagename' =>  'marli' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '14510' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 19 ,  'imagename' =>  'venoxis' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '14507' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 20 ,  'imagename' =>  'hakkar' , 'game' =>  'wow' , 'zoneid' =>  4 , 'type' =>  'npc'  , 'webid' =>  '14834' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 21 ,  'imagename' =>  'razorgore' , 'game' =>  'wow' , 'zoneid' =>  5 , 'type' =>  'npc'  , 'webid' =>  '12435' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 22 ,  'imagename' =>  'vaelastrasz' , 'game' =>  'wow' , 'zoneid' =>  5 , 'type' =>  'npc'  , 'webid' =>  '13020' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 23 ,  'imagename' =>  'lashlayer' , 'game' =>  'wow' , 'zoneid' =>  5 , 'type' =>  'npc'  , 'webid' =>  '12017' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 24 ,  'imagename' =>  'firemaw' , 'game' =>  'wow' , 'zoneid' =>  5 , 'type' =>  'npc'  , 'webid' =>  '11981' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 25 ,  'imagename' =>  'ebonroc' , 'game' =>  'wow' , 'zoneid' =>  5 , 'type' =>  'npc'  , 'webid' =>  '14601' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 26 ,  'imagename' =>  'flamegor' , 'game' =>  'wow' , 'zoneid' =>  5 , 'type' =>  'npc'  , 'webid' =>  '11983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 27 ,  'imagename' =>  'chromaggus' , 'game' =>  'wow' , 'zoneid' =>  5 , 'type' =>  'npc'  , 'webid' =>  '14020' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 28 ,  'imagename' =>  'nefarian' , 'game' =>  'wow' , 'zoneid' =>  5 , 'type' =>  'npc'  , 'webid' =>  '11583' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 29 ,  'imagename' =>  'lucifron' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '12118' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 30 ,  'imagename' =>  'magmadar' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '11982' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 31 ,  'imagename' =>  'gehennas' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '12259' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 32 ,  'imagename' =>  'garr' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '12057' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 33 ,  'imagename' =>  'geddon' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '12056' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 34 ,  'imagename' =>  'shazzrah' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '12264' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 35 ,  'imagename' =>  'sulfuron' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '12098' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 36 ,  'imagename' =>  'golemagg' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '11988' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 37 ,  'imagename' =>  'majordomo' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '12018' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 38 ,  'imagename' =>  'ragnaros' , 'game' =>  'wow' , 'zoneid' =>  6 , 'type' =>  'npc'  , 'webid' =>  '11502' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 39 ,  'imagename' =>  'kurinnaxx' , 'game' =>  'wow' , 'zoneid' =>  7 , 'type' =>  'npc'  , 'webid' =>  '15348' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 40 ,  'imagename' =>  'rajaxx' , 'game' =>  'wow' , 'zoneid' =>  7 , 'type' =>  'npc'  , 'webid' =>  '15341' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 41 ,  'imagename' =>  'ayamiss' , 'game' =>  'wow' , 'zoneid' =>  7 , 'type' =>  'npc'  , 'webid' =>  '15369' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 42 ,  'imagename' =>  'buru' , 'game' =>  'wow' , 'zoneid' =>  7 , 'type' =>  'npc'  , 'webid' =>  '15370' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 43 ,  'imagename' =>  'moam' , 'game' =>  'wow' , 'zoneid' =>  7 , 'type' =>  'npc'  , 'webid' =>  '15340' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 44 ,  'imagename' =>  'ossirian' , 'game' =>  'wow' , 'zoneid' =>  7 , 'type' =>  'npc'  , 'webid' =>  '15339' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 45 ,  'imagename' =>  'skeram' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15263' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 46 ,  'imagename' =>  'kri' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15511' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 47 ,  'imagename' =>  'yauj' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15543' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 48 ,  'imagename' =>  'vem' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15544' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 49 ,  'imagename' =>  'sartura' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15516' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 50 ,  'imagename' =>  'fankriss' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15510' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 51 ,  'imagename' =>  'huhuran' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15509' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 52 ,  'imagename' =>  'viscidus' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15299' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 53 ,  'imagename' =>  'veknilash' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15275' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 54 ,  'imagename' =>  'veklor' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15276' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 55 ,  'imagename' =>  'ouro' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15517' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 56 ,  'imagename' =>  'cthun' , 'game' =>  'wow' , 'zoneid' =>  8 , 'type' =>  'npc'  , 'webid' =>  '15727' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 57 ,  'imagename' =>  'anubrekhan' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15956' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 58 ,  'imagename' =>  'faerlina' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15953' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 59 ,  'imagename' =>  'maexxna' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15952' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 60 ,  'imagename' =>  'noth' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15954' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 61 ,  'imagename' =>  'heigan' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15936' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 62 ,  'imagename' =>  'loatheb' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '16011' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 63 ,  'imagename' =>  'patchwerk' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '16028' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 64 ,  'imagename' =>  'grobbulus' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15931' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 65 ,  'imagename' =>  'gluth' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15932' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 66 ,  'imagename' =>  'thaddius' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15928' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 67 ,  'imagename' =>  'razuvious' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '16061' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 68 ,  'imagename' =>  'gothik' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '16060' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 69 ,  'imagename' =>  'korthazz' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '16064' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 70 ,  'imagename' =>  'blaumeux' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '16065' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 71 ,  'imagename' =>  'mograine' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '16062' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 72 ,  'imagename' =>  'zeliek' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '16063' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 73 ,  'imagename' =>  'sapphiron' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15989' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 74 ,  'imagename' =>  'kelthuzad' , 'game' =>  'wow' , 'zoneid' =>  9 , 'type' =>  'npc'  , 'webid' =>  '15990' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 75 ,  'imagename' =>  'attumen' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '16152' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 76 ,  'imagename' =>  'moroes' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '15687' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 77 ,  'imagename' =>  'maiden' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '16457' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 78 ,  'imagename' =>  'opera' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '16812' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 79 ,  'imagename' =>  'curator' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '15691' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 80 ,  'imagename' =>  'illhoof' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '15688' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 81 ,  'imagename' =>  'aran' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '16524' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 82 ,  'imagename' =>  'chess' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '17651' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 83 ,  'imagename' =>  'netherspite' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '15689' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 84 ,  'imagename' =>  'malchezaar' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '15690' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 85 ,  'imagename' =>  'nightbane' , 'game' =>  'wow' , 'zoneid' =>  10 , 'type' =>  'npc'  , 'webid' =>  '17225' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 86 ,  'imagename' =>  'nalorakk' , 'game' =>  'wow' , 'zoneid' =>  11 , 'type' =>  'npc'  , 'webid' =>  '23576' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 87 ,  'imagename' =>  'akilzon' , 'game' =>  'wow' , 'zoneid' =>  11 , 'type' =>  'npc'  , 'webid' =>  '23574' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 88 ,  'imagename' =>  'halazzi' , 'game' =>  'wow' , 'zoneid' =>  11 , 'type' =>  'npc'  , 'webid' =>  '23577' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 89 ,  'imagename' =>  'janalai' , 'game' =>  'wow' , 'zoneid' =>  11 , 'type' =>  'npc'  , 'webid' =>  '23578' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 90 ,  'imagename' =>  'malacrass' , 'game' =>  'wow' , 'zoneid' =>  11 , 'type' =>  'npc'  , 'webid' =>  '24364' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 91 ,  'imagename' =>  'zuljin' , 'game' =>  'wow' , 'zoneid' =>  11 , 'type' =>  'npc'  , 'webid' =>  '23863' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 92 ,  'imagename' =>  'maulgar' , 'game' =>  'wow' , 'zoneid' =>  12 , 'type' =>  'npc'  , 'webid' =>  '18831' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 93 ,  'imagename' =>  'gruul' , 'game' =>  'wow' , 'zoneid' =>  12 , 'type' =>  'npc'  , 'webid' =>  '19044' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 94 ,  'imagename' =>  'magtheridon' , 'game' =>  'wow' , 'zoneid' =>  13 , 'type' =>  'npc'  , 'webid' =>  '21174' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 95 ,  'imagename' =>  'doomkazzak' , 'game' =>  'wow' , 'zoneid' =>  14 , 'type' =>  'npc'  , 'webid' =>  '18728' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 96 ,  'imagename' =>  'doomwalker' , 'game' =>  'wow' , 'zoneid' =>  14 , 'type' =>  'npc'  , 'webid' =>  '17711' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 97 ,  'imagename' =>  'hydross' , 'game' =>  'wow' , 'zoneid' =>  15 , 'type' =>  'npc'  , 'webid' =>  '21932' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 98 ,  'imagename' =>  'karathress' , 'game' =>  'wow' , 'zoneid' =>  15 , 'type' =>  'npc'  , 'webid' =>  '21214' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 99 ,  'imagename' =>  'morogrim' , 'game' =>  'wow' , 'zoneid' =>  15 , 'type' =>  'npc'  , 'webid' =>  '21213' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 100 ,  'imagename' =>  'leotheras' , 'game' =>  'wow' , 'zoneid' =>  15 , 'type' =>  'npc'  , 'webid' =>  '21215' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 101 ,  'imagename' =>  'lurker' , 'game' =>  'wow' , 'zoneid' =>  15 , 'type' =>  'npc'  , 'webid' =>  '21217' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 102 ,  'imagename' =>  'vashj' , 'game' =>  'wow' , 'zoneid' =>  15 , 'type' =>  'npc'  , 'webid' =>  '21212' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 103 ,  'imagename' =>  'alar' , 'game' =>  'wow' , 'zoneid' =>  16 , 'type' =>  'npc'  , 'webid' =>  '19514' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 104 ,  'imagename' =>  'vreaver' , 'game' =>  'wow' , 'zoneid' =>  16 , 'type' =>  'npc'  , 'webid' =>  '19516' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 105 ,  'imagename' =>  'solarian' , 'game' =>  'wow' , 'zoneid' =>  16 , 'type' =>  'npc'  , 'webid' =>  '18805' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 106 ,  'imagename' =>  'kaelthas' , 'game' =>  'wow' , 'zoneid' =>  16 , 'type' =>  'npc'  , 'webid' =>  '19622' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 107 ,  'imagename' =>  'winterchill' , 'game' =>  'wow' , 'zoneid' =>  17 , 'type' =>  'npc'  , 'webid' =>  '17767' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 108 ,  'imagename' =>  'anetheron' , 'game' =>  'wow' , 'zoneid' =>  17 , 'type' =>  'npc'  , 'webid' =>  '17808' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 109 ,  'imagename' =>  'kazrogal' , 'game' =>  'wow' , 'zoneid' =>  17 , 'type' =>  'npc'  , 'webid' =>  '17888' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 110 ,  'imagename' =>  'azgalor' , 'game' =>  'wow' , 'zoneid' =>  17 , 'type' =>  'npc'  , 'webid' =>  '17842' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 111 ,  'imagename' =>  'archimonde' , 'game' =>  'wow' , 'zoneid' =>  17 , 'type' =>  'npc'  , 'webid' =>  '17968' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 112 ,  'imagename' =>  'najentus' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '22887' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 113 ,  'imagename' =>  'supremus' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '22898' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 114 ,  'imagename' =>  'akama' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '22841' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 115 ,  'imagename' =>  'gorefiend' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '22871' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 116 ,  'imagename' =>  'essence' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '23418' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 117 ,  'imagename' =>  'bloodboil' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '22948' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 118 ,  'imagename' =>  'shahraz' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '22947' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 119 ,  'imagename' =>  'council' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '23426' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 120 ,  'imagename' =>  'illidan' , 'game' =>  'wow' , 'zoneid' =>  18 , 'type' =>  'npc'  , 'webid' =>  '22917' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 121 ,  'imagename' =>  'kalecgos' , 'game' =>  'wow' , 'zoneid' =>  19 , 'type' =>  'npc'  , 'webid' =>  '24850' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 122 ,  'imagename' =>  'brutallus' , 'game' =>  'wow' , 'zoneid' =>  19 , 'type' =>  'npc'  , 'webid' =>  '24882' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 123 ,  'imagename' =>  'felmyst' , 'game' =>  'wow' , 'zoneid' =>  19 , 'type' =>  'npc'  , 'webid' =>  '25038' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 124 ,  'imagename' =>  'fetwins' , 'game' =>  'wow' , 'zoneid' =>  19 , 'type' =>  'npc'  , 'webid' =>  '25166' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 125 ,  'imagename' =>  'muru' , 'game' =>  'wow' , 'zoneid' =>  19 , 'type' =>  'npc'  , 'webid' =>  '25741' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 126 ,  'imagename' =>  'kiljaeden' , 'game' =>  'wow' , 'zoneid' =>  19 , 'type' =>  'npc'  , 'webid' =>  '25315' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 127 ,  'imagename' =>  'anubrekhan_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15956' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 128 ,  'imagename' =>  'faerlina_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15953' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 129 ,  'imagename' =>  'maexxna_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15952' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 130 ,  'imagename' =>  'noth_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15954' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 131 ,  'imagename' =>  'heigan_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15936' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 132 ,  'imagename' =>  'loatheb_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '16011' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 133 ,  'imagename' =>  'patchwerk_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '16028' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 134 ,  'imagename' =>  'grobbulus_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15931' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 135 ,  'imagename' =>  'gluth_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15932' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 136 ,  'imagename' =>  'thaddius_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15928' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 137 ,  'imagename' =>  'razuvious_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '16061' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 138 ,  'imagename' =>  'gothik_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '16060' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 139 ,  'imagename' =>  'horsemen_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '16064' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 140 ,  'imagename' =>  'sapphiron_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15989' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 141 ,  'imagename' =>  'kelthuzad_10' , 'game' =>  'wow' , 'zoneid' =>  20 , 'type' =>  'npc'  , 'webid' =>  '15990' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 142 ,  'imagename' =>  'anubrekhan_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15956' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 143 ,  'imagename' =>  'faerlina_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15953' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 144 ,  'imagename' =>  'maexxna_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15952' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 145 ,  'imagename' =>  'noth_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15954' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 146 ,  'imagename' =>  'heigan_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15936' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 147 ,  'imagename' =>  'loatheb_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '16011' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 148 ,  'imagename' =>  'patchwerk_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '16028' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 149 ,  'imagename' =>  'grobbulus_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15931' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 150 ,  'imagename' =>  'gluth_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15932' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 151 ,  'imagename' =>  'thaddius_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15928' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 152 ,  'imagename' =>  'razuvious_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '16061' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 153 ,  'imagename' =>  'gothik_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '16060' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 154 ,  'imagename' =>  'horsemen_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '16064' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 155 ,  'imagename' =>  'sapphiron_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15989' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 156 ,  'imagename' =>  'kelthuzad_25' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '15990' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 157 ,  'imagename' =>  'malygos_10' , 'game' =>  'wow' , 'zoneid' =>  21 , 'type' =>  'npc'  , 'webid' =>  '28859' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 158 ,  'imagename' =>  'archavon_10' , 'game' =>  'wow' , 'zoneid' =>  22 , 'type' =>  'npc'  , 'webid' =>  '31125' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 159 ,  'imagename' =>  'emalon_10' , 'game' =>  'wow' , 'zoneid' =>  22 , 'type' =>  'npc'  , 'webid' =>  '33993' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 160 ,  'imagename' =>  'archavon_25' , 'game' =>  'wow' , 'zoneid' =>  23 , 'type' =>  'npc'  , 'webid' =>  '31125' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 161 ,  'imagename' =>  'emalon_25' , 'game' =>  'wow' , 'zoneid' =>  23 , 'type' =>  'npc'  , 'webid' =>  '33993' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 162 ,  'imagename' =>  'sartharion_0d_10' , 'game' =>  'wow' , 'zoneid' =>  24 , 'type' =>  'npc'  , 'webid' =>  '28860' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 163 ,  'imagename' =>  'sartharion_1d_10' , 'game' =>  'wow' , 'zoneid' =>  24 , 'type' =>  'npc'  , 'webid' =>  '28860' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 164 ,  'imagename' =>  'sartharion_2d_10' , 'game' =>  'wow' , 'zoneid' =>  24 , 'type' =>  'npc'  , 'webid' =>  '28860' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 165 ,  'imagename' =>  'sartharion_3d_10' , 'game' =>  'wow' , 'zoneid' =>  24 , 'type' =>  'npc'  , 'webid' =>  '28860' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 166 ,  'imagename' =>  'sartharion_0d_25' , 'game' =>  'wow' , 'zoneid' =>  25 , 'type' =>  'npc'  , 'webid' =>  '28860' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 167 ,  'imagename' =>  'sartharion_1d_25' , 'game' =>  'wow' , 'zoneid' =>  25 , 'type' =>  'npc'  , 'webid' =>  '28860' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 168 ,  'imagename' =>  'sartharion_2d_25' , 'game' =>  'wow' , 'zoneid' =>  25 , 'type' =>  'npc'  , 'webid' =>  '28860' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 169 ,  'imagename' =>  'sartharion_3d_25' , 'game' =>  'wow' , 'zoneid' =>  25 , 'type' =>  'npc'  , 'webid' =>  '28860' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 170 ,  'imagename' =>  'malygos_25' , 'game' =>  'wow' , 'zoneid' =>  27 , 'type' =>  'npc'  , 'webid' =>  '28859' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 171 ,  'imagename' =>  'leviathan_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33113' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 172 ,  'imagename' =>  'razorscale_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33186' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 173 ,  'imagename' =>  'deconstructor_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33293' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 174 ,  'imagename' =>  'ignis_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33118' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 175 ,  'imagename' =>  'assembly_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '32867' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 176 ,  'imagename' =>  'kologarn_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '32930' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 177 ,  'imagename' =>  'auriaya_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33515' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 178 ,  'imagename' =>  'mimiron_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '32867' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 179 ,  'imagename' =>  'hodir_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33213' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 180 ,  'imagename' =>  'thorim_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33413' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 181 ,  'imagename' =>  'freya_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 182 ,  'imagename' =>  'vezax_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33271' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 183 ,  'imagename' =>  'yoggsaron_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '33288' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 184 ,  'imagename' =>  'algalon_10' , 'game' =>  'wow' , 'zoneid' =>  28 , 'type' =>  'npc'  , 'webid' =>  '32867' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 185 ,  'imagename' =>  'leviathan_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33113' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 186 ,  'imagename' =>  'razorscale_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33186' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 187 ,  'imagename' =>  'deconstructor_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33293' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 188 ,  'imagename' =>  'ignis_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33118' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 189 ,  'imagename' =>  'assembly_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '32867' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 190 ,  'imagename' =>  'kologarn_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '32930' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 191 ,  'imagename' =>  'auriaya_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33515' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 192 ,  'imagename' =>  'mimiron_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '32867' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 193 ,  'imagename' =>  'hodir_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33213' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 194 ,  'imagename' =>  'thorim_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33413' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 195 ,  'imagename' =>  'freya_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 196 ,  'imagename' =>  'vezax_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33271' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 197 ,  'imagename' =>  'yoggsaron_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '33288' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 198 ,  'imagename' =>  'algalon_25' , 'game' =>  'wow' , 'zoneid' =>  29 , 'type' =>  'npc'  , 'webid' =>  '32867' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 199 ,  'imagename' =>  'northrend_beasts_10' , 'game' =>  'wow' , 'zoneid' =>  30 , 'type' =>  'npc'  , 'webid' =>  '35470' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 200 ,  'imagename' =>  'faction_champions_10' , 'game' =>  'wow' , 'zoneid' =>  30 , 'type' =>  'object'  , 'webid' =>  '195631' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 201 ,  'imagename' =>  'lord_jaraxxus_10' , 'game' =>  'wow' , 'zoneid' =>  30 , 'type' =>  'npc'  , 'webid' =>  '34780' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 202 ,  'imagename' =>  'twin_valkyrs_10' , 'game' =>  'wow' , 'zoneid' =>  30 , 'type' =>  'npc'  , 'webid' =>  '34497' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 203 ,  'imagename' =>  'anub_arak_10' , 'game' =>  'wow' , 'zoneid' =>  30 , 'type' =>  'npc'  , 'webid' =>  '34564' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 204 ,  'imagename' =>  'northrend_beasts_25' , 'game' =>  'wow' , 'zoneid' =>  31 , 'type' =>  'npc'  , 'webid' =>  '35470' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 205 ,  'imagename' =>  'faction_champions_25' , 'game' =>  'wow' , 'zoneid' =>  31 , 'type' =>  'object'  , 'webid' =>  '195631' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 206 ,  'imagename' =>  'lord_jaraxxus_25' , 'game' =>  'wow' , 'zoneid' =>  31 , 'type' =>  'npc'  , 'webid' =>  '34780' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 207 ,  'imagename' =>  'twin_valkyrs_25' , 'game' =>  'wow' , 'zoneid' =>  31 , 'type' =>  'npc'  , 'webid' =>  '34497' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 208 ,  'imagename' =>  'anub_arak_25' , 'game' =>  'wow' , 'zoneid' =>  31 , 'type' =>  'npc'  , 'webid' =>  '34564' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 209 ,  'imagename' =>  'northrend_beasts_10_hc' , 'game' =>  'wow' , 'zoneid' =>  32 , 'type' =>  'npc'  , 'webid' =>  '35470' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 210 ,  'imagename' =>  'faction_champions_10_hc' , 'game' =>  'wow' , 'zoneid' =>  32 , 'type' =>  'object'  , 'webid' =>  '195631' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 211 ,  'imagename' =>  'lord_jaraxxus_10_hc' , 'game' =>  'wow' , 'zoneid' =>  32 , 'type' =>  'npc'  , 'webid' =>  '34780' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 212 ,  'imagename' =>  'twin_valkyrs_10_hc' , 'game' =>  'wow' , 'zoneid' =>  32 , 'type' =>  'npc'  , 'webid' =>  '34497' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 213 ,  'imagename' =>  'anub_arak_10_hc' , 'game' =>  'wow' , 'zoneid' =>  32 , 'type' =>  'npc'  , 'webid' =>  '34564' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 214 ,  'imagename' =>  'northrend_beasts_25_hc' , 'game' =>  'wow' , 'zoneid' =>  33 , 'type' =>  'npc'  , 'webid' =>  '35470' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 215 ,  'imagename' =>  'faction_champions_25_hc' , 'game' =>  'wow' , 'zoneid' =>  33 , 'type' =>  'object'  , 'webid' =>  '195631' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 216 ,  'imagename' =>  'lord_jaraxxus_25_hc' , 'game' =>  'wow' , 'zoneid' =>  33 , 'type' =>  'npc'  , 'webid' =>  '34780' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 217 ,  'imagename' =>  'twin_valkyrs_25_hc' , 'game' =>  'wow' , 'zoneid' =>  33 , 'type' =>  'npc'  , 'webid' =>  '34497' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 218 ,  'imagename' =>  'anub_arak_25_hc' , 'game' =>  'wow' , 'zoneid' =>  33 , 'type' =>  'npc'  , 'webid' =>  '34564' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 219 ,  'imagename' =>  'onyxia_10' , 'game' =>  'wow' , 'zoneid' =>  34 , 'type' =>  'npc'  , 'webid' =>  '10184' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 220 ,  'imagename' =>  'onyxia_10' , 'game' =>  'wow' , 'zoneid' =>  34 , 'type' =>  'npc'  , 'webid' =>  '10184' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 221 ,  'imagename' =>  'onyxia_25' , 'game' =>  'wow' , 'zoneid' =>  35 , 'type' =>  'npc'  , 'webid' =>  '10184' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 222 ,  'imagename' =>  'onyxia_25' , 'game' =>  'wow' , 'zoneid' =>  35 , 'type' =>  'npc'  , 'webid' =>  '10184' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 223 ,  'imagename' =>  'lord_marrowgar_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36612' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 224 ,  'imagename' =>  'lord_marrowgar_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36612' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 225 ,  'imagename' =>  'lady_deathwhisper_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36855' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 226 ,  'imagename' =>  'lady_deathwhisper_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36855' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 227 ,  'imagename' =>  'icecrown_gunship_battle_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '201873' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 228 ,  'imagename' =>  'icecrown_gunship_battle_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '201873' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 229 ,  'imagename' =>  'deathbringer_saurfang_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '37813' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 230 ,  'imagename' =>  'deathbringer_saurfang_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '37813' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 231 ,  'imagename' =>  'festergut_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36626' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 232 ,  'imagename' =>  'festergut_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36626' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 233 ,  'imagename' =>  'rotface_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36627' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 234 ,  'imagename' =>  'rotface_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36627' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 235 ,  'imagename' =>  'professor_putricide_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36678' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 236 ,  'imagename' =>  'professor_putricide_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36678' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 237 ,  'imagename' =>  'blood_princes_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '37970' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 238 ,  'imagename' =>  'blood_princes_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '37970' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 239 ,  'imagename' =>  'blood_queen_lana_thel_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '38004' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 240 ,  'imagename' =>  'blood_queen_lana_thel_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '38004' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 241 ,  'imagename' =>  'valithria_dreamwalker_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36789' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 242 ,  'imagename' =>  'valithria_dreamwalker_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '36789' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 243 ,  'imagename' =>  'sindragosa_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '37755' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 244 ,  'imagename' =>  'sindragosa_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '37755' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 245 ,  'imagename' =>  'the_lich_king_10' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '29983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 246 ,  'imagename' =>  'the_lich_king_10_hc' , 'game' =>  'wow' , 'zoneid' =>  36 , 'type' =>  'npc'  , 'webid' =>  '29983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 247 ,  'imagename' =>  'lord_marrowgar_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36612' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 248 ,  'imagename' =>  'lord_marrowgar_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36612' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 249 ,  'imagename' =>  'lady_deathwhisper_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36855' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 250 ,  'imagename' =>  'lady_deathwhisper_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36855' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 251 ,  'imagename' =>  'icecrown_gunship_battle_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '201873' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 252 ,  'imagename' =>  'icecrown_gunship_battle_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '201873' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 253 ,  'imagename' =>  'deathbringer_saurfang_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '37813' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 254 ,  'imagename' =>  'deathbringer_saurfang_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '37813' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 255 ,  'imagename' =>  'festergut_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36626' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 256 ,  'imagename' =>  'festergut_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36626' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 257 ,  'imagename' =>  'rotface_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36627' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 258 ,  'imagename' =>  'rotface_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36627' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 259 ,  'imagename' =>  'professor_putricide_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36678' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 260 ,  'imagename' =>  'professor_putricide_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36678' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 261 ,  'imagename' =>  'blood_princes_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '37970' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 262 ,  'imagename' =>  'blood_princes_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '37970' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 263 ,  'imagename' =>  'blood_queen_lana_thel_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '38004' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 264 ,  'imagename' =>  'blood_queen_lana_thel_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '38004' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 265 ,  'imagename' =>  'valithria_dreamwalker_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36789' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 266 ,  'imagename' =>  'valithria_dreamwalker_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '36789' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 267 ,  'imagename' =>  'sindragosa_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '37755' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 268 ,  'imagename' =>  'sindragosa_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '37755' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 269 ,  'imagename' =>  'the_lich_king_25' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '29983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 270 ,  'imagename' =>  'the_lich_king_25_hc' , 'game' =>  'wow' , 'zoneid' =>  37 , 'type' =>  'npc'  , 'webid' =>  '29983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 271 ,  'imagename' =>  'halion_10' , 'game' =>  'wow' , 'zoneid' =>  38 , 'type' =>  'npc'  , 'webid' =>  '39863' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 272 ,  'imagename' =>  'halion_10_hc' , 'game' =>  'wow' , 'zoneid' =>  38 , 'type' =>  'npc'  , 'webid' =>  '39863' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 273 ,  'imagename' =>  'halion_25' , 'game' =>  'wow' , 'zoneid' =>  39 , 'type' =>  'npc'  , 'webid' =>  '39863' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		$sql_ary[] = array('id' => 274 ,  'imagename' =>  'halion_25_hc' , 'game' =>  'wow' , 'zoneid' =>  39 , 'type' =>  'npc'  , 'webid' =>  '39863' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  0     );
		//cataclysm bosses
		$sql_ary[] = array('id' => 275 ,  'imagename' =>  'magmaw_10' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '41570' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 276 ,  'imagename' =>  'magmaw_10_hc' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '41570' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 277 ,  'imagename' =>  'magmaw_25' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '41570' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 278 ,  'imagename' =>  'magmaw_25_hc' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '41570' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 279 ,  'imagename' =>  'omnotron_defense_system_10' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '42179' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 280 ,  'imagename' =>  'omnotron_defense_system_10_hc' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '42179' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 281 ,  'imagename' =>  'omnotron_defense_system_25' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '42179' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 282 ,  'imagename' =>  'omnotron_defense_system_25_hc' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '42179' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 283 ,  'imagename' =>  'maloriak_10' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '41378' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 284 ,  'imagename' =>  'maloriak_10_hc' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '41378' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 285 ,  'imagename' =>  'maloriak_25' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '41378' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 286 ,  'imagename' =>  'maloriak_25_hc' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '41378' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 287 ,  'imagename' =>  'atramedes_10' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '41442' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 288 ,  'imagename' =>  'atramedes_10_hc' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '41442' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 289 ,  'imagename' =>  'atramedes_25' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '41442' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 290 ,  'imagename' =>  'atramedes_25_hc' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '41442' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 291 ,  'imagename' =>  'chimaeron_10' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '43296' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 292 ,  'imagename' =>  'chimaeron_10_hc' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '43296' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 293 ,  'imagename' =>  'chimaeron_25' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '43296' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 294 ,  'imagename' =>  'chimaeron_25_hc' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '43296' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 295 ,  'imagename' =>  'nefarian_10' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '41376' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 296 ,  'imagename' =>  'nefarian_10_hc' , 'game' =>  'wow' , 'zoneid' =>  40 , 'type' =>  'npc'  , 'webid' =>  '41376' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 297 ,  'imagename' =>  'nefarian_25' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '41376' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 298 ,  'imagename' =>  'nefarian_25_hc' , 'game' =>  'wow' , 'zoneid' =>  41 , 'type' =>  'npc'  , 'webid' =>  '41376' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 299 ,  'imagename' =>  'halfus_wyrmbreaker_10' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '44600' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 300 ,  'imagename' =>  'halfus_wyrmbreaker_10_hc' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '44600' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 301 ,  'imagename' =>  'halfus_wyrmbreaker_25' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '44600' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 302 ,  'imagename' =>  'halfus_wyrmbreaker_25_hc' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '44600' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 303 ,  'imagename' =>  'valiona_theralion_10' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '45992' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 304 ,  'imagename' =>  'valiona_theralion_10_hc' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '45992' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 305 ,  'imagename' =>  'valiona_theralion_25' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '45992' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 306 ,  'imagename' =>  'valiona_theralion_25_hc' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '45992' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 307 ,  'imagename' =>  'twilight_ascendant_council_10' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '43735' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 308 ,  'imagename' =>  'twilight_ascendant_council_10_hc' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '43735' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 309 ,  'imagename' =>  'twilight_ascendant_council_25' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '43735' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 310 ,  'imagename' =>  'twilight_ascendant_council_25_hc' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '43735' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image missing still
		$sql_ary[] = array('id' => 311 ,  'imagename' =>  'chogall_10' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '43324' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); 
		$sql_ary[] = array('id' => 312 ,  'imagename' =>  'chogall_10_hc' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '43324' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 313 ,  'imagename' =>  'chogall_25' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '43324' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 314 ,  'imagename' =>  'chogall_25_hc' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '43324' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 315 ,  'imagename' =>  'sinestra_10_hc' , 'game' =>  'wow' , 'zoneid' =>  42 , 'type' =>  'npc'  , 'webid' =>  '' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image & web ID missing still
		$sql_ary[] = array('id' => 316 ,  'imagename' =>  'sinestra_25_hc' , 'game' =>  'wow' , 'zoneid' =>  43 , 'type' =>  'npc'  , 'webid' =>  '' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     ); //image & web ID missing still
		$sql_ary[] = array('id' => 317 ,  'imagename' =>  'conclave_of_wind_10' , 'game' =>  'wow' , 'zoneid' =>  44 , 'type' =>  'npc'  , 'webid' =>  '45871' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 318 ,  'imagename' =>  'conclave_of_wind_10_hc' , 'game' =>  'wow' , 'zoneid' =>  44 , 'type' =>  'npc'  , 'webid' =>  '45871' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 319 ,  'imagename' =>  'conclave_of_wind_25' , 'game' =>  'wow' , 'zoneid' =>  45 , 'type' =>  'npc'  , 'webid' =>  '45871' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 320 ,  'imagename' =>  'conclave_of_wind_25_hc' , 'game' =>  'wow' , 'zoneid' =>  45 , 'type' =>  'npc'  , 'webid' =>  '45871' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 321 ,  'imagename' =>  'alakir_10' , 'game' =>  'wow' , 'zoneid' =>  44 , 'type' =>  'npc'  , 'webid' =>  '46753' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' => 1      );
		$sql_ary[] = array('id' => 322 ,  'imagename' =>  'alakir_10_hc' , 'game' =>  'wow' , 'zoneid' =>  44 , 'type' =>  'npc'  , 'webid' =>  '46753' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 323 ,  'imagename' =>  'alakir_25' , 'game' =>  'wow' , 'zoneid' =>  45 , 'type' =>  'npc'  , 'webid' =>  '46753' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$sql_ary[] = array('id' => 324 ,  'imagename' =>  'alakir_25_hc' , 'game' =>  'wow' , 'zoneid' =>  45 , 'type' =>  'npc'  , 'webid' =>  '46753' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' => 1      );
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_bosstable', $sql_ary );
			
		
		// language table
		unset ( $sql_ary );
		// zones
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 1, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Miscellaneous bosses' ,  'name_short' =>  'Misc' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 2, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Onyxia‘s Lair' ,  'name_short' =>  'Onyxia' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 3, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Emerald Dream' ,  'name_short' =>  'Dream' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 4, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Zul‘Gurub' ,  'name_short' =>  'ZG' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 5, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Blackwing Lair' ,  'name_short' =>  'BWL' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 6, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Molten Core' ,  'name_short' =>  'MC' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 7, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Ruins of Ahn‘Qiraj' ,  'name_short' =>  'AQ20' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 8, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Gates of Ahn‘Qiraj' ,  'name_short' =>  'AQ40' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 9, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas' ,  'name_short' =>  'Naxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 10, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Karazhan' ,  'name_short' =>  'Kara' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 11, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Zul‘Aman' ,  'name_short' =>  'ZA' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 12, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Gruul‘s Lair' ,  'name_short' =>  'GL' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 13, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Magtheridon‘s Lair' ,  'name_short' =>  'Magtheridon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 14, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Outland Outdoor Bosses' ,  'name_short' =>  'Outdoor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 15, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Serpentshrine Cavern' ,  'name_short' =>  'SC' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 16, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Eye' ,  'name_short' =>  'Eye' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 17, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Battle of Mount Hyjal' ,  'name_short' =>  'Hyjal' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 18, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Black Temple' ,  'name_short' =>  'Temple' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 19, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Sunwell Plateau' ,  'name_short' =>  'Sunwell' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 20, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas (10)' ,  'name_short' =>  'Naxx (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 21, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas (25)' ,  'name_short' =>  'Naxx (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 22, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Vault of Archavon (10)' ,  'name_short' =>  'VoA (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 23, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Vault of Archavon (25)' ,  'name_short' =>  'VoA (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 24, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Obsidian Sanctum (10)' ,  'name_short' =>  'OS (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 25, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Obsidian Sanctum (25)' ,  'name_short' =>  'OS (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 26, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Eye of Eternity (10)' ,  'name_short' =>  'EoE (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 27, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Eye of Eternity (25)' ,  'name_short' =>  'EoE (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 28, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Ulduar (10)' ,  'name_short' =>  'EoE (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 29, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Ulduar (25)' ,  'name_short' =>  '' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 30, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Trial of the Crusader (10)' ,  'name_short' =>  'ToC (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 31, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Trial of the Crusader (25)' ,  'name_short' =>  'ToC (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 32, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Trial of the Grand Crusader (10)' ,  'name_short' =>  'ToGC (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 33, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Trial of the Grand Crusader (25)' ,  'name_short' =>  'ToGC (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 34, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Onyxia‘s Lair (10)' ,  'name_short' =>  'Onyxia (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 35, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Onyxia‘s Lair (25)' ,  'name_short' =>  'Onyxia (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 37, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Icecrown Citadel (25)' ,  'name_short' =>  'ICC (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 36, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Icecrown Citadel (10)' ,  'name_short' =>  'ICC (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 38, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Ruby Sanctum (10)' ,  'name_short' =>  'RS (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 39, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Ruby Sanctum (25)' ,  'name_short' =>  'RS (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 40, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Blackwing Descent (10)' ,  'name_short' =>  'BD (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 41, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Blackwing Descent (25)' ,  'name_short' =>  'BD (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 42, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Bastion of Twilight (10)' ,  'name_short' =>  'BoT (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 43, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'The Bastion of Twilight (25)' ,  'name_short' =>  'BoT (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 44, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Throne of the Four Winds (10)' ,  'name_short' =>  'TotFW (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 45, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Throne of the Four Winds (25)' ,  'name_short' =>  'TotFW (25)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 1, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Azuregos' ,  'name_short' =>  'Azuregos' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 2, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Kazzak' ,  'name_short' =>  'Kazzak' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 3, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Onyxia' ,  'name_short' =>  'Onyxia' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 4, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ysondre' ,  'name_short' =>  'Ysondre' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 5, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Taerar' ,  'name_short' =>  'Taerar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 6, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Emeriss' ,  'name_short' =>  'Emeriss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 7, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lethon' ,  'name_short' =>  'Lethon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 8, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Bloodlord Mandokir' ,  'name_short' =>  'Mandokir' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 9, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Jin’do the Hexxer' ,  'name_short' =>  'Jin’do' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 10, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gahz’ranka' ,  'name_short' =>  'Gahz’ranka' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 11, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gri’lek' ,  'name_short' =>  'Gri’lek' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 12, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hazza’rah' ,  'name_short' =>  'Hazza’rah' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 13, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Renataki' ,  'name_short' =>  'Renataki' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 14, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Wushoolay' ,  'name_short' =>  'Wushoolay' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 15, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'High Priest Thekal' ,  'name_short' =>  'Thekal' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 16, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'High Priestess Arlokk' ,  'name_short' =>  'Arlokk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 17, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'High Priestess Jeklik' ,  'name_short' =>  'Jeklik' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 18, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'High Priestess Mar’li' ,  'name_short' =>  'Mar’li' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 19, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'High Priest Venoxis' ,  'name_short' =>  'Venoxis' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 20, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hakkar' ,  'name_short' =>  'Hakkar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 21, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Razorgore the Untamed' ,  'name_short' =>  'Razorgore' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 22, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Vaelastrasz the Corrupt' ,  'name_short' =>  'Vaelastrasz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 23, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Broodlord Lashlayer' ,  'name_short' =>  'Lashlayer' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 24, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Firemaw' ,  'name_short' =>  'Firemaw' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 25, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ebonroc' ,  'name_short' =>  'Ebonroc' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 26, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Flamegor' ,  'name_short' =>  'Flamegor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 27, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Chromaggus' ,  'name_short' =>  'Chromaggus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 28, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Nefarian' ,  'name_short' =>  'Nefarian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 29, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lucifron' ,  'name_short' =>  'Lucifron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 30, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Magmadar' ,  'name_short' =>  'Magmadar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 31, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gehennas' ,  'name_short' =>  'Gehennas' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 32, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Garr' ,  'name_short' =>  'Garr' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 33, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Baron Geddon' ,  'name_short' =>  'Geddon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 34, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Shazzrah' ,  'name_short' =>  'Shazzrah' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 35, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sulfuron Harbringer' ,  'name_short' =>  'Sulfuron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 36, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Golemagg the Incinerator' ,  'name_short' =>  'Golemagg' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 37, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Majordomo Executus' ,  'name_short' =>  'Majordomo' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 38, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ragnaros' ,  'name_short' =>  'Ragnaros' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 39, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kurinnaxx' ,  'name_short' =>  'Kurinnaxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 40, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'General Rajaxx' ,  'name_short' =>  'Rajaxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 41, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ayamiss the Hunter' ,  'name_short' =>  'Ayamiss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 42, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Buru the Gorger' ,  'name_short' =>  'Buru' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 43, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Moam' ,  'name_short' =>  'Moam' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 44, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ossirian the Unscarred' ,  'name_short' =>  'Ossirian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 45, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Prophet Skeram' ,  'name_short' =>  'Skeram' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 46, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Kri' ,  'name_short' =>  'Lord Kri' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 47, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Princess Yauj' ,  'name_short' =>  'Princess Yauj' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 48, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Vem' ,  'name_short' =>  'Vem' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 49, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Battleguard Sartura' ,  'name_short' =>  'Sartura' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 50, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Fankriss the Unyielding' ,  'name_short' =>  'Fankriss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 51, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Princess Huhuran' ,  'name_short' =>  'Huhuran' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 52, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Viscidus' ,  'name_short' =>  'Viscidus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 53, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Emperor Vek’nilash' ,  'name_short' =>  'Vek’nilash' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 54, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Emperor Vek’lor' ,  'name_short' =>  'Vek’lor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 55, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ouro' ,  'name_short' =>  'Ouro' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 56, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'C’Thun' ,  'name_short' =>  'C’Thun' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 57, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan' ,  'name_short' =>  'Anub’Rekhan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 58, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grand Widow Faerlina' ,  'name_short' =>  'Faerlina' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 59, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Maexxna' ,  'name_short' =>  'Maexxna' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 60, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Noth the Plaguebringer' ,  'name_short' =>  'Noth' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 61, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Heigan the Unclean' ,  'name_short' =>  'Heigan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 62, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Loatheb' ,  'name_short' =>  'Loatheb' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 63, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Patchwerk' ,  'name_short' =>  'Patchwerk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 64, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus' ,  'name_short' =>  'Grobbulus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 65, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gluth' ,  'name_short' =>  'Gluth' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 66, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Thaddius' ,  'name_short' =>  'Thaddius' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 67, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Instructor Razuvious' ,  'name_short' =>  'Razuvious' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 68, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gothik the Harvester' ,  'name_short' =>  'Gothik' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 69, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Thane Korth’azz' ,  'name_short' =>  'Korth’azz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 70, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lady Blaumeux' ,  'name_short' =>  'Blaumeux' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 71, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Highlord Mograine' ,  'name_short' =>  'Mograine' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 72, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sir Zeliek' ,  'name_short' =>  'Sir Zeliek' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 73, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sapphiron' ,  'name_short' =>  'Sapphiron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 74, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad' ,  'name_short' =>  'Kel’Thuzad' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 75, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Attumen the Huntsman' ,  'name_short' =>  'Attumen' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 76, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Moroes' ,  'name_short' =>  'Moroes' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 77, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Maiden of Virtue' ,  'name_short' =>  'Maiden' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 78, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Opera Event' ,  'name_short' =>  'Opera' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 79, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Curator' ,  'name_short' =>  'Curator' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 80, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Terestian Illhoof' ,  'name_short' =>  'Terestian Illhoof' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 81, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Shade of Aran' ,  'name_short' =>  'Aran' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 82, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Chess Event' ,  'name_short' =>  'Chess' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 83, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Netherspite' ,  'name_short' =>  'Netherspite' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 84, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Prince Malchezaar' ,  'name_short' =>  'Malchezaar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 85, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Nightbane' ,  'name_short' =>  'Nightbane' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 86, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Nalorakk, Bear Avatar' ,  'name_short' =>  'Nalorakk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 87, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Akil’Zon, Eagle Avatar' ,  'name_short' =>  'Akil’Zon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 88, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halazzi, Lynx Avatar' ,  'name_short' =>  'Halazzi' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 89, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Jan’Alai, Dragonhawk Avatar' ,  'name_short' =>  'Jan’Alai' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 90, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hex Lord Malacrass' ,  'name_short' =>  'Malacrass' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 91, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Zul’Jin' ,  'name_short' =>  'Zul’Jin' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 92, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'High King Maulgar' ,  'name_short' =>  'Maulgar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 93, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gruul the Dragonkiller' ,  'name_short' =>  'Gruul' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 94, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Magtheridon' ,  'name_short' =>  'Magtheridon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 95, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Doom Lord Kazzak' ,  'name_short' =>  'Doom Kazzak' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 96, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Doomwalker' ,  'name_short' =>  'Doomwalker' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 97, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hydross the Unstable' ,  'name_short' =>  'Hydross' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 98, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Fathom-Lord Karathress' ,  'name_short' =>  'Karathress' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 99, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Morogrim Tidewalker' ,  'name_short' =>  'Morogrim' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 100, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Leotheras the Blind' ,  'name_short' =>  'Leotheras' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 101, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Lurker Below' ,  'name_short' =>  'Lurker' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 102, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lady Vashj' ,  'name_short' =>  'Vashj' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 103, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Al’Ar the Phoenix God' ,  'name_short' =>  'Al’Ar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 104, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Void Reaver' ,  'name_short' =>  'Reaver' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 105, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'High Astromancer Solarian' ,  'name_short' =>  'Solarian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 106, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kael’thas Sunstrider' ,  'name_short' =>  'Kaelthas' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 107, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Rage Winterchill' ,  'name_short' =>  'Winterchill' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 108, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Anetheron' ,  'name_short' =>  'Anetheron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 109, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kaz’rogal' ,  'name_short' =>  'Kaz’rogal' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 110, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Azgalor' ,  'name_short' =>  'Azgalor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 111, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Archimonde' ,  'name_short' =>  'Archimonde' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 112, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'High Warlord Naj’entus' ,  'name_short' =>  'Naj’entus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 113, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Supremus' ,  'name_short' =>  'Supremus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 114, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Akama' ,  'name_short' =>  'Akama' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 115, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Teron Gorefiend' ,  'name_short' =>  'Gorefiend' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 116, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Essence of Souls' ,  'name_short' =>  'Essence' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 117, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gurtogg Bloodboil' ,  'name_short' =>  'Bloodboil' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 118, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Mother Shahraz' ,  'name_short' =>  'Shahraz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 119, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Illidari Council' ,  'name_short' =>  'Council' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 120, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Illidan Stormrage' ,  'name_short' =>  'Illidan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 121, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kalecgos' ,  'name_short' =>  'Kalecgos' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 122, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Brutallus' ,  'name_short' =>  'Brutallus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 123, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Felmyst' ,  'name_short' =>  'Felmyst' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 124, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Alythess & Sacrolash' ,  'name_short' =>  'Twins' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 125, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'M’uru' ,  'name_short' =>  'M’uru' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 126, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kil’jaeden' ,  'name_short' =>  'Kil’jaeden' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 127, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan (10)' ,  'name_short' =>  'Anub’Rekhan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 128, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grand Widow Faerlina (10)' ,  'name_short' =>  'Faerlina (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 129, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Maexxna (10)' ,  'name_short' =>  'Maexxna (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 130, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Noth the Plaguebringer (10)' ,  'name_short' =>  'Noth (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 131, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Heigan the Unclean (10)' ,  'name_short' =>  'Heigan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 132, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Loatheb (10)' ,  'name_short' =>  'Loatheb (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 133, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Patchwerk (10)' ,  'name_short' =>  'Patchwerk (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 134, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus (10)' ,  'name_short' =>  'Grobbulus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 135, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gluth (10)' ,  'name_short' =>  'Gluth (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 136, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Thaddius (10)' ,  'name_short' =>  'Thaddius (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 137, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Instructor Razuvious (10)' ,  'name_short' =>  'Razuvious (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 138, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gothik the Harvester (10)' ,  'name_short' =>  'Gothik (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 139, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Four Horsemen (10)' ,  'name_short' =>  'Korth’azz (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 140, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sapphiron (10)' ,  'name_short' =>  'Sapphiron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 141, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad (10)' ,  'name_short' =>  'Kel’Thuzad (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 142, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan (25)' ,  'name_short' =>  'Anub’Rekhan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 143, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grand Widow Faerlina (25)' ,  'name_short' =>  'Faerlina (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 144, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Maexxna (25)' ,  'name_short' =>  'Maexxna (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 145, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Noth the Plaguebringer (25)' ,  'name_short' =>  'Noth (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 146, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Heigan the Unclean (25)' ,  'name_short' =>  'Heigan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 147, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Loatheb (25)' ,  'name_short' =>  'Loatheb (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 148, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Patchwerk (25)' ,  'name_short' =>  'Patchwerk (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 149, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus (25)' ,  'name_short' =>  'Grobbulus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 150, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gluth (25)' ,  'name_short' =>  'Gluth (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 151, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Thaddius (25)' ,  'name_short' =>  'Thaddius (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 152, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Instructor Razuvious (25)' ,  'name_short' =>  'Razuvious (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 153, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gothik the Harvester (25)' ,  'name_short' =>  'Gothik (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 154, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Four Horsemen (25)' ,  'name_short' =>  'Korth’azz (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 155, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sapphiron (25)' ,  'name_short' =>  'Sapphiron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 156, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad (25)' ,  'name_short' =>  'Kel’Thuzad (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 157, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Malygos (10)' ,  'name_short' =>  'Malygos (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 158, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Archavon the Stone Watcher (10)' ,  'name_short' =>  'Archavon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 159, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Emalon the Storm Watcher (10)' ,  'name_short' =>  'Emalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 160, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Archavon the Stone Watcher (25)' ,  'name_short' =>  'Archavon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 161, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Emalon the Storm Watcher (25)' ,  'name_short' =>  'Emalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 162, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sartharion the Onyx Guardian No dragons (10)' ,  'name_short' =>  'Sartarion 0d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 163, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sartharion the Onyx Guardian One dragon (10)' ,  'name_short' =>  'Sartarion 1d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 164, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sartharion the Onyx Guardian Two dragons (10)' ,  'name_short' =>  'Sartarion 2d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 165, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sartharion the Onyx Guardian Three dragons (10)' ,  'name_short' =>  'Sartarion 3d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 166, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sartharion the Onyx Guardian No dragons (25)' ,  'name_short' =>  'Sartarion 0d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 167, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sartharion the Onyx Guardian One dragon (25)' ,  'name_short' =>  'Sartarion 1d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 168, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sartharion the Onyx Guardian Two dragons (25)' ,  'name_short' =>  'Sartarion 2d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 169, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sartharion the Onyx Guardian Three dragons (25)' ,  'name_short' =>  'Sartarion 3d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 170, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Malygos (25)' ,  'name_short' =>  'Malygos (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 171, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Flame Leviathan (10)' ,  'name_short' =>  'Leviathan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 172, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Razorscale (10)' ,  'name_short' =>  'Razorscale (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 173, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'XT-002 Deconstructor (10)' ,  'name_short' =>  'Deconstructor (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 174, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ignis the Furnace Master (10)' ,  'name_short' =>  'Ignis (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 175, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Assembly of Iron (10)' ,  'name_short' =>  'Assembly (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 176, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kologarn (10)' ,  'name_short' =>  'Kologarn (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 177, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Auriaya (10)' ,  'name_short' =>  'Auriaya (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 178, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Mimiron (10)' ,  'name_short' =>  'Mimiron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 179, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hodir (10)' ,  'name_short' =>  'Hodir (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 180, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Thorim (10)' ,  'name_short' =>  'Thorim (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 181, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Freya (10)' ,  'name_short' =>  'Freya (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 182, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'General Vezax (10)' ,  'name_short' =>  'Vezax (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 183, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Yogg-Saron (10)' ,  'name_short' =>  'Yogg-Saron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 184, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Algalon (10)' ,  'name_short' =>  'Algalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 185, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Flame Leviathan (25)' ,  'name_short' =>  'Leviathan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 186, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Razorscale (25)' ,  'name_short' =>  'Razorscale (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 187, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'XT-002 Deconstructor (25)' ,  'name_short' =>  'Deconstructor (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 188, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ignis the Furnace Master (25)' ,  'name_short' =>  'Ignis (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 189, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Assembly of Iron (25)' ,  'name_short' =>  'Assembly (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 190, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Kologarn (25)' ,  'name_short' =>  'Kologarn (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 191, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Auriaya (25)' ,  'name_short' =>  'Auriaya (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 192, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Mimiron (25)' ,  'name_short' =>  'Mimiron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 193, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hodir (25)' ,  'name_short' =>  'Hodir (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 194, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Thorim (25)' ,  'name_short' =>  'Thorim (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 195, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Freya (25)' ,  'name_short' =>  'Freya (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 196, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'General Vezax (25)' ,  'name_short' =>  'Vezax (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 197, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Yogg-Saron (25)' ,  'name_short' =>  'Yogg-Saron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 198, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Algalon (25)' ,  'name_short' =>  'Algalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 199, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Northrend Beasts (10)' ,  'name_short' =>  'Beasts (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 200, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Faction Champions (10)' ,  'name_short' =>  'Champions (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 201, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Jaraxxus (10)' ,  'name_short' =>  'Jaraxxus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 202, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twin Valkyrs (10)' ,  'name_short' =>  'Valkyrs (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 203, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (10)' ,  'name_short' =>  'Anub (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 204, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Northrend Beasts (25)' ,  'name_short' =>  'Beasts (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 205, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Faction Champions (25)' ,  'name_short' =>  'Champions (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 206, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Jaraxxus (25)' ,  'name_short' =>  'Jaraxxus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 207, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twin Valkyrs (25)' ,  'name_short' =>  'Valkyrs (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 208, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (25)' ,  'name_short' =>  'Anub (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 209, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Northrend Beasts (10)' ,  'name_short' =>  'Beasts (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 210, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Faction Champions (10)' ,  'name_short' =>  'Champions (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 211, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Jaraxxus (10)' ,  'name_short' =>  'Jaraxxus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 212, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twin Valkyrs (10)' ,  'name_short' =>  'Valkyrs (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 213, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (10)' ,  'name_short' =>  'Anub (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 214, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Northrend Beasts (25)' ,  'name_short' =>  'Beasts (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 215, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Faction Champions (25)' ,  'name_short' =>  'Champions (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 216, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Jaraxxus (25)' ,  'name_short' =>  'Jaraxxus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 217, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twin Valkyrs (25)' ,  'name_short' =>  'Valkyrs (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 218, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (25)' ,  'name_short' =>  'Anub (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 219, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (10)' ,  'name_short' =>  'Onyxia (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 220, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (10)' ,  'name_short' =>  'Onyxia (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 221, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (25)' ,  'name_short' =>  'Onyxia (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 222, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (25)' ,  'name_short' =>  'Onyxia (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 223, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Marrowgar (10)' ,  'name_short' =>  'Marrowgar (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 224, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Marrowgar (10HM)' ,  'name_short' =>  'Marrowgar (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 225, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lady Deathwhisper (10)' ,  'name_short' =>  'Deathwisper (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 226, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lady Deathwhisper (10HM)' ,  'name_short' =>  'Deathwisper (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 227, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Icecrown Gunship Battle (10)' ,  'name_short' =>  'Gunship (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 228, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Icecrown Gunship Battle (10HM)' ,  'name_short' =>  'Gunship (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 229, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Deathbringer Saurfang (10)' ,  'name_short' =>  'Saurfang (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 230, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Deathbringer Saurfang (10HM)' ,  'name_short' =>  'Saurfang (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 231, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Festergut (10)' ,  'name_short' =>  'Festergut (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 232, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Festergut (10HM)' ,  'name_short' =>  'Festergut (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 233, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Rotface (10)' ,  'name_short' =>  'Rotface (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 234, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Rotface (10HM)' ,  'name_short' =>  'Rotface (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 235, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Professor Putricide (10)' ,  'name_short' =>  'Putricide (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 236, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Professor Putricide (10HM)' ,  'name_short' =>  'Putricide (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 237, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blood Princes (10)' ,  'name_short' =>  'Princes (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 238, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blood Princes (10HM)' ,  'name_short' =>  'Princes (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 239, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blood-Queen Lana thel (10)' ,  'name_short' =>  'Lana thel (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 240, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blood-Queen Lana thel (10HM)' ,  'name_short' =>  'Lana thel (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 241, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Valithria Dreamwalker (10)' ,  'name_short' =>  'Valithria (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 242, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Valithria Dreamwalker (10HM)' ,  'name_short' =>  'Valithria (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 243, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (10)' ,  'name_short' =>  'Sindragosa (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 244, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (10HM)' ,  'name_short' =>  'Sindragosa (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 245, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Lich King (10)' ,  'name_short' =>  'Lich King (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 246, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Lich King (10HM)' ,  'name_short' =>  'Lich King (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 247, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Marrowgar (25)' ,  'name_short' =>  'Marrowgar (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 248, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lord Marrowgar (25HM)' ,  'name_short' =>  'Marrowgar (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 249, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lady Deathwhisper (25)' ,  'name_short' =>  'Deathwisper (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 250, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lady Deathwhisper (25HM)' ,  'name_short' =>  'Deathwisper (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 251, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Icecrown Gunship Battle (25)' ,  'name_short' =>  'Gunship (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 252, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Icecrown Gunship Battle (25HM)' ,  'name_short' =>  'Gunship (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 253, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Deathbringer Saurfang (25)' ,  'name_short' =>  'Saurfang (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 254, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Deathbringer Saurfang (25HM)' ,  'name_short' =>  'Saurfang (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 255, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Festergut (25)' ,  'name_short' =>  'Festergut (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 256, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Festergut (25HM)' ,  'name_short' =>  'Festergut (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 257, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Rotface (25)' ,  'name_short' =>  'Rotface (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 258, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Rotface (25HM)' ,  'name_short' =>  'Rotface (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 259, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Professor Putricide (25)' ,  'name_short' =>  'Putricide (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 260, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Professor Putricide (25HM)' ,  'name_short' =>  'Putricide (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 261, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blood Princes (25)' ,  'name_short' =>  'Princes (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 262, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blood Princes (25HM)' ,  'name_short' =>  'Princes (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 263, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blood-Queen Lana thel (25)' ,  'name_short' =>  'Lana thel (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 264, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blood-Queen Lana thel (25HM)' ,  'name_short' =>  'Lana thel (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 265, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Valithria Dreamwalker (25)' ,  'name_short' =>  'Valithria (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 266, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Valithria Dreamwalker (25HM)' ,  'name_short' =>  'Valithria (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 267, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (25)' ,  'name_short' =>  'Sindragosa (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 268, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (25HM)' ,  'name_short' =>  'Sindragosa (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 269, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Lich King (25)' ,  'name_short' =>  'Lich King (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 270, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Lich King (25HM)' ,  'name_short' =>  'Lich King (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 271, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halion (10)' ,  'name_short' =>  'Halion (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 272, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halion (10HM)' ,  'name_short' =>  'Halion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 273, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halion (25)' ,  'name_short' =>  'Halion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 274, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halion (25HM)' ,  'name_short' =>  'Halion (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 275, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (10)' ,  'name_short' =>  'Magmaw (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 276, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (10HM)' ,  'name_short' =>  'Magmaw (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 277, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (25)' ,  'name_short' =>  'Magmaw (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 278, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (25HM)' ,  'name_short' =>  'Magmaw (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 279, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (10)' ,  'name_short' =>  'Omnotron Defense System (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 280, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (10HM)' ,  'name_short' =>  'Omnotron Defense System (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 281, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (25)' ,  'name_short' =>  'Omnotron Defense System (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 282, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (25HM)' ,  'name_short' =>  'Omnotron Defense System (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 283, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (10)' ,  'name_short' =>  'Maloriak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 284, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (10HM)' ,  'name_short' =>  'Maloriak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 285, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (25)' ,  'name_short' =>  'Maloriak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 286, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (25HM)' ,  'name_short' =>  'Maloriak (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 287, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (10)' ,  'name_short' =>  'Atramedes (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 288, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (10HM)' ,  'name_short' =>  'Atramedes (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 289, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (25)' ,  'name_short' =>  'Atramedes (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 290, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (25HM)' ,  'name_short' =>  'Atramedes (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 291, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (10)' ,  'name_short' =>  'Chimaeron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 292, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (10HM)' ,  'name_short' =>  'Chimaeron (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 293, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (25)' ,  'name_short' =>  'Chimaeron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 294, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (25HM)' ,  'name_short' =>  'Chimaeron (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 295, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (10)' ,  'name_short' =>  'Nefarian (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 296, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (10HM)' ,  'name_short' =>  'Nefarian (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 297, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (25)' ,  'name_short' =>  'Nefarian (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 298, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (25HM)' ,  'name_short' =>  'Nefarian (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 299, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (10)' ,  'name_short' =>  'Halfus Wyrmbreaker (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 300, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (10HM)' ,  'name_short' =>  'Halfus Wyrmbreaker (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 301, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (25)' ,  'name_short' =>  'Halfus Wyrmbreaker (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 302, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (25HM)' ,  'name_short' =>  'Halfus Wyrmbreaker (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 303, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (10)' ,  'name_short' =>  'Valiona & Theralion (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 304, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (10HM)' ,  'name_short' =>  'Valiona & Theralion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 305, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (25)' ,  'name_short' =>  'Valiona & Theralion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 306, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (25HM)' ,  'name_short' =>  'Valiona & Theralion (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 307, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (10)' ,  'name_short' =>  'Twilight Ascendant Council (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 308, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (10HM)' ,  'name_short' =>  'Twilight Ascendant Council (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 309, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (25)' ,  'name_short' =>  'Twilight Ascendant Council (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 310, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (25HM)' ,  'name_short' =>  'Twilight Ascendant Council (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 311, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (10)' ,  'name_short' =>  'Cho‘gall (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 312, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (10HM)' ,  'name_short' =>  'Cho‘gall (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 313, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (25)' ,  'name_short' =>  'Cho‘gall (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 314, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (25HM)' ,  'name_short' =>  'Cho‘gall (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 315, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sinestra (10HM)' ,  'name_short' =>  'Sinestra (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 316, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sinestra (25HM)' ,  'name_short' =>  'Sinestra (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 317, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (10)' ,  'name_short' =>  'Conclave of Wind (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 318, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (10HM)' ,  'name_short' =>  'Conclave of Wind (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 319, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (25)' ,  'name_short' =>  'Conclave of Wind (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 320, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (25HM)' ,  'name_short' =>  'Conclave of Wind (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 321, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (10)' ,  'name_short' =>  'Al‘akir (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 322, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (10HM)' ,  'name_short' =>  'Al‘akir (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 323, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (25)' ,  'name_short' =>  'Al‘akir (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 324, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (25HM)' ,  'name_short' =>  'Al‘akir (25HM)' );
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );		
		
		

		// french
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 1, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Monstres divers' ,  'name_short' =>  'Misc' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 2, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Repaire d’Onyxia' ,  'name_short' =>  'Onyxia' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 3, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Dragons du Cauchemar' ,  'name_short' =>  'Cauchemar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 4, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Zul’Gurub' ,  'name_short' =>  'ZG' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 5, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Repaire de l’Aile Noire' ,  'name_short' =>  'BWL' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 6, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Coeur du Magma' ,  'name_short' =>  'MC' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 7, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Ruines d’ Ahn’Qiraj' ,  'name_short' =>  'AQ20' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 8, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Temple d’ Ahn’Qiraj' ,  'name_short' =>  'AQ40' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 9, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas' ,  'name_short' =>  'Naxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 10, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Karazhan' ,  'name_short' =>  'Kara' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 11, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Zul’Aman' ,  'name_short' =>  'ZA' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 12, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Repaire de Gruul' ,  'name_short' =>  'GL' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 13, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Repaire de Magtheridon' ,  'name_short' =>  'Magtheridon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 14, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Raid Outreterre Exterieur' ,  'name_short' =>  'Exterieur' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 15, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Caverne du sanctuaire du Serpent' ,  'name_short' =>  'SC' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 16, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'l’oeil' ,  'name_short' =>  'Oeil' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 17, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Sommet d’Hyjal' ,  'name_short' =>  'Hyjal' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 18, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Le Temple Noir' ,  'name_short' =>  'Temple' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 19, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Plateau du Puits de Soleil' ,  'name_short' =>  'Soleil' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 20, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas (10)' ,  'name_short' =>  'Naxx (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 21, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas (25)' ,  'name_short' =>  'Naxx (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 22, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Caveau d’Archavon (10)' ,  'name_short' =>  'VoA (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 23, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Caveau d’Archavon (25)' ,  'name_short' =>  'VoA (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 24, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Sanctum Obsidien (10)' ,  'name_short' =>  'OS (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 25, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Le Sanctum Obsidien (25)' ,  'name_short' =>  'OS (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 26, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’Oeil de l’Eternité (10)' ,  'name_short' =>  'EoE (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 27, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’Oeil de l’Eternité (25)' ,  'name_short' =>  'EoE (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 28, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Ulduar (10)' ,  'name_short' =>  'EoE (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 29, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Ulduar (25)' ,  'name_short' =>  '' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 30, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’épreuve du croisé (10)' ,  'name_short' =>  'ToC (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 31, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’épreuve du croisé (25)' ,  'name_short' =>  'ToC (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 32, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’épreuve du croisé Héroique (10)' ,  'name_short' =>  'ToGC (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 33, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’épreuve du croisé Héroique (25)' ,  'name_short' =>  'ToGC (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 34, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Repaire d’Onyxia (10)' ,  'name_short' =>  'Onyxia (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 35, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Repaire d’Onyxia (25)' ,  'name_short' =>  'Onyxia (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 37, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Citadelle de la Couronne de glace (25)' ,  'name_short' =>  'ICC (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 36, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Citadelle de la Couronne de glace (10)' ,  'name_short' =>  'ICC (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 38, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Le Sanctum Rubis (10)' ,  'name_short' =>  'RS (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 39, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Le Sanctum Rubis (25)' ,  'name_short' =>  'RS (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 40, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Blackwing Descent (10)' ,  'name_short' =>  'BD (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 41, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Blackwing Descent (25)' ,  'name_short' =>  'BD (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 42, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'The Bastion of Twilight (10)' ,  'name_short' =>  'BoT (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 43, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'The Bastion of Twilight (25)' ,  'name_short' =>  'BoT (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 44, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Throne of the Four Winds (10)' ,  'name_short' =>  'TotFW (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 45, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Throne of the Four Winds (25)' ,  'name_short' =>  'TotFW (25)' );
		
		//boss
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 1, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Azuregos' ,  'name_short' =>  'Azuregos' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 2, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur funeste Kazzak' ,  'name_short' =>  'Kazzak' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 3, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Onyxia' ,  'name_short' =>  'Onyxia' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 4, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ysondre' ,  'name_short' =>  'Ysondre' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 5, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Taerar' ,  'name_short' =>  'Taerar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 6, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Emeriss' ,  'name_short' =>  'Emeriss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 7, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lethon' ,  'name_short' =>  'Lethon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 8, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur sanglant Mandokir' ,  'name_short' =>  'Mandokir' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 9, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Jin’do le Maléficieur' ,  'name_short' =>  'Jin’do' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 10, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gahz’ranka' ,  'name_short' =>  'Gahz’ranka' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 11, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gri’lek' ,  'name_short' =>  'Gri’lek' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 12, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hazza’rah' ,  'name_short' =>  'Hazza’rah' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 13, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Renataki' ,  'name_short' =>  'Renataki' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 14, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Wushoolay' ,  'name_short' =>  'Wushoolay' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 15, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grand Prêtre Thekal' ,  'name_short' =>  'Thekal' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 16, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande Prêtresse Arlokk' ,  'name_short' =>  'Arlokk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 17, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande Prêtresse Jeklik' ,  'name_short' =>  'Jeklik' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 18, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande Prêtresse Mar’li' ,  'name_short' =>  'Mar’li' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 19, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grand Prêtre Venoxis' ,  'name_short' =>  'Venoxis' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 20, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hakkar' ,  'name_short' =>  'Hakkar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 21, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tranchetripe l’Indompté' ,  'name_short' =>  'Razorgore' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 22, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Vaelastrasz le Corrompu' ,  'name_short' =>  'Vaelastrasz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 23, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur des couvées Lanistaire' ,  'name_short' =>  'Lashlayer' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 24, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gueule-de-feu' ,  'name_short' =>  'Firemaw' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 25, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Rochébène' ,  'name_short' =>  'Ebonroc' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 26, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Flamegor' ,  'name_short' =>  'Flamegor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 27, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Chromaggus' ,  'name_short' =>  'Chromaggus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 28, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Nefarian' ,  'name_short' =>  'Nefarian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 29, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lucifron' ,  'name_short' =>  'Lucifron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 30, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Magmadar' ,  'name_short' =>  'Magmadar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 31, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gehennas' ,  'name_short' =>  'Gehennas' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 32, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Garr' ,  'name_short' =>  'Garr' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 33, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Baron Geddon' ,  'name_short' =>  'Geddon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 34, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Shazzrah' ,  'name_short' =>  'Shazzrah' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 35, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Messager de Sulfuron' ,  'name_short' =>  'Sulfuron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 36, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Golemagg l’Incinérateur' ,  'name_short' =>  'Golemagg' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 37, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Chambellan Executus' ,  'name_short' =>  'Majordomo' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 38, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ragnaros' ,  'name_short' =>  'Ragnaros' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 39, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kurinnaxx' ,  'name_short' =>  'Kurinnaxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 40, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Général Rajaxx' ,  'name_short' =>  'Rajaxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 41, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ayamiss le Chasseur' ,  'name_short' =>  'Ayamiss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 42, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Buru Grandgosier' ,  'name_short' =>  'Buru' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 43, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Moam' ,  'name_short' =>  'Moam' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 44, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ossirian l’Intouché' ,  'name_short' =>  'Ossirian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 45, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le prophète Skeram' ,  'name_short' =>  'Skeram' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 46, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Kri' ,  'name_short' =>  'Lord Kri' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 47, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Princesse Yauj' ,  'name_short' =>  'Princess Yauj' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 48, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Vem' ,  'name_short' =>  'Vem' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 49, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Garde de guerre Sartura' ,  'name_short' =>  'Sartura' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 50, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Fankriss l’Inflexible' ,  'name_short' =>  'Fankriss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 51, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Princesse Huhuran' ,  'name_short' =>  'Huhuran' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 52, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Viscidus' ,  'name_short' =>  'Viscidus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 53, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Empereur Vek’nilash' ,  'name_short' =>  'Vek’nilash' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 54, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Empereur Vek’lor' ,  'name_short' =>  'Vek’lor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 55, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ouro' ,  'name_short' =>  'Ouro' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 56, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'C’Thun' ,  'name_short' =>  'C’Thun' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 57, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan' ,  'name_short' =>  'Anub’Rekhan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 58, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande veuve Faerlina' ,  'name_short' =>  'Faerlina' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 59, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maexxna' ,  'name_short' =>  'Maexxna' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 60, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Noth le Porte-peste' ,  'name_short' =>  'Noth' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 61, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Heigan l’Impur' ,  'name_short' =>  'Heigan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 62, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Horreb' ,  'name_short' =>  'Loatheb' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 63, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le Recousu' ,  'name_short' =>  'Patchwerk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 64, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus' ,  'name_short' =>  'Grobbulus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 65, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gluth' ,  'name_short' =>  'Gluth' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 66, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Thaddius' ,  'name_short' =>  'Thaddius' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 67, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Instructeur Razuvious' ,  'name_short' =>  'Razuvious' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 68, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gothik le Moissonneur' ,  'name_short' =>  'Gothik' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 69, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Thane Korth’azz' ,  'name_short' =>  'Korth’azz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 70, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Dame Blaumeux' ,  'name_short' =>  'Blaumeux' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 71, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Baron Vaillefendre' ,  'name_short' =>  'Mograine' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 72, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sir Zeliek' ,  'name_short' =>  'Sir Zeliek' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 73, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sapphiron' ,  'name_short' =>  'Sapphiron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 74, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad' ,  'name_short' =>  'Kel’Thuzad' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 75, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Attumen le Veneur' ,  'name_short' =>  'Attumen' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 76, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Moroes' ,  'name_short' =>  'Moroes' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 77, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Damoiselle de vertu' ,  'name_short' =>  'Maiden' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 78, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'L’Opéra' ,  'name_short' =>  'Opera' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 79, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'The Conservateur' ,  'name_short' =>  'Curator' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 80, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Terestian Malsabot' ,  'name_short' =>  'Terestian Illhoof' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 81, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ombre d’Aran' ,  'name_short' =>  'Aran' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 82, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'L’échiquier' ,  'name_short' =>  'Chess' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 83, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Plaie-de-nuit' ,  'name_short' =>  'Netherspite' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 84, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Prince Malchezaar' ,  'name_short' =>  'Malchezaar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 85, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Dédain-du-Néant' ,  'name_short' =>  'Nightbane' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 86, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Nalorakk, Avatar d’Ours' ,  'name_short' =>  'Nalorakk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 87, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Akil’Zon, Avatar d’Aigle' ,  'name_short' =>  'Akil’Zon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 88, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halazzi, Avatar de Lynx' ,  'name_short' =>  'Halazzi' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 89, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Jan’Alai, Avatar de Faucon-dragon' ,  'name_short' =>  'Jan’Alai' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 90, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur des maléfices Malacrass' ,  'name_short' =>  'Malacrass' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 91, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Zul’Jin' ,  'name_short' =>  'Zul’Jin' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 92, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Haut Roi Maulgar' ,  'name_short' =>  'Maulgar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 93, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gruul le Tue-dragon' ,  'name_short' =>  'Gruul' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 94, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Magtheridon' ,  'name_short' =>  'Magtheridon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 95, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur funeste Kazzak' ,  'name_short' =>  'Doom Kazzak' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 96, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Marche-funeste' ,  'name_short' =>  'Doomwalker' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 97, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hydross l’Instable' ,  'name_short' =>  'Hydross' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 98, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur des fonds Karathress' ,  'name_short' =>  'Karathress' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 99, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Morogrim Marcheur-des-flots' ,  'name_short' =>  'Morogrim' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 100, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Leotheras l’Aveugle' ,  'name_short' =>  'Leotheras' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 101, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le Rôdeur d’En bas' ,  'name_short' =>  'Lurker' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 102, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Dame Vashj' ,  'name_short' =>  'Vashj' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 103, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Al’Ar Dieu phénix' ,  'name_short' =>  'Al’Ar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 104, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Saccageur du Vide' ,  'name_short' =>  'Reaver' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 105, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande astromancienne Solarian' ,  'name_short' =>  'Solarian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 106, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kael’thas Haut-soleil' ,  'name_short' =>  'Kaelthas' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 107, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Rage Froidhiver' ,  'name_short' =>  'Winterchill' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 108, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Anetheron' ,  'name_short' =>  'Anetheron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 109, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kaz’rogal' ,  'name_short' =>  'Kaz’rogal' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 110, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Azgalor' ,  'name_short' =>  'Azgalor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 111, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Archimonde' ,  'name_short' =>  'Archimonde' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 112, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grand seigneur de guerre Naj’entus' ,  'name_short' =>  'Naj’entus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 113, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Supremus' ,  'name_short' =>  'Supremus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 114, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ombre d’Akama' ,  'name_short' =>  'Akama' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 115, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Teron Fielsang' ,  'name_short' =>  'Gorefiend' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 116, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Essence de la souffrance' ,  'name_short' =>  'Essence' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 117, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gurtogg Fièvresang' ,  'name_short' =>  'Bloodboil' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 118, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Mère Shahraz' ,  'name_short' =>  'Shahraz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 119, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conseil Illidari' ,  'name_short' =>  'Council' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 120, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Illidan Hurlorage' ,  'name_short' =>  'Illidan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 121, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kalecgos' ,  'name_short' =>  'Kalecgos' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 122, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Brutallus' ,  'name_short' =>  'Brutallus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 123, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gangrebrume' ,  'name_short' =>  'Felmyst' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 124, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande démoniste Alythess' ,  'name_short' =>  'Twins' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 125, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'M’uru' ,  'name_short' =>  'M’uru' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 126, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kil’jaeden' ,  'name_short' =>  'Kil’jaeden' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 127, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan (10)' ,  'name_short' =>  'Anub’Rekhan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 128, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande veuve Faerlina (10)' ,  'name_short' =>  'Faerlina (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 129, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maexxna (10)' ,  'name_short' =>  'Maexxna (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 130, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Noth le Porte-peste (10)' ,  'name_short' =>  'Noth (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 131, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Heigan l’Impur (10)' ,  'name_short' =>  'Heigan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 132, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Horreb (10)' ,  'name_short' =>  'Loatheb (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 133, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le Recousu (10)' ,  'name_short' =>  'Patchwerk (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 134, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus (10)' ,  'name_short' =>  'Grobbulus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 135, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gluth (10)' ,  'name_short' =>  'Gluth (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 136, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Thaddius (10)' ,  'name_short' =>  'Thaddius (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 137, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Instructeur Razuvious (10)' ,  'name_short' =>  'Razuvious (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 138, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gothik le Moissoneur (10)' ,  'name_short' =>  'Gothik (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 139, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les Quatre Cavaliers (10)' ,  'name_short' =>  'Korth’azz (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 140, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sapphiron (10)' ,  'name_short' =>  'Sapphiron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 141, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad (10)' ,  'name_short' =>  'Kel’Thuzad (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 142, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan (25)' ,  'name_short' =>  'Anub’Rekhan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 143, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande veuve Faerlina (25)' ,  'name_short' =>  'Faerlina (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 144, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maexxna (25)' ,  'name_short' =>  'Maexxna (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 145, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Noth le Porte-peste (25)' ,  'name_short' =>  'Noth (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 146, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Heigan l’Impur (25)' ,  'name_short' =>  'Heigan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 147, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Horreb (25)' ,  'name_short' =>  'Loatheb (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 148, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le Recousu (25)' ,  'name_short' =>  'Patchwerk (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 149, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus (25)' ,  'name_short' =>  'Grobbulus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 150, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gluth (25)' ,  'name_short' =>  'Gluth (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 151, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Thaddius (25)' ,  'name_short' =>  'Thaddius (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 152, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Instructeur Razuvious (25)' ,  'name_short' =>  'Razuvious (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 153, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gothik le Moissoneur (25)' ,  'name_short' =>  'Gothik (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 154, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les Quatre Cavaliers (25)' ,  'name_short' =>  'Korth’azz (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 155, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sapphiron (25)' ,  'name_short' =>  'Sapphiron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 156, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad (25)' ,  'name_short' =>  'Kel’Thuzad (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 157, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Malygos (10)' ,  'name_short' =>  'Malygos (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 158, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Archavon le Gardien des pierres (10)' ,  'name_short' =>  'Archavon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 159, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Emalon le Guetteur d’orage (10)' ,  'name_short' =>  'Emalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 160, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Archavon le Gardien des pierres (25)' ,  'name_short' =>  'Archavon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 161, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Emalon le Guetteur d’orage (25)' ,  'name_short' =>  'Emalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 162, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sartharion Le gardien d’Onyx 0 dragons (10)' ,  'name_short' =>  'Sartarion 0d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 163, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sartharion Le gardien d’Onyx 1 dragons (10)' ,  'name_short' =>  'Sartarion 1d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 164, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sartharion Le gardien d’Onyx 2 dragons (10)' ,  'name_short' =>  'Sartarion 2d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 165, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sartharion Le gardien d’Onyx 3 dragons (10)' ,  'name_short' =>  'Sartarion 3d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 166, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sartharion Le gardien d’Onyx 0 dragons (25)' ,  'name_short' =>  'Sartarion 0d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 167, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sartharion Le gardien d’Onyx 1 dragons (25)' ,  'name_short' =>  'Sartarion 1d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 168, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sartharion Le gardien d’Onyx 2 dragons (25)' ,  'name_short' =>  'Sartarion 2d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 169, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sartharion Le gardien d’Onyx 3 dragons (25)' ,  'name_short' =>  'Sartarion 3d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 170, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Malygos (25)' ,  'name_short' =>  'Malygos (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 171, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Léviathan des flammes (10)' ,  'name_short' =>  'Leviathan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 172, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tranchécaille (10)' ,  'name_short' =>  'Razorscale (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 173, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Déconstructeur XT-002 (10)' ,  'name_short' =>  'Deconstructor (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 174, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ignis le maître de la Fournaise (10)' ,  'name_short' =>  'Ignis (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 175, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Brise-acier (10)' ,  'name_short' =>  'Assembly (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 176, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kologarn (10)' ,  'name_short' =>  'Kologarn (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 177, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Auriaya (10)' ,  'name_short' =>  'Auriaya (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 178, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Mimiron (10)' ,  'name_short' =>  'Mimiron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 179, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hodir (10)' ,  'name_short' =>  'Hodir (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 180, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Thorim (10)' ,  'name_short' =>  'Thorim (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 181, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Freya (10)' ,  'name_short' =>  'Freya (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 182, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Général Vezax (10)' ,  'name_short' =>  'Vezax (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 183, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Yogg-Saron (10)' ,  'name_short' =>  'Yogg-Saron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 184, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Algalon (10)' ,  'name_short' =>  'Algalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 185, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Léviathan des flammes (25)' ,  'name_short' =>  'Leviathan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 186, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tranchécaille (25)' ,  'name_short' =>  'Razorscale (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 187, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Déconstructeur XT-002 (25)' ,  'name_short' =>  'Deconstructor (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 188, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ignis le maître de la Fournaise (25)' ,  'name_short' =>  'Ignis (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 189, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Brise-acier (25)' ,  'name_short' =>  'Assembly (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 190, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Kologarn (25)' ,  'name_short' =>  'Kologarn (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 191, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Auriaya (25)' ,  'name_short' =>  'Auriaya (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 192, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Mimiron (25)' ,  'name_short' =>  'Mimiron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 193, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hodir (25)' ,  'name_short' =>  'Hodir (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 194, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Thorim (25)' ,  'name_short' =>  'Thorim (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 195, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Freya (25)' ,  'name_short' =>  'Freya (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 196, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Vezax (25)' ,  'name_short' =>  'Vezax (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 197, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Yogg-Saron (25)' ,  'name_short' =>  'Yogg-Saron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 198, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Algalon (10)' ,  'name_short' =>  'Algalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 199, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les bêtes de Norfendre (10)' ,  'name_short' =>  'Beasts (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 200, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les champions du Colisée (10)' ,  'name_short' =>  'Champions (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 201, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Jaraxxus (10)' ,  'name_short' =>  'Jaraxxus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 202, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les Jumelles Val’kyr (10)' ,  'name_short' =>  'Valkyrs (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 203, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (10)' ,  'name_short' =>  'Anub (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 204, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les bêtes de Norfendre (25)' ,  'name_short' =>  'Beasts (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 205, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les champions du Colisée (25)' ,  'name_short' =>  'Champions (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 206, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Jaraxxus (25)' ,  'name_short' =>  'Jaraxxus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 207, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les Jumelles Val’kyr (25)' ,  'name_short' =>  'Valkyrs (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 208, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (25)' ,  'name_short' =>  'Anub (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 209, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les bêtes de Norfendre (10)' ,  'name_short' =>  'Beasts (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 210, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les champions du Colisée (10)' ,  'name_short' =>  'Champions (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 211, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Jaraxxus (10)' ,  'name_short' =>  'Jaraxxus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 212, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les Jumelles Val’kyr (10)' ,  'name_short' =>  'Valkyrs (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 213, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (10)' ,  'name_short' =>  'Anub (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 214, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les bêtes de Norfendre (25)' ,  'name_short' =>  'Beasts (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 215, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les champions du Colisée (25)' ,  'name_short' =>  'Champions (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 216, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Jaraxxus (25)' ,  'name_short' =>  'Jaraxxus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 217, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les Jumelles Val’kyr (25)' ,  'name_short' =>  'Valkyrs (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 218, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (25)' ,  'name_short' =>  'Anub (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 219, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (10)' ,  'name_short' =>  'Onyxia (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 220, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (10)' ,  'name_short' =>  'Onyxia (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 221, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (25)' ,  'name_short' =>  'Onyxia (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 222, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (25)' ,  'name_short' =>  'Onyxia (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 223, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Gargamoelle (10)' ,  'name_short' =>  'Marrowgar (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 224, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Gargamoelle (10HM)' ,  'name_short' =>  'Marrowgar (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 225, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Dame Murmemort (10)' ,  'name_short' =>  'Deathwisper (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 226, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Dame Murmemort (10HM)' ,  'name_short' =>  'Deathwisper (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 227, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Armurerie de la canonnière (10)' ,  'name_short' =>  'Gunship (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 228, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Armurerie de la canonnière (10HM)' ,  'name_short' =>  'Gunship (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 229, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Porte-mort Saurcroc (10)' ,  'name_short' =>  'Saurfang (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 230, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Porte-mort Saurcroc (10HM)' ,  'name_short' =>  'Saurfang (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 231, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Pulentraille (10)' ,  'name_short' =>  'Festergut (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 232, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Pulentraille (10HM)' ,  'name_short' =>  'Festergut (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 233, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Trognepus (10)' ,  'name_short' =>  'Rotface (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 234, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Trognepus (10HM)' ,  'name_short' =>  'Rotface (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 235, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Professeur Putricide (10)' ,  'name_short' =>  'Putricide (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 236, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Professeur Putricide (10HM)' ,  'name_short' =>  'Putricide (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 237, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Prince Valanar (10)' ,  'name_short' =>  'Princes (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 238, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Prince Valanar (10HM)' ,  'name_short' =>  'Princes (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 239, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Reine de sang Lana’thel (10)' ,  'name_short' =>  'Lana thel (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 240, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Reine de sang Lana’thel (10HM)' ,  'name_short' =>  'Lana thel (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 241, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Valithria Marcherêve (10)' ,  'name_short' =>  'Valithria (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 242, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Valithria Marcherêve (10HM)' ,  'name_short' =>  'Valithria (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 243, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (10)' ,  'name_short' =>  'Sindragosa (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 244, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (10HM)' ,  'name_short' =>  'Sindragosa (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 245, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le Roi-liche (10)' ,  'name_short' =>  'Lich King (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 246, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le Roi-liche (10HM)' ,  'name_short' =>  'Lich King (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 247, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Gargamoelle (25)' ,  'name_short' =>  'Marrowgar (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 248, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur Gargamoelle (25HM)' ,  'name_short' =>  'Marrowgar (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 249, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Dame Murmemort (25)' ,  'name_short' =>  'Deathwisper (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 250, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Dame Murmemort (25HM)' ,  'name_short' =>  'Deathwisper (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 251, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Armurerie de la canonnière (25)' ,  'name_short' =>  'Gunship (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 252, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Armurerie de la canonnière (25HM)' ,  'name_short' =>  'Gunship (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 253, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Porte-mort Saurcroc (25)' ,  'name_short' =>  'Saurfang (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 254, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Porte-mort Saurcroc (25HM)' ,  'name_short' =>  'Saurfang (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 255, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Pulentraille (25)' ,  'name_short' =>  'Festergut (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 256, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Pulentraille (25HM)' ,  'name_short' =>  'Festergut (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 257, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Trognepus (25)' ,  'name_short' =>  'Rotface (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 258, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Trognepus (25HM)' ,  'name_short' =>  'Rotface (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 259, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Professeur Putricide (25)' ,  'name_short' =>  'Putricide (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 260, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Professeur Putricide (25HM)' ,  'name_short' =>  'Putricide (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 261, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Prince Valanar (25)' ,  'name_short' =>  'Princes (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 262, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Prince Valanar (25HM)' ,  'name_short' =>  'Princes (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 263, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Reine de sang Lana’thel (25)' ,  'name_short' =>  'Lana thel (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 264, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Reine de sang Lana’thel (25HM)' ,  'name_short' =>  'Lana thel (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 265, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Valithria Marcherêve (25)' ,  'name_short' =>  'Valithria (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 266, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Valithria Marcherêve (25HM)' ,  'name_short' =>  'Valithria (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 267, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (25)' ,  'name_short' =>  'Sindragosa (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 268, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (25HM)' ,  'name_short' =>  'Sindragosa (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 269, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le Roi-liche (25)' ,  'name_short' =>  'Lich King (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 270, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le Roi-liche (25HM)' ,  'name_short' =>  'Lich King (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 271, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halion (10)' ,  'name_short' =>  'Halion (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 272, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halion (10HM)' ,  'name_short' =>  'Halion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 273, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halion (25)' ,  'name_short' =>  'Halion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 274, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halion (25HM)' ,  'name_short' =>  'Halion (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 275, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (10)' ,  'name_short' =>  'Magmaw (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 276, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (10HM)' ,  'name_short' =>  'Magmaw (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 277, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (25)' ,  'name_short' =>  'Magmaw (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 278, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (25HM)' ,  'name_short' =>  'Magmaw (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 279, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (10)' ,  'name_short' =>  'Omnotron Defense System (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 280, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (10HM)' ,  'name_short' =>  'Omnotron Defense System (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 281, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (25)' ,  'name_short' =>  'Omnotron Defense System (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 282, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (25HM)' ,  'name_short' =>  'Omnotron Defense System (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 283, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (10)' ,  'name_short' =>  'Maloriak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 284, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (10HM)' ,  'name_short' =>  'Maloriak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 285, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (25)' ,  'name_short' =>  'Maloriak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 286, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (25HM)' ,  'name_short' =>  'Maloriak (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 287, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (10)' ,  'name_short' =>  'Atramedes (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 288, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (10HM)' ,  'name_short' =>  'Atramedes (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 289, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (25)' ,  'name_short' =>  'Atramedes (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 290, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (25HM)' ,  'name_short' =>  'Atramedes (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 291, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (10)' ,  'name_short' =>  'Chimaeron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 292, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (10HM)' ,  'name_short' =>  'Chimaeron (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 293, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (25)' ,  'name_short' =>  'Chimaeron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 294, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (25HM)' ,  'name_short' =>  'Chimaeron (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 295, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (10)' ,  'name_short' =>  'Nefarian (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 296, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (10HM)' ,  'name_short' =>  'Nefarian (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 297, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (25)' ,  'name_short' =>  'Nefarian (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 298, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (25HM)' ,  'name_short' =>  'Nefarian (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 299, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (10)' ,  'name_short' =>  'Halfus Wyrmbreaker (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 300, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (10HM)' ,  'name_short' =>  'Halfus Wyrmbreaker (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 301, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (25)' ,  'name_short' =>  'Halfus Wyrmbreaker (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 302, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (25HM)' ,  'name_short' =>  'Halfus Wyrmbreaker (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 303, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (10)' ,  'name_short' =>  'Valiona & Theralion (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 304, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (10HM)' ,  'name_short' =>  'Valiona & Theralion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 305, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (25)' ,  'name_short' =>  'Valiona & Theralion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 306, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (25HM)' ,  'name_short' =>  'Valiona & Theralion (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 307, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (10)' ,  'name_short' =>  'Twilight Ascendant Council (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 308, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (10HM)' ,  'name_short' =>  'Twilight Ascendant Council (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 309, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (25)' ,  'name_short' =>  'Twilight Ascendant Council (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 310, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (25HM)' ,  'name_short' =>  'Twilight Ascendant Council (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 311, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (10)' ,  'name_short' =>  'Cho‘gall (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 312, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (10HM)' ,  'name_short' =>  'Cho‘gall (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 313, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (25)' ,  'name_short' =>  'Cho‘gall (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 314, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (25HM)' ,  'name_short' =>  'Cho‘gall (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 315, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sinestra (10HM)' ,  'name_short' =>  'Sinestra (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 316, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sinestra (25HM)' ,  'name_short' =>  'Sinestra (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 317, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (10)' ,  'name_short' =>  'Conclave of Wind (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 318, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (10HM)' ,  'name_short' =>  'Conclave of Wind (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 319, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (25)' ,  'name_short' =>  'Conclave of Wind (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 320, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (25HM)' ,  'name_short' =>  'Conclave of Wind (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 321, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (10)' ,  'name_short' =>  'Al‘akir (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 322, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (10HM)' ,  'name_short' =>  'Al‘akir (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 323, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (25)' ,  'name_short' =>  'Al‘akir (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 324, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (25HM)' ,  'name_short' =>  'Al‘akir (25HM)' );
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
				
		// zones in de	
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 1, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Verschiedene Bosse' ,  'name_short' =>  'Misc' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 2, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Onyxia’s Hort' ,  'name_short' =>  'Onyxia' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 3, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Smaragdgrünen Traum' ,  'name_short' =>  'Traum' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 4, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Zul’Gurub' ,  'name_short' =>  'ZG' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 5, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Der Pechschwingen Hort' ,  'name_short' =>  'BWL' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 6, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Geschmolzener Kern' ,  'name_short' =>  'MC' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 7, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Ruinen von Ahn’Qiraj' ,  'name_short' =>  'AQ20' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 8, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Tempel von Ahn’Qiraj' ,  'name_short' =>  'AQ40' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 9, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas' ,  'name_short' =>  'Naxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 10, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Karazhan' ,  'name_short' =>  'Kara' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 11, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Zul’Aman' ,  'name_short' =>  'ZA' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 12, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Gruuls Unterschlupf' ,  'name_short' =>  'GL' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 13, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Magtheridons Hort' ,  'name_short' =>  'MG' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 14, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Höllenfeuerhalbinsel Bosse' ,  'name_short' =>  'Höllenfeuerhalbinsel' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 15, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Höhle des Schlangenschreins' ,  'name_short' =>  'SSC' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 16, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Auge' ,  'name_short' =>  'TK' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 17, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Hyjalgipfel' ,  'name_short' =>  'MH' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 18, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Der Schwarze Tempel' ,  'name_short' =>  'BT' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 19, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Sonnenbrunnenplateau' ,  'name_short' =>  'SW' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 20, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas (10)' ,  'name_short' =>  'Naxx (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 21, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Naxxramas (25)' ,  'name_short' =>  'Naxx (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 22, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Archavons Kammer (10)' ,  'name_short' =>  'AK (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 23, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Archavons Kammer (25)' ,  'name_short' =>  'AK (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 24, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Obsidiansanktum (10)' ,  'name_short' =>  'OS (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 25, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Obsidiansanktum (25)' ,  'name_short' =>  'OS (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 26, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Auge der Ewigkeit (10)' ,  'name_short' =>  'EoE (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 27, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Auge der Ewigkeit (25)' ,  'name_short' =>  'EoE (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 28, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Ulduar (10)' ,  'name_short' =>  'UD (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 29, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Ulduar (25)' ,  'name_short' =>  'UD (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 30, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Prüfung des Kreuzfahrers (10)' ,  'name_short' =>  'PK (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 31, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Prüfung des Kreuzfahrers (25)' ,  'name_short' =>  'PK (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 32, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Prüfung des obersten Kreuzfahrers (10)' ,  'name_short' =>  'PoK (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 33, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Prüfung des obersten Kreuzfahrers (25)' ,  'name_short' =>  'PoK (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 34, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Onyxias Hort (10)' ,  'name_short' =>  'Ony (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 35, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Onyxias Hort (25)' ,  'name_short' =>  'Ony (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 37, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Eiskronenzitadelle (25)' ,  'name_short' =>  'ICC (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 36, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Eiskronenzitadelle (10)' ,  'name_short' =>  'ICC (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 38, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Rubinsanktum  (10)' ,  'name_short' =>  'RS (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 39, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Rubinsanktum  (25)' ,  'name_short' =>  'RS (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 40, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Blackwing Descent (10)' ,  'name_short' =>  'BD (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 41, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Blackwing Descent (25)' ,  'name_short' =>  'BD (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 42, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'The Bastion of Twilight (10)' ,  'name_short' =>  'BoT (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 43, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'The Bastion of Twilight (25)' ,  'name_short' =>  'BoT (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 44, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Throne of the Four Winds (10)' ,  'name_short' =>  'TotFW (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 45, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Throne of the Four Winds (25)' ,  'name_short' =>  'TotFW (25)' );

		// bosses in de
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 1, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Azuregos' ,  'name_short' =>  'Azuregos' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 2, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Verdammnislord Kazzak' ,  'name_short' =>  'Kazzak' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 3, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Onyxia' ,  'name_short' =>  'Onyxia' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 4, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ysondre' ,  'name_short' =>  'Ysondre' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 5, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Taerar' ,  'name_short' =>  'Taerar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 6, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Emeriss' ,  'name_short' =>  'Emeriss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 7, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lethon' ,  'name_short' =>  'Lethon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 8, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Blutfürst Mandokir' ,  'name_short' =>  'Mandokir' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 9, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Jin’do der Verhexer' ,  'name_short' =>  'Jin’do' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 10, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gahz’ranka' ,  'name_short' =>  'Gahz’ranka' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 11, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gri’lek' ,  'name_short' =>  'Gri’lek' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 12, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hazza’rah' ,  'name_short' =>  'Hazza’rah' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 13, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Renataki' ,  'name_short' =>  'Renataki' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 14, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Wushoolay' ,  'name_short' =>  'Wushoolay' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 15, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hohepriester Thekal' ,  'name_short' =>  'Thekal' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 16, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hohepriesterin Arlokk' ,  'name_short' =>  'Arlokk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 17, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hohepriesterin Jeklik' ,  'name_short' =>  'Jeklik' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 18, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hohepriesterin Mar’li' ,  'name_short' =>  'Mar’li' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 19, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hohepriester Venoxis' ,  'name_short' =>  'Venoxis' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 20, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hakkar' ,  'name_short' =>  'Hakkar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 21, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Feuerkralle der Ungezähmte' ,  'name_short' =>  'Razorgore' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 22, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Vaelastrasz der Verdorbene' ,  'name_short' =>  'Vaelastrasz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 23, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Brutwächter Dreschbringer' ,  'name_short' =>  'Lashlayer' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 24, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Flammenmaul' ,  'name_short' =>  'Firemaw' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 25, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Schattenschwinge' ,  'name_short' =>  'Ebonroc' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 26, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Feuerschwinge' ,  'name_short' =>  'Flamegor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 27, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Chromaggus' ,  'name_short' =>  'Chromaggus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 28, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Nefarian' ,  'name_short' =>  'Nefarian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 29, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lucifron' ,  'name_short' =>  'Lucifron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 30, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Magmadar' ,  'name_short' =>  'Magmadar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 31, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gehennas' ,  'name_short' =>  'Gehennas' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 32, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Garr' ,  'name_short' =>  'Garr' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 33, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Baron Geddon' ,  'name_short' =>  'Geddon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 34, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Shazzrah' ,  'name_short' =>  'Shazzrah' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 35, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sulfuronherold' ,  'name_short' =>  'Sulfuron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 36, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Golemagg der Verbrenner' ,  'name_short' =>  'Golemagg' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 37, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Majordomus Exekutus' ,  'name_short' =>  'Majordomo' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 38, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ragnaros' ,  'name_short' =>  'Ragnaros' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 39, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kurinnaxx' ,  'name_short' =>  'Kurinnaxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 40, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'General Rajaxx' ,  'name_short' =>  'Rajaxx' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 41, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ayamiss der Jäger' ,  'name_short' =>  'Ayamiss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 42, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Buru der Verschlinger' ,  'name_short' =>  'Buru' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 43, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Moam' ,  'name_short' =>  'Moam' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 44, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ossirian der Narbenlose' ,  'name_short' =>  'Ossirian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 45, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Prophet Skeram' ,  'name_short' =>  'Skeram' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 46, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Kri' ,  'name_short' =>  'Lord Kri' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 47, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Prinzessin Yauj' ,  'name_short' =>  'Princess Yauj' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 48, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Vem' ,  'name_short' =>  'Vem' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 49, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Schlachtwache Sartura' ,  'name_short' =>  'Sartura' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 50, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fankriss der Unnachgiebige' ,  'name_short' =>  'Fankriss' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 51, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Prinzessin Huhuran' ,  'name_short' =>  'Huhuran' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 52, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Viscidus' ,  'name_short' =>  'Viscidus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 53, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Imperator Vek’nilash' ,  'name_short' =>  'Vek’nilash' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 54, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Imperator Vek’lor' ,  'name_short' =>  'Vek’lor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 55, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ouro' ,  'name_short' =>  'Ouro' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 56, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'C’Thun' ,  'name_short' =>  'C’Thun' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 57, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan' ,  'name_short' =>  'Anub’Rekhan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 58, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Großwitwe Faerlina' ,  'name_short' =>  'Faerlina' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 59, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Maexxna' ,  'name_short' =>  'Maexxna' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 60, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Noth der Seuchenfürst' ,  'name_short' =>  'Noth' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 61, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Heigan der Unreine' ,  'name_short' =>  'Heigan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 62, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Loatheb' ,  'name_short' =>  'Loatheb' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 63, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Flickwerk' ,  'name_short' =>  'Patchwerk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 64, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus' ,  'name_short' =>  'Grobbulus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 65, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gluth' ,  'name_short' =>  'Gluth' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 66, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Thaddius' ,  'name_short' =>  'Thaddius' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 67, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Instrukteur Razuvious' ,  'name_short' =>  'Razuvious' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 68, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gothik der Ernter' ,  'name_short' =>  'Gothik' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 69, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Thane Korth’azz' ,  'name_short' =>  'Korth’azz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 70, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lady Blaumeux' ,  'name_short' =>  'Blaumeux' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 71, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hochlord Mograine' ,  'name_short' =>  'Mograine' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 72, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sir Zeliek' ,  'name_short' =>  'Sir Zeliek' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 73, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Saphiron' ,  'name_short' =>  'Sapphiron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 74, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad' ,  'name_short' =>  'Kel’Thuzad' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 75, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Attumen der Jäger' ,  'name_short' =>  'Attumen' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 76, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Moroes' ,  'name_short' =>  'Moroes' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 77, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tugendhafte Maid' ,  'name_short' =>  'Maiden' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 78, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Opera Event' ,  'name_short' =>  'Opera' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 79, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Kurator' ,  'name_short' =>  'Curator' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 80, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Terestian Siechhuf' ,  'name_short' =>  'Terestian Illhoof' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 81, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Arans Schemen' ,  'name_short' =>  'Aran' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 82, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Schach Event' ,  'name_short' =>  'Chess' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 83, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Nethergroll' ,  'name_short' =>  'Netherspite' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 84, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Prinz Malchezaar' ,  'name_short' =>  'Malchezaar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 85, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Schrecken der Nacht' ,  'name_short' =>  'Nightbane' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 86, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Nalorakk, Bär Avatar' ,  'name_short' =>  'Nalorakk' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 87, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Akil’Zon, Adler Avatar' ,  'name_short' =>  'Akil’Zon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 88, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halazzi, Luchs Avatar' ,  'name_short' =>  'Halazzi' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 89, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Jan’Alai, Drachenfalken Avatar' ,  'name_short' =>  'Jan’Alai' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 90, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hexlord Malacrass' ,  'name_short' =>  'Malacrass' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 91, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zul’Jin' ,  'name_short' =>  'Zul’Jin' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 92, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hochkönig Maulgar' ,  'name_short' =>  'Maulgar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 93, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gruul der Drachenschlächter' ,  'name_short' =>  'Gruul' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 94, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Magtheridon' ,  'name_short' =>  'Magtheridon' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 95, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Verdammnislord Kazzak' ,  'name_short' =>  'Doom Kazzak' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 96, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Verdammniswandler' ,  'name_short' =>  'Doomwalker' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 97, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hydross der Unstete' ,  'name_short' =>  'Hydross' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 98, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tiefenlord Karathress' ,  'name_short' =>  'Karathress' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 99, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Morogrim Gezeitenwandler' ,  'name_short' =>  'Morogrim' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 100, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Leotheras l’Aveugle' ,  'name_short' =>  'Leotheras' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 101, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Das Grauen aus der Tiefe' ,  'name_short' =>  'Lurker' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 102, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lady Vashj' ,  'name_short' =>  'Vashj' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 103, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Al’Ar der Phönixgott' ,  'name_short' =>  'Al’Ar' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 104, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Leerhäscher' ,  'name_short' =>  'Reaver' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 105, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hochastromantin Solarian' ,  'name_short' =>  'Solarian' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 106, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kael’thas Sonnenwanderer' ,  'name_short' =>  'Kaelthas' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 107, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Furor Winterfrost' ,  'name_short' =>  'Winterchill' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 108, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Anetheron' ,  'name_short' =>  'Anetheron' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 109, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kaz’rogal' ,  'name_short' =>  'Kaz’rogal' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 110, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Azgalor' ,  'name_short' =>  'Azgalor' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 111, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Archimonde' ,  'name_short' =>  'Archimonde' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 112, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Oberster Kriegsfürst Naj’entus' ,  'name_short' =>  'Naj’entus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 113, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Supremus' ,  'name_short' =>  'Supremus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 114, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Akamas Schemen' ,  'name_short' =>  'Akama' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 115, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Teron Blutschatten' ,  'name_short' =>  'Gorefiend' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 116, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Essenz des Leidens' ,  'name_short' =>  'Essence' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 117, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gurtogg Siedeblut' ,  'name_short' =>  'Bloodboil' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 118, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Mutter Shahraz' ,  'name_short' =>  'Shahraz' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 119, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Rat der Illidari' ,  'name_short' =>  'Council' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 120, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Illidan Sturmgrimm' ,  'name_short' =>  'Illidan' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 121, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kalecgos' ,  'name_short' =>  'Kalecgos' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 122, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Brutallus' ,  'name_short' =>  'Brutallus' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 123, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Teufelsruch' ,  'name_short' =>  'Felmyst' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 124, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Alythess & Sacrolash' ,  'name_short' =>  'Twins' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 125, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'M’uru' ,  'name_short' =>  'M’uru' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 126, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kil’jaeden' ,  'name_short' =>  'Kil’jaeden' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 127, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan (10)' ,  'name_short' =>  'Anub’Rekhan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 128, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Großwitwe Faerlina (10)' ,  'name_short' =>  'Faerlina (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 129, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Maexxna (10)' ,  'name_short' =>  'Maexxna (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 130, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Noth der Seuchenfürst (10)' ,  'name_short' =>  'Noth (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 131, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Heigan der Unreine (10)' ,  'name_short' =>  'Heigan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 132, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Loatheb (10)' ,  'name_short' =>  'Loatheb (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 133, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Flickwerk (10)' ,  'name_short' =>  'Patchwerk (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 134, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus (10)' ,  'name_short' =>  'Grobbulus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 135, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gluth (10)' ,  'name_short' =>  'Gluth (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 136, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Thaddius (10)' ,  'name_short' =>  'Thaddius (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 137, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Instrukteur Razuvious (10)' ,  'name_short' =>  'Razuvious (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 138, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gothik der Ernter (10)' ,  'name_short' =>  'Gothik (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 139, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Vier Pferdemenschen (10)' ,  'name_short' =>  'Korth’azz (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 140, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Saphiron (10)' ,  'name_short' =>  'Sapphiron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 141, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad (10)' ,  'name_short' =>  'Kel’Thuzad (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 142, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Anub’Rekhan (25)' ,  'name_short' =>  'Anub’Rekhan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 143, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Großwitwe Faerlina (25)' ,  'name_short' =>  'Faerlina (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 144, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Maexxna (25)' ,  'name_short' =>  'Maexxna (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 145, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Noth der Seuchenfürst (25)' ,  'name_short' =>  'Noth (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 146, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Heigan der Unreine (25)' ,  'name_short' =>  'Heigan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 147, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Loatheb (25)' ,  'name_short' =>  'Loatheb (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 148, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Flickwerk (25)' ,  'name_short' =>  'Patchwerk (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 149, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Grobbulus (25)' ,  'name_short' =>  'Grobbulus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 150, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gluth (25)' ,  'name_short' =>  'Gluth (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 151, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Thaddius (25)' ,  'name_short' =>  'Thaddius (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 152, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Instrukteur Razuvious (25)' ,  'name_short' =>  'Razuvious (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 153, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gothik der Ernter  (25)' ,  'name_short' =>  'Gothik (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 154, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Vier Pferdemenschen (25)' ,  'name_short' =>  'Korth’azz (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 155, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Saphiron (25)' ,  'name_short' =>  'Sapphiron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 156, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kel’Thuzad (25)' ,  'name_short' =>  'Kel’Thuzad (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 157, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Malygos (10)' ,  'name_short' =>  'Malygos (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 158, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Archavon der Steinwächter (10)' ,  'name_short' =>  'Archavon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 159, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Emalon der Sturmwächter (10)' ,  'name_short' =>  'Emalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 160, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Archavon der Steinwächter (25)' ,  'name_short' =>  'Archavon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 161, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Emalon der Sturmwächter (25)' ,  'name_short' =>  'Emalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 162, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sartharion der Onyxwächter keine Drachen (10)' ,  'name_short' =>  'Sartarion 0d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 163, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sartharion der Onyxwächter ein Drache (10)' ,  'name_short' =>  'Sartarion 1d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 164, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sartharion der Onyxwächter zwei Drachen (10)' ,  'name_short' =>  'Sartarion 2d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 165, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sartharion der Onyxwächter drei Drachen (10)' ,  'name_short' =>  'Sartarion 3d (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 166, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sartharion der Onyxwächter keine Drachen (25)' ,  'name_short' =>  'Sartarion 0d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 167, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sartharion der Onyxwächter ein Drache (25)' ,  'name_short' =>  'Sartarion 1d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 168, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sartharion der Onyxwächter zwei Drachen (25)' ,  'name_short' =>  'Sartarion 2d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 169, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sartharion der Onyxwächter drei Drachen (25)' ,  'name_short' =>  'Sartarion 3d (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 170, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Malygos (25)' ,  'name_short' =>  'Malygos (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 171, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Flammenleviathan (10)' ,  'name_short' =>  'Leviathan (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 172, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Klingenschuppe (10)' ,  'name_short' =>  'Razorscale (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 173, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'XT-002 Dekonstruktor (10)' ,  'name_short' =>  'Deconstructor (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 174, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ignis, Meister des Eisenwerks (10)' ,  'name_short' =>  'Ignis (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 175, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Stahlbrecher (10)' ,  'name_short' =>  'Assembly (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 176, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kologarn (10)' ,  'name_short' =>  'Kologarn (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 177, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Auriaya (10)' ,  'name_short' =>  'Auriaya (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 178, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Mimiron (10)' ,  'name_short' =>  'Mimiron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 179, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hodir (10)' ,  'name_short' =>  'Hodir (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 180, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Thorim (10)' ,  'name_short' =>  'Thorim (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 181, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Freya (10)' ,  'name_short' =>  'Freya (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 182, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'General Vezax (10)' ,  'name_short' =>  'Vezax (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 183, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Yogg-Saron (10)' ,  'name_short' =>  'Yogg-Saron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 184, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Algalon der Beobachter (10)' ,  'name_short' =>  'Algalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 185, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Flammenleviathan (25)' ,  'name_short' =>  'Leviathan (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 186, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Klingenschuppe (25)' ,  'name_short' =>  'Razorscale (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 187, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'XT-002 Dekonstruktor (25)' ,  'name_short' =>  'Deconstructor (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 188, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ignis, Meister des Eisenwerks (25)' ,  'name_short' =>  'Ignis (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 189, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Stahlbrecher (25)' ,  'name_short' =>  'Assembly (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 190, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kologarn (25)' ,  'name_short' =>  'Kologarn (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 191, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Auriaya (25)' ,  'name_short' =>  'Auriaya (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 192, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Mimiron (25)' ,  'name_short' =>  'Mimiron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 193, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hodir (25)' ,  'name_short' =>  'Hodir (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 194, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Thorim (25)' ,  'name_short' =>  'Thorim (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 195, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Freya (25)' ,  'name_short' =>  'Freya (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 196, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Vezax (25)' ,  'name_short' =>  'Vezax (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 197, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Yogg-Saron (25)' ,  'name_short' =>  'Yogg-Saron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 198, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Algalon (10)' ,  'name_short' =>  'Algalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 199, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Bestien von Nordend (10)' ,  'name_short' =>  'Beasts (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 200, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fraktionschampions (10)' ,  'name_short' =>  'Champions (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 201, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Jaraxxus (10)' ,  'name_short' =>  'Jaraxxus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 202, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zwillings Val’kyr (10)' ,  'name_short' =>  'Valkyrs (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 203, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (10)' ,  'name_short' =>  'Anub (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 204, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Bestien von Nordend (25)' ,  'name_short' =>  'Beasts (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 205, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fraktionschampions (25)' ,  'name_short' =>  'Champions (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 206, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Jaraxxus (25)' ,  'name_short' =>  'Jaraxxus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 207, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zwillings Val’kyr (25)' ,  'name_short' =>  'Valkyrs (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 208, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (25)' ,  'name_short' =>  'Anub (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 209, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Bestien von Nordend (10)' ,  'name_short' =>  'Beasts (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 210, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fraktionschampions (10)' ,  'name_short' =>  'Champions (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 211, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Jaraxxus (10)' ,  'name_short' =>  'Jaraxxus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 212, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zwillings Val’kyr (10)' ,  'name_short' =>  'Valkyrs (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 213, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (10)' ,  'name_short' =>  'Anub (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 214, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Bestien von Nordend (25)' ,  'name_short' =>  'Beasts (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 215, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fraktionschampions (25)' ,  'name_short' =>  'Champions (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 216, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Jaraxxus (25)' ,  'name_short' =>  'Jaraxxus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 217, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zwillings Val’kyr (25)' ,  'name_short' =>  'Valkyrs (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 218, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Anub Arak (25)' ,  'name_short' =>  'Anub (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 219, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (10)' ,  'name_short' =>  'Onyxia (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 220, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (10)' ,  'name_short' =>  'Onyxia (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 221, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (25)' ,  'name_short' =>  'Onyxia (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 222, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Onyxia (25)' ,  'name_short' =>  'Onyxia (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 223, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Mark’gar (10)' ,  'name_short' =>  'Marrowgar (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 224, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Mark’gar (10HM)' ,  'name_short' =>  'Marrowgar (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 225, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lady Todeswisper (10)' ,  'name_short' =>  'Deathwisper (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 226, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lady Todeswisper (10HM)' ,  'name_short' =>  'Deathwisper (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 227, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Luftschiffkampf (10)' ,  'name_short' =>  'Gunship (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 228, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Luftschiffkampf (10HM)' ,  'name_short' =>  'Gunship (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 229, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesbringer Saurfang (10)' ,  'name_short' =>  'Saurfang (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 230, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesbringer Saurfang (10HM)' ,  'name_short' =>  'Saurfang (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 231, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fauldarm (10)' ,  'name_short' =>  'Festergut (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 232, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fauldarm (10HM)' ,  'name_short' =>  'Festergut (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 233, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Modermiene (10)' ,  'name_short' =>  'Rotface (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 234, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Modermiene (10HM)' ,  'name_short' =>  'Rotface (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 235, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Professeur Seuchenmord (10)' ,  'name_short' =>  'Putricide (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 236, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Professeur Seuchenmord (10HM)' ,  'name_short' =>  'Putricide (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 237, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Prinz Valanar (10)' ,  'name_short' =>  'Princes (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 238, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Prinz Valanar (10HM)' ,  'name_short' =>  'Princes (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 239, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Blutkönigin Lana’thel (10)' ,  'name_short' =>  'Lana thel (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 240, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Blutkönigin Lana’thel (10HM)' ,  'name_short' =>  'Lana thel (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 241, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Valithria Traumwandler (10)' ,  'name_short' =>  'Valithria (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 242, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Valithria Traumwandler (10HM)' ,  'name_short' =>  'Valithria (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 243, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (10)' ,  'name_short' =>  'Sindragosa (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 244, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (10HM)' ,  'name_short' =>  'Sindragosa (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 245, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Lichkönig (10)' ,  'name_short' =>  'Lich King (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 246, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Lichkönig (10HM)' ,  'name_short' =>  'Lich King (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 247, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Mark’gar (25)' ,  'name_short' =>  'Marrowgar (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 248, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lord Mark’gar (25HM)' ,  'name_short' =>  'Marrowgar (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 249, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lady Todeswisper (25)' ,  'name_short' =>  'Deathwisper (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 250, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lady Todeswisper (25HM)' ,  'name_short' =>  'Deathwisper (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 251, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Luftschiffkampf (25)' ,  'name_short' =>  'Gunship (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 252, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Luftschiffkampf (25HM)' ,  'name_short' =>  'Gunship (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 253, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesbringer Saurfang (25)' ,  'name_short' =>  'Saurfang (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 254, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesbringer Saurfang (25HM)' ,  'name_short' =>  'Saurfang (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 255, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fauldarm (25)' ,  'name_short' =>  'Festergut (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 256, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Fauldarm (25HM)' ,  'name_short' =>  'Festergut (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 257, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Modermiene (25)' ,  'name_short' =>  'Rotface (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 258, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Modermiene (25HM)' ,  'name_short' =>  'Rotface (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 259, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Professeur Seuchenmord (25)' ,  'name_short' =>  'Putricide (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 260, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Professeur Seuchenmord (25HM)' ,  'name_short' =>  'Putricide (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 261, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Prinz Valanar (25)' ,  'name_short' =>  'Princes (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 262, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Prinz Valanar (25HM)' ,  'name_short' =>  'Princes (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 263, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Blutkönigin Lana’thel (25)' ,  'name_short' =>  'Lana thel (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 264, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Blutkönigin Lana’thel (25HM)' ,  'name_short' =>  'Lana thel (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 265, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Valithria Traumwandler (25)' ,  'name_short' =>  'Valithria (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 266, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Valithria Traumwandler (25HM)' ,  'name_short' =>  'Valithria (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 267, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (25)' ,  'name_short' =>  'Sindragosa (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 268, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sindragosa (25HM)' ,  'name_short' =>  'Sindragosa (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 269, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Lichkönig (25)' ,  'name_short' =>  'Lich King (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 270, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Lichkönig (25HM)' ,  'name_short' =>  'Lich King (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 271, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halion (10)' ,  'name_short' =>  'Halion (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 272, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halion (10HM)' ,  'name_short' =>  'Halion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 273, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halion (25)' ,  'name_short' =>  'Halion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 274, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halion (25HM)' ,  'name_short' =>  'Halion (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 275, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (10)' ,  'name_short' =>  'Magmaw (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 276, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (10HM)' ,  'name_short' =>  'Magmaw (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 277, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (25)' ,  'name_short' =>  'Magmaw (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 278, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Magmaw (25HM)' ,  'name_short' =>  'Magmaw (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 279, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (10)' ,  'name_short' =>  'Omnotron Defense System (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 280, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (10HM)' ,  'name_short' =>  'Omnotron Defense System (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 281, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (25)' ,  'name_short' =>  'Omnotron Defense System (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 282, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Omnotron Defense System (25HM)' ,  'name_short' =>  'Omnotron Defense System (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 283, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (10)' ,  'name_short' =>  'Maloriak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 284, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (10HM)' ,  'name_short' =>  'Maloriak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 285, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (25)' ,  'name_short' =>  'Maloriak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 286, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Maloriak (25HM)' ,  'name_short' =>  'Maloriak (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 287, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (10)' ,  'name_short' =>  'Atramedes (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 288, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (10HM)' ,  'name_short' =>  'Atramedes (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 289, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (25)' ,  'name_short' =>  'Atramedes (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 290, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Atramedes (25HM)' ,  'name_short' =>  'Atramedes (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 291, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (10)' ,  'name_short' =>  'Chimaeron (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 292, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (10HM)' ,  'name_short' =>  'Chimaeron (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 293, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (25)' ,  'name_short' =>  'Chimaeron (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 294, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Chimaeron (25HM)' ,  'name_short' =>  'Chimaeron (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 295, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (10)' ,  'name_short' =>  'Nefarian (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 296, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (10HM)' ,  'name_short' =>  'Nefarian (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 297, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (25)' ,  'name_short' =>  'Nefarian (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 298, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Nefarian (25HM)' ,  'name_short' =>  'Nefarian (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 299, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (10)' ,  'name_short' =>  'Halfus Wyrmbreaker (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 300, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (10HM)' ,  'name_short' =>  'Halfus Wyrmbreaker (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 301, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (25)' ,  'name_short' =>  'Halfus Wyrmbreaker (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 302, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Halfus Wyrmbreaker (25HM)' ,  'name_short' =>  'Halfus Wyrmbreaker (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 303, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (10)' ,  'name_short' =>  'Valiona & Theralion (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 304, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (10HM)' ,  'name_short' =>  'Valiona & Theralion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 305, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (25)' ,  'name_short' =>  'Valiona & Theralion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 306, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Valiona & Theralion (25HM)' ,  'name_short' =>  'Valiona & Theralion (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 307, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (10)' ,  'name_short' =>  'Twilight Ascendant Council (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 308, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (10HM)' ,  'name_short' =>  'Twilight Ascendant Council (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 309, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (25)' ,  'name_short' =>  'Twilight Ascendant Council (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 310, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Twilight Ascendant Council (25HM)' ,  'name_short' =>  'Twilight Ascendant Council (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 311, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (10)' ,  'name_short' =>  'Cho‘gall (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 312, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (10HM)' ,  'name_short' =>  'Cho‘gall (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 313, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (25)' ,  'name_short' =>  'Cho‘gall (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 314, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Cho‘gall (25HM)' ,  'name_short' =>  'Cho‘gall (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 315, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sinestra (10HM)' ,  'name_short' =>  'Sinestra (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 316, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sinestra (25HM)' ,  'name_short' =>  'Sinestra (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 317, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (10)' ,  'name_short' =>  'Conclave of Wind (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 318, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (10HM)' ,  'name_short' =>  'Conclave of Wind (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 319, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (25)' ,  'name_short' =>  'Conclave of Wind (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 320, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Conclave of Wind (25HM)' ,  'name_short' =>  'Conclave of Wind (25HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 321, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (10)' ,  'name_short' =>  'Al‘akir (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 322, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (10HM)' ,  'name_short' =>  'Al‘akir (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 323, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (25)' ,  'name_short' =>  'Al‘akir (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => 324, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Al‘akir (25HM)' ,  'name_short' =>  'Al‘akir (25HM)' );
		
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
	}
}


/**
 * installer for tier 12 firelands raid instance
 *
 */
function update_wow_fl()
{
	//@todo
}

/**
 * installer for tier 13 Dragon soul raid instance
 *
 */
function update_wow_ds()
{
	
	global $db, $table_prefix, $umil, $user;
    $sql = "select count(imagename) as installcheck from " . $table_prefix . "bbdkp_zonetable where game = 'wow' and imagename like ('dragonsoul%') ";
	$result = $db->sql_query($sql);
	$installed = ((int) $db->sql_fetchfield('installcheck') > 0) ? true: false;
	$db->sql_freeresult($result);

	
	if($installed)
	{
		// don't override existing data
		return;
	}
	else
	{	
		
		// hide other zones
		$sql = 'UPDATE ' . $table_prefix . "bbdkp_zonetable SET  showzone = 0 , showzoneportal = 0 where game = 'wow'";
		$db->sql_query($sql);
		 
		//find highest slot 
		$sql = "select max(sequence) as maxseq from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxseq = ((int) $db->sql_fetchfield('maxseq'));	
		$db->sql_freeresult($result);
		
		// find highest id
		unset ( $sql_ary );
		$sql = "select max(id) as maxid from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxzoneid = ((int) $db->sql_fetchfield('maxid'));	
		$db->sql_freeresult($result);	
		
		// insert new zones
		$sql_ary = array ();
		$sql_ary[] = array( 'id' => $maxzoneid+1 , 'imagename' =>  'dragonsoul10' , 'game' =>  'wow' ,  'tier' =>  'T13' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5892' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+1);
		$sql_ary[] = array( 'id' => $maxzoneid+2 , 'imagename' =>  'dragonsoulh10' , 'game' =>  'wow' ,  'tier' =>  'T13' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5892' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+2);
		$sql_ary[] = array( 'id' => $maxzoneid+3 , 'imagename' =>  'dragonsoul25' , 'game' =>  'wow' ,  'tier' =>  'T13' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5892' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+3);
		$sql_ary[] = array( 'id' => $maxzoneid+4 , 'imagename' =>  'dragonsoulh25' , 'game' =>  'wow' ,  'tier' =>  'T13' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '5892' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+4);
		$db->sql_multi_insert ($table_prefix . 'bbdkp_zonetable', $sql_ary );
		
		// find highest boss id 
		unset ( $sql_ary );
		$sql = "select max(id) as maxbossid from " . $table_prefix . "bbdkp_bosstable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxid = ((int) $db->sql_fetchfield('maxbossid'));	
		$db->sql_freeresult($result);	

		// insert new bosses 
		$sql_ary[] = array('id' => $maxid+1, 'imagename' => 'morchok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '55265' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+2, 'imagename' => 'zonozz' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '55308' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+3, 'imagename' => 'yorsahj' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '55312' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+4, 'imagename' => 'hagara' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '55689' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+5, 'imagename' => 'ultraxion' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '55294' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+6, 'imagename' => 'blackhorn' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '56427' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+7, 'imagename' => 'spinedeathwing' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '53879' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+8, 'imagename' => 'madnessdeathwing' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '56173' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
	
		$sql_ary[] = array('id' => $maxid+9, 'imagename' => 'morchok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '55265' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+10, 'imagename' => 'zonozz' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '55308' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+11, 'imagename' => 'yorsahj' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '55312' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+12, 'imagename' => 'hagara' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '55689' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+13, 'imagename' => 'ultraxion' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '55294' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+14, 'imagename' => 'blackhorn' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '56427' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+15, 'imagename' => 'spinedeathwing' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '53879' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+16, 'imagename' => 'madnessdeathwing' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '56173' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );

		$sql_ary[] = array('id' => $maxid+17, 'imagename' => 'morchok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '55265' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+18, 'imagename' => 'zonozz' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '55308' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+19, 'imagename' => 'yorsahj' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '55312' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+20, 'imagename' => 'hagara' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '55689' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+21, 'imagename' => 'ultraxion' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '55294' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+22, 'imagename' => 'blackhorn' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '56427' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' => 1  );
		$sql_ary[] = array('id' => $maxid+23, 'imagename' => 'spinedeathwing' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '53879' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+24, 'imagename' => 'madnessdeathwing' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '56173' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' => 1 );
	
		$sql_ary[] = array('id' => $maxid+25, 'imagename' => 'morchok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '55265' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+26, 'imagename' => 'zonozz' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '55308' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+27, 'imagename' => 'yorsahj' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '55312' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+28, 'imagename' => 'hagara' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '55689' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+29, 'imagename' => 'ultraxion' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '55294' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+30, 'imagename' => 'blackhorn' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '56427' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+31, 'imagename' => 'spinedeathwing' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '53879' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+32, 'imagename' => 'madnessdeathwing' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '56173' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
	
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_bosstable', $sql_ary );
		
		// insert new language table values 
		unset ( $sql_ary );
		// zones
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Dragon Soul (10)' ,  'name_short' =>  'DS 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Dragon Soul (10HM)' ,  'name_short' =>  'DS 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Dragon Soul (25)' ,  'name_short' =>  'DS 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Dragon Soul (25HM)' ,  'name_short' =>  'DS 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’Âme des dragons (10)' ,  'name_short' =>  'DS 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’Âme des dragons (10HM)' ,  'name_short' =>  'DS 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’Âme des dragons (25)' ,  'name_short' =>  'DS 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'L’Âme des dragons (25HM)' ,  'name_short' =>  'DS 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Drachenseele (10)' ,  'name_short' =>  'DS 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Drachenseele (10HM)' ,  'name_short' =>  'DS 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Drachenseele (25)' ,  'name_short' =>  'DS 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Drachenseele (25HM)' ,  'name_short' =>  'DS 25HM' );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
		//Morchokk
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Morchok (10)' ,  'name_short' =>  'Morchok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Morchok (10HM)' ,  'name_short' =>  'Morchok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Morchok (25)' ,  'name_short' =>  'Morchok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+25, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Morchok (25HM)' ,  'name_short' =>  'Morchok (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Morchok (10)' ,  'name_short' =>  'Morchok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Morchok (10HM)' ,  'name_short' =>  'Morchok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Morchok (25)' ,  'name_short' =>  'Morchok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+25, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Morchok (25HM)' ,  'name_short' =>  'Morchok (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Morchok (10)' ,  'name_short' =>  'Morchok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Morchok (10HM)' ,  'name_short' =>  'Morchok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Morchok (25)' ,  'name_short' =>  'Morchok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+25, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Morchok (25HM)' ,  'name_short' =>  'Morchok (25HM)' );
		
		//Zon‘ozz
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Warlord Zon’ozz (10)' ,  'name_short' =>  'Zon’ozz (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Warlord Zon’ozz (10HM)' ,  'name_short' =>  'Zon’ozz (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Warlord Zon’ozz (25)' ,  'name_short' =>  'Zon’ozz (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+26, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Warlord Zon’ozz (25HM)' ,  'name_short' =>  'Zon’ozz (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur de guerre Zon’ozz  (10)' ,  'name_short' =>  'Zon’ozz (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur de guerre Zon’ozz  (10HM)' ,  'name_short' =>  'Zon’ozz (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur de guerre Zon’ozz  (25)' ,  'name_short' =>  'Zon’ozz (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+26, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur de guerre Zon’ozz  (25HM)' ,  'name_short' =>  'Zon’ozz (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kriegsherr Zon‘ozz  (10)' ,  'name_short' =>  'Zon‘ozz (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kriegsherr Zon‘ozz  (10HM)' ,  'name_short' =>  'Zon‘ozz (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kriegsherr Zon‘ozz  (25)' ,  'name_short' =>  'Zon‘ozz (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+26, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kriegsherr Zon‘ozz  (25HM)' ,  'name_short' =>  'Zon‘ozz (25HM)' );
		
		//Yor'sahj the Unsleeping 
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj the Unsleeping (10)' ,  'name_short' =>  'Yor’sahj (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj the Unsleeping (10HM)' ,  'name_short' =>  'Yor’sahj (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj the Unsleeping (25)' ,  'name_short' =>  'Yor’sahj (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+27, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj the Unsleeping (25HM)' ,  'name_short' =>  'Yor’sahj (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj l’Insomniaque (10)' ,  'name_short' =>  'Yor’sahj  (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj l’Insomniaque (10HM)' ,  'name_short' =>  'Yor’sahj (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj l’Insomniaque (25)' ,  'name_short' =>  'Yor’sahj (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+27, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj l’Insomniaque (25HM)' ,  'name_short' =>  'Yor’sahj (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj der Unermüdliche (10)' ,  'name_short' =>  'Yor’sahj (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj der Unermüdliche (10HM)' ,  'name_short' =>  'Yor’sahj (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj der Unermüdliche (25)' ,  'name_short' =>  'Yor’sahj (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+27, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Yor’sahj der Unermüdliche (25HM)' ,  'name_short' =>  'Yor’sahj (25HM)' );
		
		//Hagara la Lieuse des tempêtes 
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hagara the Stormbinder (10)' ,  'name_short' =>  'Hagara (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hagara the Stormbinder (10HM)' ,  'name_short' =>  'Hagara (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hagara the Stormbinder (25)' ,  'name_short' =>  'Hagara (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+28, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Hagara the Stormbinder (25HM)' ,  'name_short' =>  'Hagara (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hagara la Lieuse des tempêtes (10)' ,  'name_short' =>  'Hagara  (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hagara la Lieuse des tempêtes (10HM)' ,  'name_short' =>  'Hagara (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hagara la Lieuse des tempêtes (25)' ,  'name_short' =>  'Hagara (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+28, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Hagara la Lieuse des tempêtes (25HM)' ,  'name_short' =>  'Hagara (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hagara die Sturmbinderin (10)' ,  'name_short' =>  'Hagara (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hagara die Sturmbinderin (10HM)' ,  'name_short' =>  'Hagara (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hagara die Sturmbinderin (25)' ,  'name_short' =>  'Hagara (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+28, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Hagara die Sturmbinderin (25HM)' ,  'name_short' =>  'Hagara (25HM)' );

		//Ultraxion
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (10)' ,  'name_short' =>  'Ultraxion (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (10HM)' ,  'name_short' =>  'Ultraxion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (25)' ,  'name_short' =>  'Ultraxion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+29, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (25HM)' ,  'name_short' =>  'Ultraxion (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (10)' ,  'name_short' =>  'Ultraxion  (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (10HM)' ,  'name_short' =>  'Ultraxion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (25)' ,  'name_short' =>  'Ultraxion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+29, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (25HM)' ,  'name_short' =>  'Ultraxion (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (10)' ,  'name_short' =>  'Ultraxion (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (10HM)' ,  'name_short' =>  'Ultraxion (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (25)' ,  'name_short' =>  'Ultraxion (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+29, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ultraxion (25HM)' ,  'name_short' =>  'Ultraxion (25HM)' );		
		
		// Warmaster Blackhorn
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Warmaster Blackhorn (10)' ,  'name_short' =>  'Blackhorn (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Warmaster Blackhorn (10HM)' ,  'name_short' =>  'Blackhorn (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Warmaster Blackhorn (25)' ,  'name_short' =>  'Blackhorn (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+30, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Warmaster Blackhorn (25HM)' ,  'name_short' =>  'Blackhorn (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maître de guerre Corne-Noire (10)' ,  'name_short' =>  'Corne-Noire (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maître de guerre Corne-Noire (10HM)' ,  'name_short' =>  'Corne-Noire (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maître de guerre Corne-Noire (25)' ,  'name_short' =>  'Corne-Noire (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+30, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Maître de guerre Corne-Noire (25HM)' ,  'name_short' =>  'Corne-Noire (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kriegsmeister Schwarzhorn (10)' ,  'name_short' =>  'Schwarzhorn (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kriegsmeister Schwarzhorn (10HM)' ,  'name_short' =>  'Schwarzhorn (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kriegsmeister Schwarzhorn (25)' ,  'name_short' =>  'Schwarzhorn (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+30, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kriegsmeister Schwarzhorn (25HM)' ,  'name_short' =>  'Schwarzhorn (25HM)' );

		
		// Spine of Deathwing
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Spine of Deathwing (10)' ,  'name_short' =>  'Blackhorn (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Spine of Deathwing (10HM)' ,  'name_short' =>  'Blackhorn (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Spine of Deathwing (25)' ,  'name_short' =>  'Blackhorn (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+31, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Spine of Deathwing (25HM)' ,  'name_short' =>  'Blackhorn (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Échine d’Aile de mort (10)' ,  'name_short' =>  'Échine (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Échine d’Aile de mort (10HM)' ,  'name_short' =>  'Échine (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Échine d’Aile de mort (25)' ,  'name_short' =>  'Échine (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+31, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Échine d’Aile de mort (25HM)' ,  'name_short' =>  'Échine (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesschwinges Rückgrat (10)' ,  'name_short' =>  'Rückgrat (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesschwinges Rückgrat (10HM)' ,  'name_short' =>  'Rückgrat (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesschwinges Rückgrat (25)' ,  'name_short' =>  'Rückgrat (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+31, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesschwinges Rückgrat (25HM)' ,  'name_short' =>  'Rückgrat (25HM)' );

		//Madness of Deathwing LAST BOSS OF CATACLYSM
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Madness of Deathwing (10)' ,  'name_short' =>  'Madness (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Madness of Deathwing (10HM)' ,  'name_short' =>  'Madness (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Madness of Deathwing (25)' ,  'name_short' =>  'Madness (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+32, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Madness of Deathwing (25HM)' ,  'name_short' =>  'Madness (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Folie d’Aile de mort (10)' ,  'name_short' =>  'Folie (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Folie d’Aile de mort (10HM)' ,  'name_short' =>  'Folie (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Folie d’Aile de mort (25)' ,  'name_short' =>  'Folie (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+32, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Folie d’Aile de mort (25HM)' ,  'name_short' =>  'Folie (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesschwinges Wahnsinn (10)' ,  'name_short' =>  'Wahnsinn (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesschwinges Wahnsinn (10HM)' ,  'name_short' =>  'Wahnsinn (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesschwinges Wahnsinn (25)' ,  'name_short' =>  'Wahnsinn (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+32, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Todesschwinges Wahnsinn (25HM)' ,  'name_short' =>  'Wahnsinn (25HM)' );
		
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
	}		
}

/**
 * installer for tier 14 Mogu'shan Vaults raid instance
 *
 */
function update_wow_mv()
{
	
	global $db, $table_prefix, $umil, $user;
    $sql = "select count(imagename) as installcheck from " . $table_prefix . "bbdkp_zonetable where game = 'wow' and imagename like ('mogushanvaults%') ";
	$result = $db->sql_query($sql);
	$installed = ((int) $db->sql_fetchfield('installcheck') > 0) ? true: false;
	$db->sql_freeresult($result);

	
	if($installed)
	{
		// don't override existing data
		return;
	}
	else
	{	
		
		// hide other zones
		$sql = 'UPDATE ' . $table_prefix . "bbdkp_zonetable SET  showzone = 0 , showzoneportal = 0 where game = 'wow'";
		$db->sql_query($sql);
		 
		//find highest slot 
		$sql = "select max(sequence) as maxseq from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxseq = ((int) $db->sql_fetchfield('maxseq'));	
		$db->sql_freeresult($result);
		
		// find highest id
		unset ( $sql_ary );
		$sql = "select max(id) as maxid from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxzoneid = ((int) $db->sql_fetchfield('maxid'));	
		$db->sql_freeresult($result);	
		
		// insert new zones
		$sql_ary = array ();
		$sql_ary[] = array( 'id' => $maxzoneid+1 , 'imagename' =>  'mogushanvaults10' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6125' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+1);
		$sql_ary[] = array( 'id' => $maxzoneid+2 , 'imagename' =>  'mogushanvaultsh10' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6125' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+2);
		$sql_ary[] = array( 'id' => $maxzoneid+3 , 'imagename' =>  'mogushanvaults25' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6125' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+3);
		$sql_ary[] = array( 'id' => $maxzoneid+4 , 'imagename' =>  'mogushanvaultsh25' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6125' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+4);
		$db->sql_multi_insert ($table_prefix . 'bbdkp_zonetable', $sql_ary );
		
		// find highest boss id 
		unset ( $sql_ary );
		$sql = "select max(id) as maxbossid from " . $table_prefix . "bbdkp_bosstable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxid = ((int) $db->sql_fetchfield('maxbossid'));	
		$db->sql_freeresult($result);	

		// insert new bosses 
		$sql_ary[] = array('id' => $maxid+1, 'imagename' => 'the_stone_guard' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '60047' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+2, 'imagename' => 'feng_the_accursed' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '60009' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+3, 'imagename' => 'garajal_the_spiritbinder' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '60143' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+4, 'imagename' => 'the_spirit_kings' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '61421' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+5, 'imagename' => 'elegon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '60410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+6, 'imagename' => 'will_of_the_emperor' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '60400' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$sql_ary[] = array('id' => $maxid+7, 'imagename' => 'the_stone_guard' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '60047' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+8, 'imagename' => 'feng_the_accursed' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '60009' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+9, 'imagename' => 'garajal_the_spiritbinder' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '60143' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+10, 'imagename' => 'the_spirit_kings' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '61421' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+11, 'imagename' => 'elegon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '60410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+12, 'imagename' => 'will_of_the_emperor' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '60400' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$sql_ary[] = array('id' => $maxid+13, 'imagename' => 'the_stone_guard' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '60047' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+14, 'imagename' => 'feng_the_accursed' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '60009' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+15, 'imagename' => 'garajal_the_spiritbinder' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '60143' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+16, 'imagename' => 'the_spirit_kings' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '61421' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+17, 'imagename' => 'elegon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '60410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+18, 'imagename' => 'will_of_the_emperor' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '60400' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' => 1  );

		$sql_ary[] = array('id' => $maxid+19, 'imagename' => 'the_stone_guard' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '60047' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+20, 'imagename' => 'feng_the_accursed' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '60009' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+21, 'imagename' => 'garajal_the_spiritbinder' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '60143' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+22, 'imagename' => 'the_spirit_kings' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '61421' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+23, 'imagename' => 'elegon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '60410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+24, 'imagename' => 'will_of_the_emperor' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '60400' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_bosstable', $sql_ary );
		
		// insert new language table values 
		unset ( $sql_ary );
		// zones
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Mogu’shan Vaults (10)' ,  'name_short' =>  'MV 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Mogu’shan Vaults (10HM)' ,  'name_short' =>  'MV 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Mogu’shan Vaults (25)' ,  'name_short' =>  'MV 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Mogu’shan Vaults (25HM)' ,  'name_short' =>  'MV 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Caveaux Mogu’shan (10)' ,  'name_short' =>  'MV 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Caveaux Mogu’shan (10HM)' ,  'name_short' =>  'MV 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Caveaux Mogu’shan (25)' ,  'name_short' =>  'MV 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Caveaux Mogu’shan (25HM)' ,  'name_short' =>  'MV 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Mogu’shangewölbe (10)' ,  'name_short' =>  'MV 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Mogu’shangewölbe (10HM)' ,  'name_short' =>  'MV 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Mogu’shangewölbe (25)' ,  'name_short' =>  'MV 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Mogu’shangewölbe (25HM)' ,  'name_short' =>  'MV 25HM' );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
		//The Stone Guard
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Stone Guard (10)' ,  'name_short' =>  'The Stone Guard (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Stone Guard (10HM)' ,  'name_short' =>  'The Stone Guard (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Stone Guard (25)' ,  'name_short' =>  'The Stone Guard (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Stone Guard (25HM)' ,  'name_short' =>  'The Stone Guard (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le garde de pierre (10)' ,  'name_short' =>  'Le garde de pierre (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le garde de pierre (10HM)' ,  'name_short' =>  'Le garde de pierre (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le garde de pierre (25)' ,  'name_short' =>  'Le garde de pierre (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Le garde de pierre (25HM)' ,  'name_short' =>  'Le garde de pierre (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Steinwache (10)' ,  'name_short' =>  'Die Steinwache (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Steinwache (10HM)' ,  'name_short' =>  'Die Steinwache (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Steinwache (25)' ,  'name_short' =>  'Die Steinwache (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Steinwache (25HM)' ,  'name_short' =>  'Die Steinwache (25HM)' );
		
		//Feng the Accursed
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Feng the Accursed (10)' ,  'name_short' =>  'Feng the Accursed (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Feng the Accursed (10HM)' ,  'name_short' =>  'Feng the Accursed (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Feng the Accursed (25)' ,  'name_short' =>  'Feng the Accursed (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Feng the Accursed (25HM)' ,  'name_short' =>  'Feng the Accursed (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Feng le Maudit (10)' ,  'name_short' =>  'Feng le Maudit (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Feng le Maudit (10HM)' ,  'name_short' =>  'Feng le Maudit (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Feng le Maudit (25)' ,  'name_short' =>  'Feng le Maudit (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Feng le Maudit (25HM)' ,  'name_short' =>  'Feng le Maudit (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Feng der Verfluchte (10)' ,  'name_short' =>  'Feng der Verfluchte (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Feng der Verfluchte (10HM)' ,  'name_short' =>  'Feng der Verfluchte (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Feng der Verfluchte (25)' ,  'name_short' =>  'Feng der Verfluchte (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Feng der Verfluchte (25HM)' ,  'name_short' =>  'Feng der Verfluchte (25HM)' );
		
		//Gara'jal the Spiritbinder
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal the Spiritbinder (10)' ,  'name_short' =>  'Gara’jal the Spiritbinder (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal the Spiritbinder (10HM)' ,  'name_short' =>  'Gara’jal the Spiritbinder (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal the Spiritbinder (25)' ,  'name_short' =>  'Gara’jal the Spiritbinder (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal the Spiritbinder (25HM)' ,  'name_short' =>  'Gara’jal the Spiritbinder (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal le Lieur d’esprit (10)' ,  'name_short' =>  'Gara’jal le Lieur d’esprit (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal le Lieur d’esprit (10HM)' ,  'name_short' =>  'Gara’jal le Lieur d’esprit (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal le Lieur d’esprit (25)' ,  'name_short' =>  'Gara’jal le Lieur d’esprit (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal le Lieur d’esprit (25HM)' ,  'name_short' =>  'Gara’jal le Lieur d’esprit (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal der Geisterbinder (10)' ,  'name_short' =>  'Gara’jal der Geisterbinder (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal der Geisterbinder (10HM)' ,  'name_short' =>  'Gara’jal der Geisterbinder (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal der Geisterbinder (25)' ,  'name_short' =>  'Gara’jal der Geisterbinder (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Gara’jal der Geisterbinder (25HM)' ,  'name_short' =>  'Gara’jal der Geisterbinder (25HM)' );
		
		//The Spirit Kings
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Spirit Kings (10)' ,  'name_short' =>  'The Spirit Kings (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Spirit Kings (10HM)' ,  'name_short' =>  'The Spirit Kings (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Spirit Kings (25)' ,  'name_short' =>  'The Spirit Kings (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'The Spirit Kings (25HM)' ,  'name_short' =>  'The Spirit Kings (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les esprits-rois (10)' ,  'name_short' =>  'Les esprits-rois (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les esprits-rois (10HM)' ,  'name_short' =>  'Les esprits-rois (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les esprits-rois (25)' ,  'name_short' =>  'Les esprits-rois (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Les esprits-rois (25HM)' ,  'name_short' =>  'Les esprits-rois (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Geisterkönige (10)' ,  'name_short' =>  'Die Geisterkönige (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Geisterkönige (10HM)' ,  'name_short' =>  'Die Geisterkönige (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Geisterkönige (25)' ,  'name_short' =>  'Die Geisterkönige (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Die Geisterkönige (25HM)' ,  'name_short' =>  'Die Geisterkönige (25HM)' );

		//Elegon
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Elegon (10)' ,  'name_short' =>  'Elegon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Elegon (10HM)' ,  'name_short' =>  'Elegon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Elegon (25)' ,  'name_short' =>  'Elegon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Elegon (25HM)' ,  'name_short' =>  'Elegon (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Elegon (10)' ,  'name_short' =>  'Elegon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Elegon (10HM)' ,  'name_short' =>  'Elegon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Elegon (25)' ,  'name_short' =>  'Elegon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Elegon (25HM)' ,  'name_short' =>  'Elegon (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Elegon (10)' ,  'name_short' =>  'Elegon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Elegon (10HM)' ,  'name_short' =>  'Elegon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Elegon (25)' ,  'name_short' =>  'Elegon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Elegon (25HM)' ,  'name_short' =>  'Elegon (25HM)' );		
		
		//Will of the Emperor
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Will of the Emperor (10)' ,  'name_short' =>  'Will of the Emperor (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Will of the Emperor (10HM)' ,  'name_short' =>  'Will of the Emperor (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Will of the Emperor (25)' ,  'name_short' =>  'Will of the Emperor (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Will of the Emperor (25HM)' ,  'name_short' =>  'Will of the Emperor (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Volonté de l’empereur (10)' ,  'name_short' =>  'Volonté de l’empereur (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Volonté de l’empereur (10HM)' ,  'name_short' =>  'Volonté de l’empereur (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Volonté de l’empereur (25)' ,  'name_short' =>  'Volonté de l’empereur (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Volonté de l’empereur (25HM)' ,  'name_short' =>  'Volonté de l’empereur (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Wille des Kaisers (10)' ,  'name_short' =>  'Der Wille des Kaisers (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Wille des Kaisers (10HM)' ,  'name_short' =>  'Der Wille des Kaisers (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Wille des Kaisers (25)' ,  'name_short' =>  'Der Wille des Kaisers (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der Wille des Kaisers (25HM)' ,  'name_short' =>  'Der Wille des Kaisers (25HM)' );


		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
	}		
}


/**
 * installer for tier 14 Heart of Fear raid instance
 *
 */
function update_wow_hof()
{
	
	global $db, $table_prefix, $umil, $user;
    $sql = "select count(imagename) as installcheck from " . $table_prefix . "bbdkp_zonetable where game = 'wow' and imagename like ('heartoffear%') ";
	$result = $db->sql_query($sql);
	$installed = ((int) $db->sql_fetchfield('installcheck') > 0) ? true: false;
	$db->sql_freeresult($result);

	
	if($installed)
	{
		// don't override existing data
		return;
	}
	else
	{
		//find highest slot 
		$sql = "select max(sequence) as maxseq from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxseq = ((int) $db->sql_fetchfield('maxseq'));	
		$db->sql_freeresult($result);
		
		// find highest id
		unset ( $sql_ary );
		$sql = "select max(id) as maxid from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxzoneid = ((int) $db->sql_fetchfield('maxid'));	
		$db->sql_freeresult($result);	
		
		// insert new zones
		$sql_ary = array ();
		$sql_ary[] = array( 'id' => $maxzoneid+1 , 'imagename' =>  'heartoffear10' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6297' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+1);
		$sql_ary[] = array( 'id' => $maxzoneid+2 , 'imagename' =>  'heartoffearh10' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6297' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+2);
		$sql_ary[] = array( 'id' => $maxzoneid+3 , 'imagename' =>  'heartoffear25' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6297' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+3);
		$sql_ary[] = array( 'id' => $maxzoneid+4 , 'imagename' =>  'heartoffearh25' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6297' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+4);
		$db->sql_multi_insert ($table_prefix . 'bbdkp_zonetable', $sql_ary );
		
		// find highest boss id 
		unset ( $sql_ary );
		$sql = "select max(id) as maxbossid from " . $table_prefix . "bbdkp_bosstable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxid = ((int) $db->sql_fetchfield('maxbossid'));	
		$db->sql_freeresult($result);	

		// insert new bosses 
		$sql_ary[] = array('id' => $maxid+1, 'imagename' => 'imperial_vizier_zorlok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '66791' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+2, 'imagename' => 'blade_lord_tayak' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '63664' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+3, 'imagename' => 'garalon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '63667' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+4, 'imagename' => 'wind_lord_meljarak' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '65501' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+5, 'imagename' => 'amber_shaper_unsok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '60410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+6, 'imagename' => 'grand_empress_shekzeer' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '62837' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$sql_ary[] = array('id' => $maxid+7, 'imagename' => 'imperial_vizier_zorlok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '66791' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+8, 'imagename' => 'blade_lord_tayak' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '63664' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+9, 'imagename' => 'garalon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '63667' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+10, 'imagename' => 'wind_lord_meljarak' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '65501' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+11, 'imagename' => 'amber_shaper_unsok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '60410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+12, 'imagename' => 'grand_empress_shekzeer' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '62837' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$sql_ary[] = array('id' => $maxid+13, 'imagename' => 'imperial_vizier_zorlok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '66791' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+14, 'imagename' => 'blade_lord_tayak' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '63664' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+15, 'imagename' => 'garalon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '63667' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+16, 'imagename' => 'wind_lord_meljarak' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '65501' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+17, 'imagename' => 'amber_shaper_unsok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '60410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+18, 'imagename' => 'grand_empress_shekzeer' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '62837' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' => 1  );

		$sql_ary[] = array('id' => $maxid+19, 'imagename' => 'imperial_vizier_zorlok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '66791' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+20, 'imagename' => 'blade_lord_tayak' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '63664' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+21, 'imagename' => 'garalon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '63667' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+22, 'imagename' => 'wind_lord_meljarak' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '65501' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+23, 'imagename' => 'amber_shaper_unsok' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '60410' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+24, 'imagename' => 'grand_empress_shekzeer' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '62837' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_bosstable', $sql_ary );
		
		// insert new language table values 
		unset ( $sql_ary );
		// zones
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Heart of Fear (10)' ,  'name_short' =>  'HoF 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Heart of Fear (10HM)' ,  'name_short' =>  'HoF 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Heart of Fear (25)' ,  'name_short' =>  'HoF 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Heart of Fear (25HM)' ,  'name_short' =>  'HoF 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Cœur de la Peur (10)' ,  'name_short' =>  'HoF 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Cœur de la Peur (10HM)' ,  'name_short' =>  'HoF 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Cœur de la Peur (25)' ,  'name_short' =>  'HoF 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Cœur de la Peur (25HM)' ,  'name_short' =>  'HoF 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Herz der Angst (10)' ,  'name_short' =>  'HoF 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Herz der Angst (10HM)' ,  'name_short' =>  'HoF 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Herz der Angst (25)' ,  'name_short' =>  'HoF 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Das Herz der Angst (25HM)' ,  'name_short' =>  'HoF 25HM' );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
		//Imperial Vizier Zor’lok
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Imperial Vizier Zor’lok (10)' ,  'name_short' =>  'Zor’lok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Imperial Vizier Zor’lok (10HM)' ,  'name_short' =>  'Zor’lok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Imperial Vizier Zor’lok (25)' ,  'name_short' =>  'Zor’lok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Imperial Vizier Zor’lok (25HM)' ,  'name_short' =>  'Zor’lok (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Vizir impérial Zor’lok (10)' ,  'name_short' =>  'Zor’lok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Vizir impérial Zor’lok (10HM)' ,  'name_short' =>  'Zor’lok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Vizir impérial Zor’lok (25)' ,  'name_short' =>  'Zor’lok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Vizir impérial Zor’lok (25HM)' ,  'name_short' =>  'Zor’lok (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kaiserlicher Wesir Zor’lok (10)' ,  'name_short' =>  'Zor’lok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kaiserlicher Wesir Zor’lok (10HM)' ,  'name_short' =>  'Zor’lok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kaiserlicher Wesir Zor’lok (25)' ,  'name_short' =>  'Zor’lok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Kaiserlicher Wesir Zor’lok (25HM)' ,  'name_short' =>  'Zor’lok (25HM)' );
		
		//Blade Lord Ta’yak
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blade Lord Ta’yak (10)' ,  'name_short' =>  'Ta’yak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blade Lord Ta’yak (10HM)' ,  'name_short' =>  'Ta’yak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blade Lord Ta’yak (25)' ,  'name_short' =>  'Ta’yak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Blade Lord Ta’yak (25HM)' ,  'name_short' =>  'Ta’yak (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur des lames Ta’yak (10)' ,  'name_short' =>  'Ta’yak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur des lames Ta’yak (10HM)' ,  'name_short' =>  'Ta’yak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur des lames Ta’yak (25)' ,  'name_short' =>  'Ta’yak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur des lames Ta’yak (25HM)' ,  'name_short' =>  'Ta’yak (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Klingenfürst Ta’yak (10)' ,  'name_short' =>  'Ta’yak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Klingenfürst Ta’yak (10HM)' ,  'name_short' =>  'Ta’yak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Klingenfürst Ta’yak (25)' ,  'name_short' =>  'Ta’yak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Klingenfürst Ta’yak (25HM)' ,  'name_short' =>  'Ta’yak (25HM)' );
		
		//Garalon
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Garalon (10)' ,  'name_short' =>  'Garalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Garalon (10HM)' ,  'name_short' =>  'Garalon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Garalon (25)' ,  'name_short' =>  'Garalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Garalon (25HM)' ,  'name_short' =>  'Garalon (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Garalon (10)' ,  'name_short' =>  'Garalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Garalon (10HM)' ,  'name_short' =>  'Garalon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Garalon (25)' ,  'name_short' =>  'Garalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Garalon (25HM)' ,  'name_short' =>  'Garalon (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Garalon (10)' ,  'name_short' =>  'Garalon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Garalon (10HM)' ,  'name_short' =>  'Garalon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Garalon (25)' ,  'name_short' =>  'Garalon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Garalon (25HM)' ,  'name_short' =>  'Garalon (25HM)' );
		
		//Wind Lord Mel’jarak
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Wind Lord Mel’jarak (10)' ,  'name_short' =>  'Mel’jarak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Wind Lord Mel’jarak (10HM)' ,  'name_short' =>  'Mel’jarak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Wind Lord Mel’jarak (25)' ,  'name_short' =>  'Mel’jarak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Wind Lord Mel’jarak (25HM)' ,  'name_short' =>  'Mel’jarak (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur du Vent Mel’jarak (10)' ,  'name_short' =>  'Mel’jarak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur du Vent Mel’jarak (10HM)' ,  'name_short' =>  'Mel’jarak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur du Vent Mel’jarak (25)' ,  'name_short' =>  'Mel’jarak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Seigneur du Vent Mel’jarak (25HM)' ,  'name_short' =>  'Mel’jarak (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Windfürst Mel’jarak (10)' ,  'name_short' =>  'Mel’jarak (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Windfürst Mel’jarak (10HM)' ,  'name_short' =>  'Mel’jarak (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Windfürst Mel’jarak (25)' ,  'name_short' =>  'Mel’jarak (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Windfürst Mel’jarak (25HM)' ,  'name_short' =>  'Mel’jarak (25HM)' );

		//Amber-Shaper Un’sok
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Amber-Shaper Un’sok (10)' ,  'name_short' =>  'Un’sok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Amber-Shaper Un’sok (10HM)' ,  'name_short' =>  'Un’sok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Amber-Shaper Un’sok (25)' ,  'name_short' =>  'Un’sok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Amber-Shaper Un’sok (25HM)' ,  'name_short' =>  'Un’sok (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sculpte-ambre Un’sok (10)' ,  'name_short' =>  'Un’sok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sculpte-ambre Un’sok (10HM)' ,  'name_short' =>  'Un’sok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sculpte-ambre Un’sok (25)' ,  'name_short' =>  'Un’sok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sculpte-ambre Un’sok (25HM)' ,  'name_short' =>  'Un’sok (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Amberformer Un’sok (10)' ,  'name_short' =>  'Un’sok (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Amberformer Un’sok (10HM)' ,  'name_short' =>  'Un’sok (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Amberformer Un’sok (25)' ,  'name_short' =>  'Un’sok (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Amberformer Un’sok (25HM)' ,  'name_short' =>  'Un’sok (25HM)' );		
		
		//Grand Empress Shek’zeer
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grand Empress Shek’zeer (10)' ,  'name_short' =>  'Shek’zeer (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grand Empress Shek’zeer (10HM)' ,  'name_short' =>  'Shek’zeer (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grand Empress Shek’zeer (25)' ,  'name_short' =>  'Shek’zeer (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Grand Empress Shek’zeer (25HM)' ,  'name_short' =>  'Shek’zeer (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande impératrice Shek’zeer (10)' ,  'name_short' =>  'Shek’zeer (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande impératrice Shek’zeer (10HM)' ,  'name_short' =>  'Shek’zeer (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande impératrice Shek’zeer (25)' ,  'name_short' =>  'Shek’zeer (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Grande impératrice Shek’zeer (25HM)' ,  'name_short' =>  'Shek’zeer (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Großkaiserin Shek’zeer (10)' ,  'name_short' =>  'Shek’zeer (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Großkaiserin Shek’zeer (10HM)' ,  'name_short' =>  'Shek’zeer (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Großkaiserin Shek’zeer (25)' ,  'name_short' =>  'Shek’zeer (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Großkaiserin Shek’zeer (25HM)' ,  'name_short' =>  'Shek’zeer (25HM)' );


		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
	}		
}


/**
 * installer for tier 14 Terrace of Endless Spring raid instance
 *
 */
function update_wow_tes()
{
	
	global $db, $table_prefix, $umil, $user;
    $sql = "select count(imagename) as installcheck from " . $table_prefix . "bbdkp_zonetable where game = 'wow' and imagename like ('terraceofendlessspring%') ";
	$result = $db->sql_query($sql);
	$installed = ((int) $db->sql_fetchfield('installcheck') > 0) ? true: false;
	$db->sql_freeresult($result);

	
	if($installed)
	{
		// don't override existing data
		return;
	}
	else
	{
		//find highest slot 
		$sql = "select max(sequence) as maxseq from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxseq = ((int) $db->sql_fetchfield('maxseq'));	
		$db->sql_freeresult($result);
		
		// find highest id
		unset ( $sql_ary );
		$sql = "select max(id) as maxid from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxzoneid = ((int) $db->sql_fetchfield('maxid'));	
		$db->sql_freeresult($result);	
		
		// insert new zones
		$sql_ary = array ();
		$sql_ary[] = array( 'id' => $maxzoneid+1 , 'imagename' =>  'terraceofendlessspring10' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6067' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+1);
		$sql_ary[] = array( 'id' => $maxzoneid+2 , 'imagename' =>  'terraceofendlessspringh10' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6067' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+2);
		$sql_ary[] = array( 'id' => $maxzoneid+3 , 'imagename' =>  'terraceofendlessspring25' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6067' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+3);
		$sql_ary[] = array( 'id' => $maxzoneid+4 , 'imagename' =>  'terraceofendlessspringh25' , 'game' =>  'wow' ,  'tier' =>  'T14' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6067' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+4);
		$db->sql_multi_insert ($table_prefix . 'bbdkp_zonetable', $sql_ary );
		
		// find highest boss id 
		unset ( $sql_ary );
		$sql = "select max(id) as maxbossid from " . $table_prefix . "bbdkp_bosstable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxid = ((int) $db->sql_fetchfield('maxbossid'));	
		$db->sql_freeresult($result);	

		// insert new bosses 
		$sql_ary[] = array('id' => $maxid+1, 'imagename' => 'protectors_of_the_endless' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '60583' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+2, 'imagename' => 'tsulong' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '62442' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+3, 'imagename' => 'lei_shi' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '62983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+4, 'imagename' => 'sha_of_fear' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '60999' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );

		$sql_ary[] = array('id' => $maxid+5, 'imagename' => 'protectors_of_the_endless' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '60583' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+6, 'imagename' => 'tsulong' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '62442' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+7, 'imagename' => 'lei_shi' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '62983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+8, 'imagename' => 'sha_of_fear' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '60999' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );

		$sql_ary[] = array('id' => $maxid+9, 'imagename' => 'protectors_of_the_endless' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '60583' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+10, 'imagename' => 'tsulong' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '62442' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+11, 'imagename' => 'lei_shi' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '62983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+12, 'imagename' => 'sha_of_fear' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '60999' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );

		$sql_ary[] = array('id' => $maxid+13, 'imagename' => 'protectors_of_the_endless' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '60583' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+14, 'imagename' => 'tsulong' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '62442' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+15, 'imagename' => 'lei_shi' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '62983' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+16, 'imagename' => 'sha_of_fear' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '60999' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_bosstable', $sql_ary );
		
		// insert new language table values 
		unset ( $sql_ary );
		// zones
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Terrace of Endless Spring (10)' ,  'name_short' =>  'TES 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Terrace of Endless Spring (10HM)' ,  'name_short' =>  'TES 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Terrace of Endless Spring (25)' ,  'name_short' =>  'TES 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Terrace of Endless Spring (25HM)' ,  'name_short' =>  'TES 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Terrasse Printanière (10)' ,  'name_short' =>  'TES 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Terrasse Printanière (10HM)' ,  'name_short' =>  'TES 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Terrasse Printanière (25)' ,  'name_short' =>  'TES 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Terrasse Printanière (25HM)' ,  'name_short' =>  'TES 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Terrasse des Endlosen Frühlings (10)' ,  'name_short' =>  'TES 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Terrasse des Endlosen Frühlings (10HM)' ,  'name_short' =>  'TES 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Terrasse des Endlosen Frühlings (25)' ,  'name_short' =>  'TES 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Terrasse des Endlosen Frühlings (25HM)' ,  'name_short' =>  'TES 25HM' );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
		//Protectors of the Endless
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Protectors of the Endless (10)' ,  'name_short' =>  'Protectors (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Protectors of the Endless (10HM)' ,  'name_short' =>  'Protectors (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Protectors of the Endless (25)' ,  'name_short' =>  'Protectors (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Protectors of the Endless (25HM)' ,  'name_short' =>  'Protectors (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Protecteurs de l’Éternel (10)' ,  'name_short' =>  'Protecteurs (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Protecteurs de l’Éternel (10HM)' ,  'name_short' =>  'Protecteurs (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Protecteurs de l’Éternel (25)' ,  'name_short' =>  'Protecteurs (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Protecteurs de l’Éternel (25HM)' ,  'name_short' =>  'Protecteurs (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Beschützer des Endlosen (10)' ,  'name_short' =>  'Beschützer (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Beschützer des Endlosen (10HM)' ,  'name_short' =>  'Beschützer (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Beschützer des Endlosen (25)' ,  'name_short' =>  'Beschützer (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Beschützer des Endlosen (25HM)' ,  'name_short' =>  'Beschützer (25HM)' );
		
		//Tsulong
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (10)' ,  'name_short' =>  'Tsulong (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (10HM)' ,  'name_short' =>  'Tsulong (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (25)' ,  'name_short' =>  'Tsulong (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (25HM)' ,  'name_short' =>  'Tsulong (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (10)' ,  'name_short' =>  'Tsulong (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (10HM)' ,  'name_short' =>  'Tsulong (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (25)' ,  'name_short' =>  'Tsulong (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (25HM)' ,  'name_short' =>  'Tsulong (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (10)' ,  'name_short' =>  'Tsulong (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (10HM)' ,  'name_short' =>  'Tsulong (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (25)' ,  'name_short' =>  'Tsulong (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tsulong (25HM)' ,  'name_short' =>  'Tsulong (25HM)' );
		
		//Lei Shi
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (10)' ,  'name_short' =>  'Lei Shi (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (10HM)' ,  'name_short' =>  'Lei Shi (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (25)' ,  'name_short' =>  'Lei Shi (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (25HM)' ,  'name_short' =>  'Lei Shi (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (10)' ,  'name_short' =>  'Lei Shi (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (10HM)' ,  'name_short' =>  'Lei Shi (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (25)' ,  'name_short' =>  'Lei Shi (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (25HM)' ,  'name_short' =>  'Lei Shi (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (10)' ,  'name_short' =>  'Lei Shi (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (10HM)' ,  'name_short' =>  'Lei Shi (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (25)' ,  'name_short' =>  'Lei Shi (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lei Shi (25HM)' ,  'name_short' =>  'Lei Shi (25HM)' );
		
		//Sha of Fear
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sha of Fear (10)' ,  'name_short' =>  'Sha of Fear (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sha of Fear (10HM)' ,  'name_short' =>  'Sha of Fear (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sha of Fear (25)' ,  'name_short' =>  'Sha of Fear (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Sha of Fear (25HM)' ,  'name_short' =>  'Sha of Fear (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sha de la peur (10)' ,  'name_short' =>  'Sha de la peur (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sha de la peur (10HM)' ,  'name_short' =>  'Sha de la peur (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sha de la peur (25)' ,  'name_short' =>  'Sha de la peur (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sha de la peur (25HM)' ,  'name_short' =>  'Sha de la peur (25HM)' );
		
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sha der Angst  (10)' ,  'name_short' =>  'Sha der Angst  (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sha der Angst  (10HM)' ,  'name_short' =>  'Sha der Angst  (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sha der Angst  (25)' ,  'name_short' =>  'Sha der Angst  (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Sha der Angst  (25HM)' ,  'name_short' =>  'Sha der Angst  (25HM)' );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
	}		
}

/**
 * installer for tier 15 Throne of Thunder raid instance
 *
 */
function update_wow_tot()
{
	
	global $db, $table_prefix, $umil, $user;
    $sql = "select count(imagename) as installcheck from " . $table_prefix . "bbdkp_zonetable where game = 'wow' and imagename like ('throneofthunder%') ";
	$result = $db->sql_query($sql);
	$installed = ((int) $db->sql_fetchfield('installcheck') > 0) ? true: false;
	$db->sql_freeresult($result);

	
	if($installed)
	{
		// don't override existing data
		return;
	}
	else
	{
		//find highest slot 
		$sql = "select max(sequence) as maxseq from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxseq = ((int) $db->sql_fetchfield('maxseq'));	
		$db->sql_freeresult($result);
		
		// find highest id
		unset ( $sql_ary );
		$sql = "select max(id) as maxid from " . $table_prefix . "bbdkp_zonetable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxzoneid = ((int) $db->sql_fetchfield('maxid'));	
		$db->sql_freeresult($result);	
		
		// insert new zones
		$sql_ary = array ();
		$sql_ary[] = array( 'id' => $maxzoneid+1 , 'imagename' =>  'throneofthunder10' , 'game' =>  'wow' ,  'tier' =>  'T15' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6622' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+1);
		$sql_ary[] = array( 'id' => $maxzoneid+2 , 'imagename' =>  'throneofthunderh10' , 'game' =>  'wow' ,  'tier' =>  'T15' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6622' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+2);
		$sql_ary[] = array( 'id' => $maxzoneid+3 , 'imagename' =>  'throneofthunder25' , 'game' =>  'wow' ,  'tier' =>  'T15' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6622' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+3);
		$sql_ary[] = array( 'id' => $maxzoneid+4 , 'imagename' =>  'throneofthunderh25' , 'game' =>  'wow' ,  'tier' =>  'T15' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '6622' ,  'showzone' =>  1, 'showzoneportal' => 1, 'sequence' => $maxseq+4);
		$db->sql_multi_insert ($table_prefix . 'bbdkp_zonetable', $sql_ary );
		
		// find highest boss id 
		unset ( $sql_ary );
		$sql = "select max(id) as maxbossid from " . $table_prefix . "bbdkp_bosstable where game = 'wow' ";
		$result = $db->sql_query($sql);
		$maxid = ((int) $db->sql_fetchfield('maxbossid'));	
		$db->sql_freeresult($result);	

		// insert new bosses 
		$sql_ary[] = array('id' => $maxid+1, 'imagename' => 'jinrokh_the_breaker' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '69465' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+2, 'imagename' => 'horridon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '68476' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+3, 'imagename' => 'council_of_elders' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '69134' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+4, 'imagename' => 'tortos' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '67977' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+5, 'imagename' => 'megaera' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '70229' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+6, 'imagename' => 'ji_kun' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '69712' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+7, 'imagename' => 'durumu_the_forgotten' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '68036' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+8, 'imagename' => 'primordius' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '69017' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+9, 'imagename' => 'dark_animus' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '69427' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+10, 'imagename' => 'iron_qon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '68078' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+11, 'imagename' => 'twin_consorts' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '68905' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+12, 'imagename' => 'lei_shen' , 'game' => 'wow' , 'zoneid' => $maxzoneid+1 , 'type' =>  'npc'  , 'webid' =>  '68397' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$sql_ary[] = array('id' => $maxid+13, 'imagename' => 'jinrokh_the_breaker' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '69465' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+14, 'imagename' => 'horridon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '68476' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+15, 'imagename' => 'council_of_elders' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '69134' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+16, 'imagename' => 'tortos' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '67977' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+17, 'imagename' => 'megaera' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '70229' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+18, 'imagename' => 'ji_kun' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '69712' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+19, 'imagename' => 'durumu_the_forgotten' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '68036' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+20, 'imagename' => 'primordius' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '69017' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+21, 'imagename' => 'dark_animus' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '69427' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+22, 'imagename' => 'iron_qon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '68078' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+23, 'imagename' => 'twin_consorts' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '68905' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+24, 'imagename' => 'lei_shen' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '68397' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		// Ra-Den is a heroic only boss, so only insert in heroic zones. NPC ID is not yet known, using a datamined ID until we know for sure.
		$sql_ary[] = array('id' => $maxid+25, 'imagename' => 'ra_den' , 'game' => 'wow' , 'zoneid' => $maxzoneid+2 , 'type' =>  'npc'  , 'webid' =>  '69888' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$sql_ary[] = array('id' => $maxid+26, 'imagename' => 'jinrokh_the_breaker' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '69465' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+27, 'imagename' => 'horridon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '68476' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+28, 'imagename' => 'council_of_elders' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '69134' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+29, 'imagename' => 'tortos' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '67977' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+30, 'imagename' => 'megaera' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '70229' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+31, 'imagename' => 'ji_kun' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '69712' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+32, 'imagename' => 'durumu_the_forgotten' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '68036' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+33, 'imagename' => 'primordius' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '69017' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+34, 'imagename' => 'dark_animus' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '69427' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+35, 'imagename' => 'iron_qon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '68078' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+36, 'imagename' => 'twin_consorts' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '68905' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+37, 'imagename' => 'lei_shen' , 'game' => 'wow' , 'zoneid' => $maxzoneid+3 , 'type' =>  'npc'  , 'webid' =>  '68397' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$sql_ary[] = array('id' => $maxid+38, 'imagename' => 'jinrokh_the_breaker' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '69465' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+39, 'imagename' => 'horridon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '68476' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+40, 'imagename' => 'council_of_elders' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '69134' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+41, 'imagename' => 'tortos' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '67977' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1 );
		$sql_ary[] = array('id' => $maxid+42, 'imagename' => 'megaera' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '70229' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+43, 'imagename' => 'ji_kun' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '69712' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+44, 'imagename' => 'durumu_the_forgotten' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '68036' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+45, 'imagename' => 'primordius' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '69017' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+46, 'imagename' => 'dark_animus' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '69427' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+47, 'imagename' => 'iron_qon' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '68078' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+48, 'imagename' => 'twin_consorts' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '68905' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		$sql_ary[] = array('id' => $maxid+49, 'imagename' => 'lei_shen' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '68397' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );
		// Ra-Den is a heroic only boss, so only insert in heroic zones. NPC ID is not yet known, using a datamined ID until we know for sure.
		$sql_ary[] = array('id' => $maxid+50, 'imagename' => 'ra_den' , 'game' => 'wow' , 'zoneid' => $maxzoneid+4 , 'type' =>  'npc'  , 'webid' =>  '69888' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1  );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_bosstable', $sql_ary );
		
		// insert new language table values 
		unset ( $sql_ary );
		// zones
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Throne of Thunder (10)' ,  'name_short' =>  'ToT 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Throne of Thunder (10HM)' ,  'name_short' =>  'ToT 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Throne of Thunder (25)' ,  'name_short' =>  'ToT 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Throne of Thunder (25HM)' ,  'name_short' =>  'ToT 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Trône du tonnerre (10)' ,  'name_short' =>  'TdT 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Trône du tonnerre (10HM)' ,  'name_short' =>  'TdT 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Trône du tonnerre (25)' ,  'name_short' =>  'TdT 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'fr' , 'attribute' =>  'zone' , 'name' =>  'Trône du tonnerre (25HM)' ,  'name_short' =>  'TdT 25HM' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+1, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Der Thron des Donners (10)' ,  'name_short' =>  'TdD 10' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+2, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Der Thron des Donners (10HM)' ,  'name_short' =>  'TdD 10HM' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+3, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Der Thron des Donners (25)' ,  'name_short' =>  'TdD 25' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxzoneid+4, 'language' =>  'de' , 'attribute' =>  'zone' , 'name' =>  'Der Thron des Donners (25HM)' ,  'name_short' =>  'TdD 25HM' );

		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );

		//Jin'rokh the Breaker
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh the Breaker (10)' ,  'name_short' =>  'Jin’rokh (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh the Breaker (10HM)' ,  'name_short' =>  'Jin’rokh (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+26, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh the Breaker (25)' ,  'name_short' =>  'Jin’rokh (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+38, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh the Breaker (25HM)' ,  'name_short' =>  'Jin’rokh (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh le Briseur (10)' ,  'name_short' =>  'Jin’rokh (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh le Briseur (10HM)' ,  'name_short' =>  'Jin’rokh (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+26, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh le Briseur (25)' ,  'name_short' =>  'Jin’rokh (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+38, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh le Briseur (25HM)' ,  'name_short' =>  'Jin’rokh (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+1, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh der Zerstörer (10)' ,  'name_short' =>  'Jin’rokh (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+13, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh der Zerstörer (10HM)' ,  'name_short' =>  'Jin’rokh (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+26, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh der Zerstörer (25)' ,  'name_short' =>  'Jin’rokh (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+38, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Jin’rokh der Zerstörer (25HM)' ,  'name_short' =>  'Jin’rokh (25HM)' );

		//Horridon
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Horridon (10)' ,  'name_short' =>  'Horridon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Horridon (10HM)' ,  'name_short' =>  'Horridon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+27, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Horridon (25)' ,  'name_short' =>  'Horridon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+39, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Horridon (25HM)' ,  'name_short' =>  'Horridon (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Horridon (10)' ,  'name_short' =>  'Horridon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Horridon (10HM)' ,  'name_short' =>  'Horridon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+27, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Horridon (25)' ,  'name_short' =>  'Horridon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+39, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Horridon (25HM)' ,  'name_short' =>  'Horridon (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+2, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Horridon (10)' ,  'name_short' =>  'Horridon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+14, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Horridon (10HM)' ,  'name_short' =>  'Horridon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+27, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Horridon (25)' ,  'name_short' =>  'Horridon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+39, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Horridon (25HM)' ,  'name_short' =>  'Horridon (25HM)' );

		//Council of Elders
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Council of Elders (10)' ,  'name_short' =>  'Council (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Council of Elders (10HM)' ,  'name_short' =>  'Council (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+28, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Council of Elders (25)' ,  'name_short' =>  'Council (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+40, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Council of Elders (25HM)' ,  'name_short' =>  'Council (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conseil des anciens (10)' ,  'name_short' =>  'Conseil (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conseil des anciens (10HM)' ,  'name_short' =>  'Conseil (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+28, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conseil des anciens (25)' ,  'name_short' =>  'Conseil (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+40, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Conseil des anciens (25HM)' ,  'name_short' =>  'Conseil (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+3, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Rat der Ältesten (10)' ,  'name_short' =>  'Rat (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+15, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Rat der Ältesten (10HM)' ,  'name_short' =>  'Rat (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+28, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Rat der Ältesten (25)' ,  'name_short' =>  'Rat (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+40, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Rat der Ältesten (25HM)' ,  'name_short' =>  'Rat (25HM)' );

		//Tortos
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Tortos (10)' ,  'name_short' =>  'Tortos (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Tortos (10HM)' ,  'name_short' =>  'Tortos (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+29, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Tortos (25)' ,  'name_short' =>  'Tortos (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+41, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Tortos (25HM)' ,  'name_short' =>  'Tortos (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tortos (10)' ,  'name_short' =>  'Tortos (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tortos (10HM)' ,  'name_short' =>  'Tortos (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+29, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tortos (25)' ,  'name_short' =>  'Tortos (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+41, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Tortos (25HM)' ,  'name_short' =>  'Tortos (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+4, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tortos (10)' ,  'name_short' =>  'Tortos (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+16, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tortos (10HM)' ,  'name_short' =>  'Tortos (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+29, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tortos (25)' ,  'name_short' =>  'Tortos (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+41, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Tortos (25HM)' ,  'name_short' =>  'Tortos (25HM)' );

		//Megaera
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Megaera (10)' ,  'name_short' =>  'Megaera (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Megaera (10HM)' ,  'name_short' =>  'Megaera (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+30, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Megaera (25)' ,  'name_short' =>  'Megaera (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+42, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Megaera (25HM)' ,  'name_short' =>  'Megaera (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Megaera (10)' ,  'name_short' =>  'Megaera (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Megaera (10HM)' ,  'name_short' =>  'Megaera (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+30, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Megaera (25)' ,  'name_short' =>  'Megaera (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+42, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Megaera (25HM)' ,  'name_short' =>  'Megaera (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+5, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Megaera (10)' ,  'name_short' =>  'Megaera (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+17, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Megaera (10HM)' ,  'name_short' =>  'Megaera (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+30, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Megaera (25)' ,  'name_short' =>  'Megaera (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+42, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Megaera (25HM)' ,  'name_short' =>  'Megaera (25HM)' );		

		//Ji-Kun
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ji-Kun (10)' ,  'name_short' =>  'Ji-Kun (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ji-Kun (10HM)' ,  'name_short' =>  'Ji-Kun (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+31, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ji-Kun (25)' ,  'name_short' =>  'Ji-Kun (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+43, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ji-Kun (25HM)' ,  'name_short' =>  'Ji-Kun (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ji Kun (10)' ,  'name_short' =>  'Ji Kun (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ji Kun (10HM)' ,  'name_short' =>  'Ji Kun (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+31, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ji Kun (25)' ,  'name_short' =>  'Ji Kun (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+43, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ji Kun (25HM)' ,  'name_short' =>  'Ji Kun (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+6, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ji-Kun (10)' ,  'name_short' =>  'Ji-Kun (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+18, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ji-Kun (10HM)' ,  'name_short' =>  'Ji-Kun (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+31, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ji-Kun (25)' ,  'name_short' =>  'Ji-Kun (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+43, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ji-Kun (25HM)' ,  'name_short' =>  'Ji-Kun (25HM)' );

		//Durumu the Forgotten
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Durumu the Forgotten (10)' ,  'name_short' =>  'Durumu (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Durumu the Forgotten (10HM)' ,  'name_short' =>  'Durumu (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+32, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Durumu the Forgotten (25)' ,  'name_short' =>  'Durumu (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+44, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Durumu the Forgotten (25HM)' ,  'name_short' =>  'Durumu (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Durumu l’Oublié (10)' ,  'name_short' =>  'Durumu (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Durumu l’Oublié (10HM)' ,  'name_short' =>  'Durumu (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+32, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Durumu l’Oublié (25)' ,  'name_short' =>  'Durumu (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+44, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Durumu l’Oublié (25HM)' ,  'name_short' =>  'Durumu (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+7, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Durumu der Vergessene (10)' ,  'name_short' =>  'Durumu (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+19, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Durumu der Vergessene (10HM)' ,  'name_short' =>  'Durumu (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+32, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Durumu der Vergessene (25)' ,  'name_short' =>  'Durumu (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+44, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Durumu der Vergessene (25HM)' ,  'name_short' =>  'Durumu (25HM)' );

		//Primordius
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Primordius (10)' ,  'name_short' =>  'Primordius (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Primordius (10HM)' ,  'name_short' =>  'Primordius (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+33, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Primordius (25)' ,  'name_short' =>  'Primordius (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+45, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Primordius (25HM)' ,  'name_short' =>  'Primordius (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Primordius (10)' ,  'name_short' =>  'Primordius (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Primordius (10HM)' ,  'name_short' =>  'Primordius (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+33, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Primordius (25)' ,  'name_short' =>  'Primordius (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+45, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Primordius (25HM)' ,  'name_short' =>  'Primordius (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+8, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Primordius (10)' ,  'name_short' =>  'Primordius (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+20, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Primordius (10HM)' ,  'name_short' =>  'Primordius (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+33, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Primordius (25)' ,  'name_short' =>  'Primordius (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+45, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Primordius (25HM)' ,  'name_short' =>  'Primordius (25HM)' );

		//Dark Animus
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Dark Animus (10)' ,  'name_short' =>  'Dark Animus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Dark Animus (10HM)' ,  'name_short' =>  'Dark Animus (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+34, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Dark Animus (25)' ,  'name_short' =>  'Dark Animus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+46, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Dark Animus (25HM)' ,  'name_short' =>  'Dark Animus (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sombre animus (10)' ,  'name_short' =>  'Sombre animus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sombre animus (10HM)' ,  'name_short' =>  'Sombre animus (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+34, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sombre animus (25)' ,  'name_short' =>  'Sombre animus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+46, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Sombre animus (25HM)' ,  'name_short' =>  'Sombre animus (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+9, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Dunkler Animus (10)' ,  'name_short' =>  'Dunkler Animus (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+21, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Dunkler Animus (10HM)' ,  'name_short' =>  'Dunkler Animus (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+34, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Dunkler Animus (25)' ,  'name_short' =>  'Dunkler Animus (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+46, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Dunkler Animus (25HM)' ,  'name_short' =>  'Dunkler Animus (25HM)' );

		//Iron Qon
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Iron Qon (10)' ,  'name_short' =>  'Qon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Iron Qon (10HM)' ,  'name_short' =>  'Qon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+35, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Iron Qon (25)' ,  'name_short' =>  'Qon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+47, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Iron Qon (25HM)' ,  'name_short' =>  'Qon (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Qwon de fer (10)' ,  'name_short' =>  'Qwon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Qwon de fer (10HM)' ,  'name_short' =>  'Qwon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+35, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Qwon de fer (25)' ,  'name_short' =>  'Qwon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+47, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Qwon de fer (25HM)' ,  'name_short' =>  'Qwon (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+10, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der eiserne Qon (10)' ,  'name_short' =>  'Qon (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+22, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der eiserne Qon (10HM)' ,  'name_short' =>  'Qon (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+35, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der eiserne Qon (25)' ,  'name_short' =>  'Qon (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+47, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Der eiserne Qon (25HM)' ,  'name_short' =>  'Qon (25HM)' );

		//Twin Consorts
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twin Consorts (10)' ,  'name_short' =>  'Twins (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twin Consorts (10HM)' ,  'name_short' =>  'Twins (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+36, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twin Consorts (25)' ,  'name_short' =>  'Twins (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+48, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Twin Consorts (25HM)' ,  'name_short' =>  'Twins (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Concubines jumelles (10)' ,  'name_short' =>  'Jumelles (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Concubines jumelles (10HM)' ,  'name_short' =>  'Jumelles (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+36, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Concubines jumelles (25)' ,  'name_short' =>  'Jumelles (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+48, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Concubines jumelles (25HM)' ,  'name_short' =>  'Jumelles (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+11, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zwillingskonkubinen (10)' ,  'name_short' =>  'Zwillings (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+23, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zwillingskonkubinen (10HM)' ,  'name_short' =>  'Zwillings (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+36, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zwillingskonkubinen (25)' ,  'name_short' =>  'Zwillings (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+48, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Zwillingskonkubinen (25HM)' ,  'name_short' =>  'Zwillings (25HM)' );

		//Lei Shen
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (10)' ,  'name_short' =>  'Lei Shen (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (10HM)' ,  'name_short' =>  'Lei Shen (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+37, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (25)' ,  'name_short' =>  'Lei Shen (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+49, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (25HM)' ,  'name_short' =>  'Lei Shen (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (10)' ,  'name_short' =>  'Lei Shen (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (10HM)' ,  'name_short' =>  'Lei Shen (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+37, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (25)' ,  'name_short' =>  'Lei Shen (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+49, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (25HM)' ,  'name_short' =>  'Lei Shen (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+12, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (10)' ,  'name_short' =>  'Lei Shen (10)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+24, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (10HM)' ,  'name_short' =>  'Lei Shen (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+37, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (25)' ,  'name_short' =>  'Lei Shen (25)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+49, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Lei Shen (25HM)' ,  'name_short' =>  'Lei Shen (25HM)' );

		//Ra-Den (Heroic only)
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+25, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ra-Den (10HM)' ,  'name_short' =>  'Ra-Den (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+50, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Ra-Den (25HM)' ,  'name_short' =>  'Ra-Den (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+25, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ra Den (10HM)' ,  'name_short' =>  'Ra Den (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+50, 'language' =>  'fr' , 'attribute' =>  'boss' , 'name' =>  'Ra Den (25HM)' ,  'name_short' =>  'Ra Den (25HM)' );

		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+25, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ra-Den (10HM)' ,  'name_short' =>  'Ra-Den (10HM)' );
		$sql_ary[] = array( 'game_id' => 'wow', 'attribute_id'  => $maxid+50, 'language' =>  'de' , 'attribute' =>  'boss' , 'name' =>  'Ra-Den (25HM)' ,  'name_short' =>  'Ra-Den (25HM)' );


		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
		
	}		
}

?>