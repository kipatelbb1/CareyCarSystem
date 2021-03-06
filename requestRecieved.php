<?php session_start(); 

	if(!(isset($_SESSION['id'])))
	{
		header("Location: index.php"); /* Redirect browser */
		exit();
	}

?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Recieved | FTS EMEA Tools | BlackBerry Ltd</title>

	<!-- META -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="shortcut icon" href="res/bb_icon.png">
	<!-- END META -->

	<!-- STYLES -->
	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/customStyle.css">
	<link rel="stylesheet" type="text/css" href="style/jquery-ui.min.css">
	

	<!-- END STYLES -->

	<!-- COMPAT -->
	<!--[if lt IE 9]>
        <script src="scripts/compat/html5shiv.min.js"></script>
        <script src="scripts/compat/respond.js"></script>
	<![endif]-->

	<!-- END COMPAT -->
	
</head>
<body>


	<div class="container">

		<!-- TITLE -->
		<div class="row">
			<div class="col-xs-12 col-sm-5">
				<h1 class="page-header">Carey Car Scheduling System</h1>
			</div>

			<div class="col-sm-3 col-sm-offset-4 hidden-xs">
				<img src="res/bblogo.jpg" alt="logo" width="216" height="100" class="logo img-responsive"/>
			</div>

		</div>
		<!-- END TITLE -->

		<!-- NAV -->
		<div class="row">

			<div class="col-xs-12">
				<ul class="nav nav-tabs" role="tablist">
				  <li><a href="home.php">Home</a></li>
				  <li><a href="request.php">My Requests</a></li>
				  <li><a href="settings.php">Settings</a></li>
				  <h4 class="welcome">Welcome <?php echo $_SESSION['name'] ?></h4>
				</ul>

			</div>

		</div>
		<!-- END NAV -->

		
		<div class="row">

			<div class="col-xs-12 requestRec">Carey Car Booked</div>
			<div class="col-xs-12 requestInfo">You can view or cancel your requests at <a href="request.php">MY REQUESTS</a></div>

			
		</div>




		<!-- FOOTER -->
		<div class="row">
			<div class="col-xs-12 col-sm-3 footer">
				<div class="internal">
					Internal Use Only
				</div>
			</div>

			<div class="col-xs-12 col-sm-offset-5 col-sm-4">
				<div class="footnote">
					Carey Car Scheduling System | FTS EMEA Team | BlackBerry Ltd
				</div>
			</div>
			
		</div>
		<!-- END FOOTER -->



	</div><!--END CONTAINER -->
	
	<!-- SCRIPTS -->
	<script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.js"></script>
	<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
	<script type="text/javascript" src="scripts/customscript.js"></script>	

	
	<!-- END SCRIPTS -->
</body>
</html>