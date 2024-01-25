<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coba OOP PHP</title>
</head>
<body>
    <?php
    
    echo "<h3> Release 0 </h3>";
    
    require ("./animal.php");
    $sheep = new Animal("shaun");
    echo "Name: $sheep->name <br>"; // "shaun"
    echo "legs: $sheep->legs <br>"; // 4
    echo "cold blooded: $sheep->cold_blooded <br>"; // "no"

    // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

    echo "<h3> Release 1 </h3>";

    require ("./ape.php");
    $sungokong = new Ape("kera sakti");
    echo "Name: $sungokong->name <br>";
    echo "legs: $sungokong->legs <br>";
    echo "cold blooded: $sungokong->cold_blooded <br>";
    $sungokong->yell(); // "Auooo"
    
    echo "<br>";
    echo "<br>";

    require ("./frog.php");
    $kodok = new Frog("buduk");
    echo "Name: $kodok->name <br>";
    echo "legs: $kodok->legs <br>";
    echo "cold blooded: $kodok->cold_blooded <br>";
    $kodok->jump(); // "hop hop"

    ?>
</body>
</html>