<?php
		$cookie_name = "user";
		$cookie_value = "John Doe";
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
		?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <meta name="description" content="">
	    <meta name="author" content="">

	    <!-- Bootstrap core CSS -->
	    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom fonts for this template -->
	    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	    <link href="vendor/devicons/css/devicons.min.css" rel="stylesheet">
	    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="css/resume.min.css" rel="stylesheet">
	    <?php
			if(!isset($_COOKIE[$cookie_name])){
				echo "Broken :(";
			}else {
				echo "Value is: " . $_COOKIE[$cookie_name];
			}
		?>
	</head>

	<body id="page-top">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav"></nav>
		 <div class="container-fluid p-0">

      		<section class="resume-section p-3 p-lg-5 d-flex d-column" id="sample_header">
      			<div class="my-auto">
      				<h1 >Code
      				<span class="text-primary">Samples</span></h1>
      			</div>
      		</section>
      	</div>
	</body>
</html>
