<?php

    class person{
        public $name = 'Juan Pablo';
        public $lastname = 'Morales Cruz';
        protected $age;
        private $id;
        public $height;

        public function info(){
            echo 'Nombre: ' . $this->name . '<br>'. 'Apellido: ' .  $this->lastname;
        }
    }

?>