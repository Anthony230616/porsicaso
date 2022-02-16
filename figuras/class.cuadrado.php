<?php
	class cuadrado extends figura{
		private $lado;

		function __construct($lado){
			$this->lado = $lado;
		}
		public  function GetArea(){
			$var=$this->lado * $this->lado;
			return $var;
		}
			
			
		public function GetPerimetro(){
			return $this->lado*4;
		}
		
		
		public  function GetTipo(){
			return "Cuadrado";
		}
	}
?>
