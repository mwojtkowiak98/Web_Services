<?php
 class Person{
     public $name;
     public $surname;
     public $age;
     public $height;

    public function setName($value){
        $this->name = $value;
    }

    public function setSurname($value){
        $this->surname = $value;
    }

    public function setAge($value){
        $this->age = $value;
    }

    public function setHeight($value){
        $this->height = $value;
    }

    public function getData(){
        $data = <<<DATA
            DANE:<br>
            Imie to: $this->name<br>
            Nazwisko to: $this->surname<br>
            Wiek to: $this->age lat<br>
            Wzrost to: $this->height cm<br>
        DATA;
        return $data;
    }
 }

 ?>