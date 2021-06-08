<?php
	include "header.php";
?>
<html>
<body>
	<main>
		<div id="container">
			<div id="Body-Content">
				<div id="Featured" style="text-align: left;"><h2>Featured</h2>
					<?php
					$sql = "SELECT * FROM export_projects ORDER BY RAND() limit 4";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
					echo "<a href=".$row['COL1'].">
							 <img src=".$row['COL5'].">
							 <p>".$row['COL3']."</p></a>";}
							}
						?></div>

				<div id="Trending" style="text-align: left;"><h2>Trending</h2>
					<?php
					$sql = "SELECT * FROM export_projects ORDER BY RAND() limit 4";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
					echo "<a href=".$row['COL1'].">
						  <img src=".$row['COL5'].">
						  <p>".$row['COL3']."</p></a>";}
						}
					?></div>

				<div id="Everything" style="text-align: left;"><h2>Being watched right now</h2>
					<?php
					$sql = "SELECT * FROM export_projects ORDER BY RAND() limit 12";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
					echo "<a href=".$row['COL1'].">
						  <img src=".$row['COL5'].">
						  <p>".$row['COL3']."</p></a>";}
						}
					?></div>

				<div id="More"></div>
			</div>
		</div>
	</main>
</body>
</html>