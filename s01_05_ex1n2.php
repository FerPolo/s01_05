

<?php

abstract class Shape{

    public $amplada;
    public $altura;
 
    public function __construct($amplada,$altura)

    {   $this->amplada = $amplada;
        $this->altura = $altura;

    }

    abstract public function areagenerico();
    
}
     
    class Rectangle extends Shape{

       public function areagenerico()
        {
       return $this->amplada * $this->altura;
        }
        
       public function printarea()

      { echo "L'àrea del rectangle és de " . $this->areagenerico() . "metres quadrats";}

       }

    class Triangle extends Shape{

       public function areagenerico()
       {
       return $this->amplada * $this->altura / 2;
       }
       public function printarea()

      { echo "L'àrea del triangle és de ".$this->areagenerico ()." "." metres quadrats";}

       }
    
    $rectangulo1 = new Rectangle (5,5);

    echo $rectangulo1->printarea();

