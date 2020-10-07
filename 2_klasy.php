<?php
 class User{
     public $name;
     public $surname;
     public $color;

    public function setName($value){
        $this->name = $value;
    }

    public function setSurname($value){
        $this->surname = $value;
    }

    public function setColor($value){
        $this->color = $value;
    }

    public function getData(){
        $data = <<<DATA
            DANE:<br>
            Imie to: $this->name<br>
            Nazwisko to: $this->surname<br>
            Kolor to: $this->color<br>
        DATA;
        return $data;
    }
 }

 $user1 = new User();
 $user1->setName("Ann");
 $user1->setColor("red");
 $user1->setSurname("Kowalsky");

 echo $user1->getData();

?>