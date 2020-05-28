<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>GPTS E-commerce</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>         		

    <style>
        #navigation {
          background: #c9d6df;  
        }
        #header{
			background: #1e2022; 
	    }
        #footer {
            background: #1e2022; 
          	color: #1E1F29;
        }
        .footer-links li a {
          color: #c9d6df;
        }
        .mainn-raised {
            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }
       
        .glyphicon{
			display: inline-block;
			font: normal normal normal 14px/1 FontAwesome;
			font-size: inherit;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		.glyphicon-chevron-left:before{
			content:"\f053"
		}
		.glyphicon-chevron-right:before{
			content:"\f054"
		}
        
        </style>

    </head>
	<body>
		<header>
			<div id="header">
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="images/gpts.gif" alt="GPTS Logo" style="width:15%;">
								</a>
							</div>
						</div>
						<div class="col-md-2 clearfix">
							<div class="header-ctn">
								<div class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
										<i class="fa fa-shopping-cart"></i>
										<span>Your Cart</span>
										<div class="badge qty">0</div>
									</a>
									<div class="cart-dropdown"  >
										<div class="cart-list" id="cart_product">
										
											
										</div>
										<div class="cart-btns">
												<a href="cart.php" style="width:100%;">Show Cart</a>	
										</div>
									</div>
										
									</div>
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>