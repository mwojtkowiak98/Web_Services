<?php
    require_once './class/Person.php';

    //Obsługa formularza
    function formData(){
        $formPerson = new Person();
    
        $formPerson->setName($_POST['imie']);
        $formPerson->setSurname($_POST['nazwisko']);
        $formPerson->setAge($_POST['wiek']);
        $formPerson->setHeight($_POST['wzrost']);
    
        echo '<br>'.$formPerson->getData();
    }
    formData();

?>