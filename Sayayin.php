<?php

//CreateClass
class Saiyajin{
    //Atributes
    public string $nombre="Goku";
    public int $nivel_pelea=1000;
  
    //Method1
    public function Saludar():string{
        return "Hola Soy " . $this->nombre;
    }
    //Method2
    public function Nivel_De_Pelea(){
        return " Mi Nivel De Pelea Es: " . $this->nivel_pelea;
    }

    //Method3
    public function Characteristcs(){
        return $this->Saludar() . " & " . $this->Nivel_De_Pelea();
    }

}



//InstanciaDeClase
$obj_goku = new Saiyajin();
$obj_vegueta = new Saiyajin();




?>