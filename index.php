<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Autos</title>
</head>
<body>
	
	<?php  
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ventas";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM auto";
		$result = $conn->query($sql);
	?>
	<h1 style="text-align: center">Venta de autos</h1>
	<div class="row">
		<div class="col-2"></div>
		<div class="col">
			<a href="nuevo.php" class="btn btn-primary">Nuevo auto</a>
			<table border="1" class="table table-bordered table-hover">
				<tr class="thead-light">
					<th>ID</th>
					<th>PLACA</th>
					<th>MARCffA</th>
					<th>COLOR</th>
					<th>MODELO</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
				<?php  
					foreach ($result as $row) {
						echo "<tr>";
						echo "<td>".$row["aut_id"]."</td>";
						echo "<td>".$row["aut_placa"]."</td>";
						echo "<td>".$row["aut_marca"]."</td>";
						echo "<td>".$row["aut_color"]."</td>";
						echo "<td>".$row["aut_modelo"]."</td>";
						echo "<td><a href='ver.php?aut_id=".$row["aut_id"]."'>Ver</a></td>";
						echo "<td><a href='editar.php?aut_id=".$row["aut_id"]."'>Editar</a></td>";
						echo "<td><a href='borrar.php?aut_id=".$row["aut_id"]."'>Borrar</a></td>";
						echo "</tr>";
					}

				?>
			</table>
		</div>
		<div class="col-2"></div>
	</div>
	<?php $conn->close(); ?>
</body>
</html>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>