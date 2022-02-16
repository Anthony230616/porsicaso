<?php
class triangulo extends figura{
    private $lado1;
    private $lado2;
    private $lado3;
    private $altura;

    function __construct($lado1, $lado2, $lado3, $altura){
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
        $this->altura = $altura;
    }
    public  function GetArea(){
        return ($this->lado1*$this->altura)/2;
    }
	    
	    
    public function GetPerimetro(){
        $var=$this->lado1+$this->lado2+$this->lado3;
        return $var;
    }
    
    
    public  function GetTipo(){
    return "Triangulo";
    }
}
?>
