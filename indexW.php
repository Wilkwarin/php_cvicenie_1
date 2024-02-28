<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Moj web</h1>

    <?php
    //kod
    echo("Ahoj");
    echo("<br>");
    echo("<br>");

    /* premenne */
    $meno = "Peter";
    $vek = 25;
    $hodnota = 3.14;
    $pravda = true;
    $pole = array(1, 2, 3); // Indexované pole

    echo('<b>Vypis cez echo</b>');
    echo("<br>");
    echo($meno);
    echo("<br>");
    echo("Vitaj: ".$meno." ".$vek); // Peter bude obychnym
    echo("<br>");
    echo("Vitaj: "."<b>".$meno."</b>"." ".$vek); // Peter bude boldom
    echo("<br>");

    $navratova_hodnota = print("");
    echo($navratova_hodnota);
    echo("<br>");

    /* Vypis - print_r */

    print_r($pole); // echo tu nefunguje
    echo("<br>");

    /* var_dump */
    var_dump($meno);
    echo("<br>"); // dopolnitelna informacia o premennej
    echo("<br>");

    /* Typy poli v PHP */
    echo("<b>Typy poli</b>");
    echo("<br>");

    /* indexovane polia */
    $farby = array("cervena", "modra", "zelena");
    echo $farby[0]; // vypise: cervena
    echo("<br>");

    /* asociativne polia */
    $osoba = array("meno" => "Peter", "vek" => 25, "povolanie" => "programator");
    echo $osoba["meno"]; // vypise: Peter
    echo("<br>");

    /* viacrozmerne polia */

    $zoznam = array(
        // 0 1 2
        array("jablko", "hruska", "banan"), // 0 riadok
        array("auto", "lod", "lietadlo") // 1 riadok
    );

    echo $zoznam[0][0]; // vypise: jablko
    echo("<br>");

    echo $zoznam[1][1]; // vypise: lod
    echo("<br>");
    echo("<br>");
    
    /* Podmienky v PHP */
    echo('<b>Podmienky</b>');
    echo("<br>");
    $age = 18;
    if($age >= 18){
        echo "Si dospely."; // funguje aj bez ()
        echo("<br>");
    }else{
        echo("Si neplnolety.");
        echo("<br>");
    }
    echo("<br>");

    /* Cykly */
    echo('<b>Cykly</b>');
    echo("<br>");
    for ($i = 0; $i < 5; $i++) {
        echo("i = $i <br>"); // a v apostrofoch nefunguje
    }
    echo("<br>");

    $i = 0;
    while ($i < 5) {
        echo "i = $i <br>";
        $i++;
    }
    echo("<br>");

    // for color in colors - opachnym Pythonu smerom, iz kogo vybirajem, a uz potom kogo vybirajem
    foreach ($farby as $farba) {
        echo "Farba: $farba <br>";
    }
    echo("<br>");

    // vmesto slovnikov asociativne polia - ako prejdeme cyklom?
    // meno, hodnota je vek
    $ages = array("Peter" => 25, "Jana" => 30, "Marek" => 20);
    foreach ($ages as $name => $age) {
        echo "$name ma $age rokov <br>";
    }
    echo("<br>");

    ?>

</body>
</html>