<?php
	include "header.php";
?>
<html>
	<body>
		<div id="Body-Content">
			<?php
			$search = mysqli_real_escape_string($conn, $_GET['search']);
			$sql = "SELECT * FROM export_projects WHERE COL2 LIKE '%$search%' OR COL3 LIKE '%$search%' OR COL4 LIKE '%$search%'";
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
	</body>
</html>