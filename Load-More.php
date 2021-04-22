<?php

	include "includes/dbc.php";

		$ArticleNewCount = $_POST['ArticleNewCount'];

			$sql = "SELECT * FROM export_projects LIMIT $ArticleNewCount";
				$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "<div id='Video'>
							<a href=".$row['COL 1']."> 
							<img src=".$row['COL 4'].">
							<p>".$row['COL 2']."</p></a>
						</div>";
						}
					}
		?>