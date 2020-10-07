<?php
    require_once './class/Person.php';

    $person = new Person();

    $person->setName("Jasiu");
    echo '<br>'.$person->name;


//dodaj do klasy możliwość dodania wieku oraz wzrostu    
//dodaj metodę, która umożliwia ustawienie wszystkich składowych
//utwórz metodę, która zwróci wszystkie dane w formacie:
    //Dane:
    //Imię:...
    //Nazwisko:...
    //Wiek:...lat
    //Wzrost:...cm

?>