<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Figuras</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
	<?php
		include("include/class.figura.php");
		include("include/Interface.formulas.php");
		include("figuras/class.cuadrado.php");
		include("figuras/class.rectangulo.php");
		include("figuras/class.triangulo.php");
		include("figuras/class.trapecio.php");
		include("figuras/class.rombo.php");
		include("figuras/class.romboide.php");
		
		if(isset($_POST['calcular'])){
			switch($_POST['tipo']){
				case "cuadrado": $f = new cuadrado($_POST['lado_1']);break;
				case "rectangulo": $f = new rectangulo($_POST['lado_1'],$_POST['lado_2']);break;
				case "triangulo": $f = new triangulo($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_altura']);break;
				case "rombo": $f = new rombo($_POST['lado_1'],$_POST['lado_diagmayo'],$_POST['lado_diagmeno']);break;
				case "romboide": $f = new romboide($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4'],$_POST['lado_altura']);break;
				case "trapecio": $f = new trapecio($_POST['lado_1'],$_POST['lado_2'],$_POST['lado_3'],$_POST['lado_4'],$_POST['lado_altura']);
			}
			echo "El área del " . $f->GetTipo() . " es: " . $f->GetArea();
			echo "<br>El perímetro del " . $f->GetTipo() . " es: " . $f->GetPerimetro();
		}else{
			echo figura::get_form();
		}
		
	?>
<br><br>
<a href="index.php" style="color: darkred;"><h2>REGRESAR</h2></a>                    
	
	
</body>

</html>
