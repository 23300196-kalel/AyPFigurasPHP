<!DOCTYPE >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Figuras geométricas - Área y perímetro- PHP</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<h1>Figuras geométricas - Área y perímetro- PHP</h1>
	</header>
	<section>
		<?php
			  if($_GET){
				$Figura=$_GET['figura'];
				if($Figura=="cu"){
					$Figura="CUADRADO";
					echo "Seleccionaste la figura: ".$Figura." para calcular su área y su perímetro.";
					echo '<form action="operacion.php" method="POST" name"formulario"><span>Captura aquí la medida del lado<h6>(en cm):</h6></span><input type="number" name="lado" size="6" min="1" max="999" step="0.01"><input type="hidden" name="figura" value="cu"><input type="submit" value="Calcular"></form>';
				}
				if($Figura=="ci"){
					$Figura="CIRCULO";
					echo "Seleccionaste la figura: ".$Figura." para calcular su área y su perímetro.";
					echo '<form action="operacion.php" method="POST" name"formulario"><span>Captura aquí la medida del radio <h6>(en cm):</h6> </span><input type="number" name="radio" size="6" min="1" max="999" step="0.01"><input type="hidden" name="figura" value="ci"><input type="submit" value="Calcular"></form>';
				}
				if($Figura=="tr"){
					$Figura="TRIANGULO";
					echo "Seleccionaste la figura: ".$Figura." para calcular su área y su perímetro.";
					echo '<form action="operacion.php" method="POST" name"formulario"><span>Captura aquí la medida del lado <h6>(en cm):</h6> </span><input type="number" name="lado" size="6" min="1" max="999" step="0.01"><span>Captura aquí la medida de la base <h6>(en cm):</h6> </span><input type="number" name="base" size="6" min="1" max="999" step="0.01"><span>Captura aquí la medida dela altura <h6>(en cm):</h6> </span><input type="number" name="altura" size="6" min="1" max="999" step="0.01"><input type="hidden" name="figura" value="tr"><input type="submit" value="Calcular"></form>';
				}
			}
			if($_POST){
				$Figura=$_POST['figura'];
				if($Figura=="cu"){
					$lado=$_POST['lado'];
					aypCuadrado($lado);
				}
				if($Figura=="ci"){
					$radio=$_POST['radio'];
					aypCirculo($radio);
				}
				if($Figura=="tr"){
					$lado=$_POST['lado'];
					$base=$_POST['base'];
					$altura=$_POST['altura'];
					aypTriangulo($lado,$base,$altura);
				}
			}
		?>
	</section>
	<footer>
		<footer>
		<p>&copy; 2025 FigurasGeométricas. Todos los derechos reservados.</p>
		<p>Esta página fue creada para calcular el área y perímetro de diferentes figuras.</p>
		<p><img src="https://avatars.githubusercontent.com/u/231548503?v=4&size=64" width="30px" height="30px" /> Rodokizzzdev</p>
	</footer>
	</footer>
</body>
<?php
function aypCuadrado ($lado){
	$perimetro=$lado*4;
	$area=pow($lado,2);
	echo "El resultado del perímetro es: " . $perimetro. " CM<br>";
	echo "El resultado del área es: ". $area." CM";
}
function aypCirculo($radio){
	$perimetro=pi()*(2*$radio);
	$area=pi()*pow($radio,2);
	echo "El resultado del perímetro es: " . $perimetro. " CM<br>";
	echo "El resultado del área es: ". $area." CM";
} 
function aypTriangulo($lado,$base,$altura){
	$perimetro=$lado+$base+$altura;
	$area=($base*$altura)/2;
	echo "El resultado del perímetro es: " . $perimetro. " CM<br>";
	echo "El resultado del área es: ". $area." CM";
}
?>
</html>