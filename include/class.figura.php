<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<center>
			<h2>Integrantes</h2>
			<p>Christopher Ramos</p>
			<p>Anthony Sigcha</p>
			<p>Jose Collahuazo</p>
			</center>
			<form name="figuras" method="POST" action="">
			<table border=0 align="center">
				<tr>
					<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select name="tipo"  id="id_categoria" onchange="carg(this);">
							<option value="sel">Seleccione...</option>
							
							<option value="trapecio">Trapecio</option>
							<option value="rombo">Rombo</option>
							<option value="romboide">Romboide</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1 o Base:</td>
					<td><input type="text" name="lado_1" size="4" id="lado1" disabled></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" name="lado_2"size="4" id="lado2" disabled></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" name="lado_3"size="4" id="lado3" disabled></td>
				</tr>
				<tr>
					<td>Lado 4:</td>
					<td><input type="text" name="lado_4"size="4" id="lado4" disabled></td>
				</tr>
				<tr>
					<td>Altura:</td>
					<td><input type="text" name="lado_altura"size="4" id="altura" disabled></td>
				</tr>	
				<tr>
					<td>Diagonal Mayor:</td>
					<td><input type="text" name="lado_diagmayo"size="4" id="dmayor" disabled></td>
				</tr>	
				<tr>
					<td>Diagonal Menor:</td>
					<td><input type="text" name="lado_diagmeno"size="4" id="dmenor" disabled></td>
				</tr>							
				<tr>
					<th colspan="2"><input type="submit" name="calcular" value="Calcular"></th>
				</tr>
			</table>
			</form>
			<br>
			<script>
			var lado1 = document.getElementById("lado1");
			var lado2 = document.getElementById("lado2");
			var lado3 = document.getElementById("lado3");
			var lado4 = document.getElementById("lado4");
			var altura = document.getElementById("altura");
			var dmayor = document.getElementById("dmayor");
			var dmenor = document.getElementById("dmenor");

				function carg(elemento) {
				  d = elemento.value;
				  
				  if(d == "cuadrado"){
				    lado1.disabled = false;
				    lado2.disabled = true;
				    lado3.disabled = true;
					lado4.disabled = true;
					altura.disabled = true;
					dmayor.disabled = true;
					dmenor.disabled = true;
				  }else{
				  	if(d == "rectangulo"){
				  		lado1.disabled = false;
					    lado2.disabled = false;
					    lado3.disabled = true;
						lado4.disabled = true;
						altura.disabled = true;
						dmayor.disabled = true;
						dmenor.disabled = true;
				  	}else{
				  		if(d=="triangulo"){
				  			lado1.disabled = false;
						    lado2.disabled = false;
						    lado3.disabled = false;
							lado4.disabled = true;
							altura.disabled = false;
							dmayor.disabled = true;
							dmenor.disabled = true;
				  		}else{
							if(d=="trapecio"){
								lado1.disabled = false;
								lado2.disabled = false;
								lado3.disabled = false;
								lado4.disabled = false;
								altura.disabled = false;
								dmayor.disabled = true;
								dmenor.disabled = true;
							}else{
								if(d=="rombo"){
									lado1.disabled = false;
									lado2.disabled = true;
									lado3.disabled = true;
									lado4.disabled = true;
									altura.disabled = true;
									dmayor.disabled = false;
									dmenor.disabled = false;
								}else{
									if(d=="romboide"){
										lado1.disabled = false;
										lado2.disabled = false;
										lado3.disabled = false;
										lado4.disabled = false;
										altura.disabled = false;
										dmayor.disabled = true;
										dmenor.disabled = true;
									}else{
				  			if(d=="sel"){
								lado1.disabled = true;
								lado2.disabled = true;
								lado3.disabled = true;
								lado4.disabled = true;
								altura.disabled = true;
								dmayor.disabled = true;
								dmenor.disabled = true;}
				  		}
					}
					}
					}  
				  	}
				  }
				}
			</script>';
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
