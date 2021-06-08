<?php

	include "includes/dbc.php";

		$ArticleNewCount = $_POST['ArticleNewCount'];

			$sql = "SELECT * FROM export_projects LIMIT $ArticleNewCount";
				$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<div id='More'>
							<a href=".$row['COL1'].">
							<img src=".$row['COL5'].">
							<p>".$row['COL3']."</p></a>
							</div>";
						}
					}
		?>