<?php
class rombo extends figura{
    private $lado1;
    private $dmayor;
    private $dmenor;


    function __construct($lado1, $dmayor, $dmenor){
        $this->lado1 = $lado1;
        $this->dmayor = $dmayor;
        $this->dmenor = $dmenor;
    }

    public  function GetArea(){
        return ($this->dmayor*$this->dmenor)/2;
    }
	    
	    
    public function GetPerimetro(){
        $var=$this->lado1*4;
        return $var;
    }
    
    
    public  function GetTipo(){
    return "Rombo";
    }
}
?>
