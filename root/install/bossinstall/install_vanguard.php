<?php
/**
 * bossprogress vanguard install data
 * @package bbDkp-installer
 * @copyright (c) 2009 bbDkp <http://code.google.com/p/bbdkp/>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version $Id$
 * 
 */


/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

function install_vanguard()
{
    global  $db, $table_prefix, $umil, $user;
    $sql = "select count(sequence) as installcheck from " . $table_prefix . "bbdkp_zonetable where game = 'vanguard'";
	$result = $db->sql_query($sql);
	$installed = ((int) $db->sql_fetchfield('installcheck') > 0) ? true: false;
	$db->sql_freeresult($result);
	if(!$installed)
	{			
		$sql_ary = array ();
		$sql_ary[] = array( 'id' => 1 , 'imagename' =>  'dummyzone' , 'game' =>  'vanguard' ,  'tier' =>  '' ,  'completed' =>  '0' ,  'completedate' =>  '0' ,  'webid' =>  '' ,  'showzone' =>  1);
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_zonetable', $sql_ary );
		unset ( $sql_ary );
	
		$sql_ary[] = array('id' => 1 ,  'imagename' =>  'dummyboss' , 'game' =>  'vanguard' , 'zoneid' =>  1 , 'type' =>  'npc'  , 'webid' =>  '' , 'killed' =>  '0' , 'killdate' =>  '0' , 'counter' =>  '0' , 'showboss' =>  1     );
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_bosstable', $sql_ary );
	
		unset ( $sql_ary );
		$sql_ary[] = array(  'game_id' => 'vanguard', 'attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'zone' , 'name' =>  'Dummy Zone' ,  'name_short' =>  'Dummy Zone' );
		$sql_ary[] = array(  'game_id' => 'vanguard',  'attribute_id' => 1, 'language' =>  'en' , 'attribute' =>  'boss' , 'name' =>  'Dummy Boss' ,  'name_short' =>  'Dummy Boss' );
		$db->sql_multi_insert ( $table_prefix . 'bbdkp_language', $sql_ary );
		unset ( $sql_ary );
	}

		
}



?>