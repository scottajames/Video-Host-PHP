<?php
	include_once "includes/dbc.php";
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
							<a href="#"><h1>DADDY'S BOY</h1></a>
						</div>

						<div id="Search">
						<form action="search.php" method="POST">
							<input type="text" placeholder="Search" name="search">
							<button type="submit" name="submit"><i class="fa fa-search"></i></button>
						</form>
						</div>

						<div id="Button">
							<button id="Bars" onclick="navBar()"><i class="fa fa-bars"></i></button>
						</div>

						<div id="Navigation">

						<div id="Login">
							<button>LOGIN</button>
      					</div>

      					<div id="Main-Nav">
							<h1>MAIN</h1>
							<li><a href="#"><i class="material-icons">&#xe88a;</i> HOME</i></a></li>
							<li><a href="#"><i class="material-icons">&#xe04a;</i> VIDEOS</a></li>
							<li><a href="#"><i class="material-icons">&#xe53b;</i> CATEGORIES</a></li>
							<li><a href="#"><i class="material-icons">&#xe3b0;</i> LIVE CAMS</a></li>
							<li><a href="#"><i class="material-icons">&#xe547;</i> STORE</a></li>
						</div>

						<div id="Signup">
							<li><a href="#">SIGN UP</a></li>
						</div>
					</div>
				</div>

		<script>
			function navBar(){
    			var nav = document.getElementById("Navigation");
    				if(nav.style.display === "none"){
        				nav.style.display = "block";
    				}else{
        				nav.style.display = "none";
    				}
				}
			</script>
		</header>

		<div id="Body-Content">
			<?php
				$sql = "SELECT * FROM content";
					$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<div>
							<p>".$row['COL1']."</p>
						</div>";
				}
			}
		?>
		</div>
	</body>
</html>