<!DOCTYPE html>
<html>
<head>
	<title>Menú de comida</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylemenu.css">

</head>
<body>
	<h1 class="menu-title">MENÚ DE COMIDA</h1>
	<div class="menu">
		<div class="menu-section">
			<div class="menu-item">
				<h3>Hamburguesa</h3>
				<p>$10.00</p>
			</div>
			<div class="menu-item">
				<h3>Pizza</h3>
				<p>$12.00</p>
			</div>
			<div class="menu-item">
				<h3>Papas fritas</h3>
				<p>$5.00</p>
			</div>
		</div>
		<div class="menu-section">
			<div class="menu-item">
				<h3>Jugo de naranja</h3>
				<p>$4.00</p>
			</div>
			<div class="menu-item">
				<h3>Jugo de piña</h3>
				<p>$4.00</p>
			</div>
			<div class="menu-item">
				<h3>Jugo de manzana</h3>
					<p>$4.00</p>
			</div>
		</div>
		<div class="menu-section">
			<div class="menu-item">
				<h3>Pastel de chocolate</h3>
				<p>$8.00</p>
			</div>
			<div class="menu-item">
				<h3>Helado</h3>
				<p>$6.00</p>
			</div>
			<div class="menu-item">
				<h3>Tarta de frutas</h3>
				<p>$7.00</p>
			</div>
		</div>
	</div>

	<div id="tasks"></div>

	<button onclick="goBack()">Volver atrás</button>
		  
	<script>
		function goBack() {
			window.history.back();
		}
	</script>
	<script src="script.js"></script>
</body>
</html>

