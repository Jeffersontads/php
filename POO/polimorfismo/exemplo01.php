<?php 

abstract class Animal 
{
    public function falar() 
    {
        return "Som";
    }
    public function mover() 
    {
        return "Anda";
    }
}

class Cachorro extends Animal 
{
    public function falar() 
    {
        return "late";
    }
}


class Gato extends Animal  
{
    public function falar() 
    {
        return "Mia";
    }   
}

class Passaro extends Animal  
{
    public function falar() 
    {
        return "Pia ou Canta";
    } 

    public function mover() 
    {
        return "VOA e " . parent::mover();
    }    
}

$pluto = new Cachorro();

 
echo $pluto->falar() . "<br / >";
echo $pluto->mover() . "<br / >";

echo "----------------------------- <br/>";

$mima = new Gato();
echo $mima->falar() . "<br / >";
echo $mima->mover() . "<br / >";

echo "----------------------------- <br/>";

$ave = new Passaro();
echo $ave->falar() . "<br / >";
echo $ave->mover() . "<br / >";
?>