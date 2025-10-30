<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once './animal.php';
    require_once './frog.php';
    require_once './ape.php';


    $sheep = new Animal("shaun");
    echo "Name : " . $sheep->get_name() . "<br>";
    echo "Legs : " . $sheep->get_legs() . "<br>";
    echo "Cold Blooded : " . $sheep->get_cold_blooded() . "<br><br>";

    $kodok = new Frog("buduk");
    echo "Name : " . $kodok->get_name() . "<br>";
    echo "Legs : " . $kodok->get_legs() . "<br>";
    echo "Cold Blooded : " . $kodok->get_cold_blooded() . "<br>";
    echo "Jump : " . $kodok->jump() . "<br><br>";

    $kera = new Ape("kera sakti");
    echo "Name : " . $kera->get_name() . "<br>";
    echo "Legs : " . $kera->get_legs() . "<br>";
    echo "Cold Blooded : " . $kera->get_cold_blooded() . "<br>";
    echo "Yell : " . $kera->yell() . "<br><br>";



    ?>
</body>

</html>
