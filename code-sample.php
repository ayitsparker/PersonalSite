<?php
	$file=fopen("config.txt", "r") or die("Problem loading config");
	$configInfo=fread($file, filesize("config.txt"));
	fclose($file);

	if($configInfo!=$_POST["psw"]){
		http_response_code(403);
		//include('my_403.php'); //Make custom 403 page
		die();
	}
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
	    
	</head>

	<body id="page-top">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav"></nav>
		 <div class="container-fluid p-0">
      			<div class="my-auto">
      				<h1 >Code
      				<span class="text-primary">Samples</span></h1>
      			</div>
      		<style>
        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1030; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
        }
            
        @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
               display: block;
               float: none;
            }
            .cancelbtn {
               width: 100%;
            }
        }
        </style>
        <div class="container">
          <div class="row">
            <div class="col-md-2 col-xs-2">
              <p style="font-size: 12;">Test</p>
              <button onclick="document.getElementById('bitwise').style.display='block'" style="width:auto;">Show</button>
            </div>
          </div>
        </div>
        <div id="bitwise" class="modal">
          
          <form class="modal-content animate">

            <div class="container">
            	<?php
            		$file=fopen("bits.c", "r");
            		$code=fread($file, filesize("bits.c"));
            		echo nl2br($code);
            		fclose($file);
            	?>
            	<pre>
            		<code>
            		</code>
            	</pre>
            </div>

        </div>

        <script>
        // Get the modal
        var modal = document.getElementById('bitwise');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
      	</div>
	</body>
</html>
