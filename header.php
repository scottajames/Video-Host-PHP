<?php
	include "includes/dbc.php";
?>
<!DOCTYPE HTML>
<html>
<head>
		<meta name="hubtraffic-domain-validation"  content="9ace214ab3de71f1" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="Styling.css">
		<meta charset="UTF-8">

		<title>DADDY'S BOY</title>

	</head>
	<body>
<header>

	<div id="Head-Content">

		<div id="Logo">
			<a href="index.php"><h1>DADDY'S BOY</h1></a>
		</div>

		<div id="Search">
			<form action="search.php" method="POST">
				<input type="text" placeholder="Search" name="search">
			</form>
		</div>

		<div id="Button">
			<button id="Bars" onclick="navBar()"><i class="fa fa-bars"></i></button>
		</div>

		<div id="Navigation">

      	<div id="Main-Nav">
			<h1>MAIN</h1>
				<li><a href="index.php"><i class="material-icons">&#xe88a;</i>HOME</a></li>
					<li><a href="categories.php"><i class="material-icons">&#xe53b;</i>CATEGORIES</a></li>
						<li><a href="#"><i class="material-icons">&#xe3b0;</i>LIVE CAMS</a></li>
							<li><a href="#"><i class="material-icons">&#xe547;</i>STORE</a></li>
		</div>

			<div id='Load-More'>
				<button id='Buttons'>Load More</button>
			</div>
		
		</div>
	</div>

		<script>
			function navBar(){
    			var nav = document.getElementById("Navigation");

    				if(nav.style.display === "none"){
        				nav.style.display = "block";
        				pages.style.display = "block";
    				}else{
        				nav.style.display = "none";
        				pages.style.display = "none";
    				}
				}
		</script>

		<script>
	$(document).ready(function(){
			var ArticleCount = 44;
		$("Buttons").click(function(){
				ArticleCount = ArticleCount + 4;
			$("index.php").load("load-More.php", {
					ArticleNewCount: ArticleCount
			});
		});
	});
</script>
		
</header>