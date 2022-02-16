<?php
class romboide extends figura{
    private $lado1;
    private $lado2;
    private $lado3;
    private $lado4;
    private $altura;


    function __construct($lado1, $lado2, $lado3, $lado4, $altura){
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
        $this->lado4 = $lado4;
        $this->altura = $altura;
    }

    public  function GetArea(){
        return $this->lado1*$this->altura;
    }
	    
	    
    public function GetPerimetro(){
        $var=$this->lado1+$this->lado2+$this->lado3+$this->lado4;
        return $var;
    }
    
    
    public  function GetTipo(){
    return "Romboide";
    }
}
?>
