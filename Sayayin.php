<?php

//CreateClass
class Saiyajin{
    //Atributes
    public string $nombre;
    public int $nivel_pelea;

    public function __construct($nombre, $nivel_pelea){
        $this->nombre=$nombre;
        $this->nivel_pelea=$nivel_pelea;
    }
      
    //Method1
    public function Saludar($saludar="Hola Soy"):string{
        return $saludar . $this->nombre;
    }
    //Method2
    public function Nivel_De_Pelea($nivel_pelea="Mi Nivel De Pelea Es:"){
        return $nivel_pelea .  $this->nivel_pelea;
    }

    //Method3
    public function Characteristcs(){
        return $this->Saludar() . " & " . $this->Nivel_De_Pelea();
    }

}

//InstanciaDeClase
$goku = new Saiyajin("Goku",1000);
echo $goku->Characteristcs();

echo "<br><br>";

$vegueta = new Saiyajin("Vegueta",100);
echo $vegueta->Characteristcs();

?>