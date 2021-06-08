<?php
	include "includes/dbc.php";
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta name="hubtraffic-domain-validation"  content="9ace214ab3de71f1" />
	<meta charset="UTF-8">
  	<meta name="description" content="Free Web tutorials">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="icon" href="Icon.png"> 
	<link rel="stylesheet" type="text/css" href="Styling.css">
	<title>DADDY'S BOY</title>

</head>

<body>
<div id="container">
<header>
<div id="Head-Content">
	<div id="Navigation">
	<div id="Logo">
		<a href="index.php"><h1>DADDY'S BOY</h1></a>
	</div>

	<div id="Search">
		<form action="search.php" method="GET">
			<input type="text" placeholder="Search" name="search">
		</form>
	</div>
	
		<div id="Main-Nav">
			<h2>MAIN</h2>
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
	$(document).ready(function(){
			var ArticleCount = 0;
		$("Button").click(function(){
				ArticleCount = ArticleCount + 4;
			$("#More").load("Load-More.php", {
					ArticleNewCount: ArticleCount
			});
		});
	});
</script>
</header>
</div>
</body>