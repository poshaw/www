<?php include_once('function.php'); ?>

<?php $thisPage= substr_replace(substr_replace(__FILE__, '', 0, strlen(__DIR__) + 1), '', strrpos(substr_replace(__FILE__, '', 0, strlen(__DIR__) + 1), ".")) ?>
<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">

		<!-- CSS -->
		<link href="./assets/fontawesome/css/font-awesome.css" rel="stylesheet">
		<link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="./css/style.css" rel="stylesheet">

	</head>
	<body>
		<input type='hidden' id='currentDevice' value='<?php echo ($_REQUEST['id']!='')?$_REQUEST['id']:1; ?>'>

		<?php include("nav.php"); ?>

		<div class="main">
		<div class="main-inner">
	    <div class="container">


	    <script type="text/javascript">
	    	var x = 23;
			document.write(x);
	    </script>



		</div> <!-- /container -->
		</div> <!-- /main-inner -->
		</div> <!-- /main -->

		<!-- javascript -->
		<script src="./assets/jquery-1.8.1.min.js"></script>
		<script src="./assets/bootstrap/js/bootstrap.js"></script>

	</body>
</html>
