<?php

class Automobil{
    public function __construct(
        protected string $proizvođač, 
        protected int $šasija, 
        protected string $model
        )
    {
        echo "Calling construct in Automobil\n";
    }

    public function setProizvođač(string $proizvođač): void
    {
        $this->proizvođač = $proizvođač;
    }

    public function setŠasija(int $šasija): void
    {
        $this->šasija = $šasija;
    }

    public function setModel(bool $model): void
    {
        $this->model = $model;
    }
    public function getProizvođač(): string
    {
        return $this->proizvođač;
    }
}
class Podatci extends Automobil
{
    public function __construct(
       public string $proizvođač, 
       public int $šasija, 
       public string $model
            )
    {
        parent::__construct($proizvođač, $šasija, $model);
        echo "Calling construct in Podaci\n";
    }

    public function __destruct()
    {
             if ($this->šasija === 2923455234){
             echo "Auto šasije $this->šasija ide na reciklažu\n";}
             else {
             echo "Auto je u voznom stanju\n";
             }



    }

    

}

$podatci = new Podatci('Zastava', 2923455234, 'Yugo');
$podatci2 = new Podatci('Ceed', 94875532, 'Kia');
$podatci3 = new Podatci('Clio', 7564532, 'Renault');


var_dump($podatci ,$podatci2, $podatci2);
