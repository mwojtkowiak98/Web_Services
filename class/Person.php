<?php
 class Person{
     public $name;
     public $surname;
     public $color;

    public function setName($value){
        $this->name = $value;
    }

    public function setSurname($value){
        $this->surname = $value;
    }

    public function getData(){
        $data = <<<DATA
            DANE:<br>
            Imie to: $this->name<br>
            Nazwisko to: $this->surname<br>
        DATA;
        return $data;
    }
 }

 ?>