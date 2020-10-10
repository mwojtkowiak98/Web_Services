<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Poczatek pliku</h3>
    <?php
        require_once './1_file.php';
        require_once './2_klasy.php';
        require_once './3_person.php';
    ?>

    <!-- Przekazanie składowych do utowrzenia klasy Person -->
    <form action="3_zadanie_person.php" method="POST">
    Podaj imię: <input type=text name="imie"/><br/>
    Podaj nazwisko: <input type=text name="nazwisko"/><br/>
    Podaj wiek: <input type=text name="wiek"/><br/>
    Podaj wzrost: <input type=text name="wzrost"/><br/>

    <input type=submit value="Potwierdź"/>
    </form>

    <h3>Koniec pliku</h3>
</body>
</html>