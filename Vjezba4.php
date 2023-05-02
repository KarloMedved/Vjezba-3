<?php



namespace Krug;

include_once 'Konstante.php';    

class Kružnica
{
 
    public $classRadius;



    public function __construct($radius){
        $this->classRadius = $radius;
    }
 
    public function getRadius(){
        return $this->classRadius;
    }
 
 
    public function getVolume() {
 
		return \App2\Konstante\Konstante::FOUR_THIRDS * \App2\Konstante\Konstante::PI * ($this->classRadius * $this->classRadius);
    }
 
    public function getArea()
{
    return \App2\Konstante\Konstante::PI * ($this->classRadius * $this->classRadius);
}
    
 
    public function getDiameter() {
 
        return $this->classRadius += $this->classRadius;
    }
 
}
 
$mySphere = new Kružnica(20);
 
echo "The volume of the circle is ".$mySphere->getVolume()."\n";
echo "The diameter of the circle is ".$mySphere->getDiameter()."\n";
echo "The area of the circle is ".$mySphere->getArea()."\n";
 
var_dump($mySphere->getDiameter());