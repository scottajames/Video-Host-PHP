<?php
	include "header.php";
?>

		<main>
		<div id="Body-Content">
			<?php
				$sql = "SELECT * FROM export_projects ORDER BY RAND() limit 44";
					$result = mysqli_query($conn, $sql);
						$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<div id='Video'>
							<a href=".$row['COL 1']."> 
							<img src=".$row['COL 4'].">
							<p>".$row['COL 2']."</p></a>
						</div>";
				}
			}
		?>
		</div>
		</main>
	</body>
</html>