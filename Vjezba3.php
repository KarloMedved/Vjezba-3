<?php

interface onOffInterface
{
 public function turnOn(): string;
 public function turnOff(): string;
}

abstract class Cars
{
 abstract public function maxPunTank(): string;
}

class Kia extends Cars implements onOffInterface
{
  public function maxPunTank(): string
  {
   return "Kia can drive 815 km\n";
  }
 
 public function turnOn(): string
 {
  return "Lets a Go!\n";
 }
 public function turnOff(): string
 {
  return "Shut Down\n";
 }
}

class Renault extends Cars implements onOffInterface
{
 public function maxPunTank(): string
  {
   return "Renault can drive 720 km";
  }
 
  public function turnOn(): string
 {
  return "Lets a Go!\n";
 }
 public function turnOff(): string
 {
  return "DED!\n";
 }
}


class OnOffCustom implements onOffInterface
{
  public function turnOn(): string
 {
  return "Hello World\n";
 }
 public function turnOff(): string
 {
  return "Dont forget me\n";
 }
}

$Kia = new Kia();
$Renault = new Renault();
$OnOffCustom = new OnOffCustom();

echo $Kia->turnOn();
echo $Kia->turnOff();
echo $Kia->maxPunTank();
echo"\n";
echo $Renault->turnOn();
echo $Renault->turnOff();
echo $Renault->maxPunTank();
echo"\n";
echo $OnOffCustom->turnOn();
echo $OnOffCustom->turnOff();
