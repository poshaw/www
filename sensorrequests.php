<?php 
include_once('dbconn.php');
$deviceid=$_REQUEST['deviceid'];
$sensors = explode(",", $_REQUEST['sensors']);
$xml = new SimpleXMLElement('<sensors></sensors>');
foreach($sensors as $thisSensor){
	$thisSensorXML = $xml->addChild('sensor');
	
	//get the name of this sensor
	
	$sensorName_sql = "SELECT name FROM scada.sensor WHERE id = '".$thisSensor."'";
	$sensorName_res = $dbconn->query($sensorName_sql);
	$sensorName_arr = $sensorName_res->fetch_assoc();
	$thisSensorXML->addChild('sensorname', $sensorName_arr['name']);
	
	//get the values for this sensor
	$sql = "SELECT time, value FROM scada.value WHERE devid='$deviceid' AND senid = '$thisSensor' LIMIT 10;";
	//loop through results
	$dbconn->real_query($sql);
	$res = $dbconn->use_result();
	$sensorvalues = $thisSensorXML->addChild('sensorvalues');
	while ($row = $res->fetch_assoc()) {
		$dataPoint = $sensorvalues->addChild('datapoint');
		$dataPoint->addChild('time', $row['time']);
		$dataPoint->addChild('value', $row['value']);
		// for each result add child
	}
	
}
echo $xml->asXML();
?>
