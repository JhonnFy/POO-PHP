<?php

    class Saiyajin{

        public string $saludar;
        public int $nivel_pelea;

        public function saludar($saludar){
               return $this->saludar = $saludar;
        }

        public function nivel_pelea($nivel_pelea){
            return $this->nivel_pelea = $nivel_pelea;
        }

        public function __construct($saludar, $nivel_pelea){
            $this->saludar = $saludar;
            $this->nivel_pelea = $nivel_pelea;
        }

    }

    $goku = new Saiyajin();

?>
