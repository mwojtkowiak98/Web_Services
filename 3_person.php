<?php
    require_once './class/Person.php';

    //test person
    $person = new Person();

    $person->setName("Jasiu");
    $person->setSurname("Kowalski");
    $person->setAge("32");
    $person->setHeight("168");

    echo '<br>'.$person->getData().'<br>';

//dodaj do klasy możliwość dodania wieku oraz wzrostu    
//dodaj metodę, która umożliwia ustawienie wszystkich składowych
//utwórz metodę, która zwróci wszystkie dane w formacie:
    //Dane:
    //Imię:...
    //Nazwisko:...
    //Wiek:...lat
    //Wzrost:...cm

?>