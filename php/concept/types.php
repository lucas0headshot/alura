<?php
    $string = "Sou uma string";
    $integer = 1;
    $float = 1.1;
    $boolean = true;
    $array = ['Opa', ', sou', 'um', 'array'];


    class minhaClasse {
        public $name;


        public function __construct($name) {
            $this->name = $name;
        }


        public function saudacoes() {
            echo 'Opa, me chamo '.$this->name.'!';
        }
    }

    $object = new minhaClasse('Lucas');



    echo $string."/n";
    echo $integer."/n";
    echo $float.'/n';
    echo $boolean.'/n';
    var_dump($array);
    echo $object->saudacoes();