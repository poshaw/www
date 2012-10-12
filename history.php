<?php
session_start('scadaSession');
//error_reporting(0);
include_once('function.php');

?>

<?php $thisPage= substr_replace(substr_replace(__FILE__, '', 0, strlen(__DIR__) + 1), '', strrpos(substr_replace(__FILE__, '', 0, strlen(__DIR__) + 1), ".")) ?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">

		<!-- CSS -->
		<link href="./assets/fontawesome/css/font-awesome.css" rel="stylesheet">
		<link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="./assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="./css/style.css" rel="stylesheet">
		<link href="./css/history.css" rel="stylesheet">

	</head>
	<body>
		<?php $_SESSION['currentDevice'] = '1'; /*PUT THIS IN INDEX.PHP*/?>
		<input type='hidden' id='currentDevice' value='<?php echo $_SESSION['currentDevice']; ?>'>

		<?php include("nav.php"); ?>

		<div class="main">
		<div class="main-inner">
	    <div class="container">


		<div id='temperaturecheckbox' class='checkbox'>
			<?php

				$args = array(
					'type' => 'fetchGroupedSensors',
					'id' => $_SESSION['currentDevice'],
					'group' => 'temperature'
					);
				$i = 0;
				foreach(sqlQuery($args) as $eachf => $thisf) {
					echo "<input alt='".$thisf['id']."' type='checkbox' name='"  . $thisf['name'] .  "' id='temperaturecheck" . $i . "' class='temperaturecheckclass'>" . $thisf['name'] . "<br />";
					$i++;
				}
				echo "id = " . $_SESSION['currentDevice'];

			?>
		</div> <!-- temperaturecheckbox -->
		<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>


		</div> <!-- /container -->
		</div> <!-- /main-inner -->
		</div> <!-- /main -->

		<!-- javascript -->
		<script src="./assets/jquery-1.8.1.min.js"></script>
		<script src="./assets/bootstrap/js/bootstrap.js"></script>
		<script src="./assets/highcharts/highcharts.js"></script>
		<script scr="./assets/highcharts/modules/exporting.js"></script>
		<script src="./js/history.js"></script>
	</body>
</html>
