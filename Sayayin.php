<?php

// CreandoLaClase
class Saiyajin{
    //Atributos
    public string $nombre="Goku";
    public int $nivel_pelea=1000;
  
    //Metodo1
    public function Saludar():string{
        return "Hola Soy " . $this->nombre;
    }
    //Metodo2
    public function Nivel_De_Pelea(){
        return "Hola Soy " . $this->nombre . " Mi Nivel De Pelea Es: " . $this->nivel_pelea;
    }
}



//InstanciaDeClase
$goku = new Saiyajin();

var_dump($goku)

?>