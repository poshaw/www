<?php
include_once('dbconn.php');

function sqlQuery($args) {
	global $dbconn;
	switch($args['type']) {
		case 'gg':
			$sql = "SELECT id FROM scada.device ORDER BY id ASC";
		break;
		case 'fetchGroupedSensors':
			$sql = "SELECT sensor.name, sensor.id FROM scada.curval JOIN scada.sensor ON curval.senid=sensor.id JOIN scada.sensorgroup ON sensor.groupid = sensorgroup.id WHERE sensorgroup.type='".$args['group']."' AND curval.devid='".$args['id']."';";
		break;
	}
	
	$dbconn->real_query($sql);
	$res = $dbconn->use_result();
	
	while ($row = $res->fetch_assoc()) {
		$arr[] = $row;
	}
	return $arr;
}



?>