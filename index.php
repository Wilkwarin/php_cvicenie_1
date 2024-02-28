<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Moja stránka</h1>
    <?php 
    //sem ide kod
	
	/* PREMENNÉ, DÁTOVÉ TYPY A VÝPISY V PHP*/
	
	//Výpis pomocou echo
    echo "Moja stránka<br>"; //dvojité úvodzovky
    echo 'Moja stránka<br>'; //jednoduché úvodzovky
    echo("Moja stránka<br>"); //echo môže mať zátvorky

    //String v python: meno = "Peter"  
	//String v js: var meno = "Peter";
	
    $meno = "Peter";
    echo $meno;
    echo '<br>';

    echo 'Ahoj $meno<br>'; // nevidí hodnotu premennej
    echo "Ahoj $meno<br>"; // vidí hodnotu premennej

    $vek = 25; // Celé číslo
    $hodnota = 3.14; // Desatinné číslo
    $pravda = true; // Boolean hodnota
    echo 'Ahoj '.$meno.'s vekom '.$vek.'<br>';// Spájame bodkou
    echo "Ahoj $meno s vekom $vek <br>"; // Nemusíme spájať

    // Výpis pomocou print - pomalší, vracia 1 (return 1)
    print("$meno<br>");
    $navratova_hodnota = print("");
    echo($navratova_hodnota); //vypíše 1
    echo '<br>';

    // Výpis pomocou var_dump - vracia okrem hodnoty dátový typ a dĺžku
    var_dump($meno);
    echo '<br>';
    
    /* POLIA*/
					//0            1       2
    $farby = array("červená", "modrá", "zelena"); //INDEXOVANÉ POLIA 
    echo $farby[0]; // Vypíše: červená
    echo("<br>"); 

    print_r($farby);
    echo('<br>');
	
    //python dict   kluc  :  hodnota
    $osoba = array("meno" => "Peter", 
                  "vek" => 25, 
                  "povolanie" => "programátor"
                ); //ASOCIATÍVNE POLIA
    echo $osoba["meno"]; // Vypíše: Peter
    echo("<br>");

    $zoznam = array(
        //     0,           1,       2
        array("jablko", "hruška", "banán"),//0
        array("auto", "loď", "lietadlo"),//1
    );//VIACROZMERNÉ POLIA
    //       riadok stlpec
    echo $zoznam[0][0]; // Vypíše: jablko
    echo("<br>");
    echo $zoznam[1][1]; // Vypíše: loď
    echo("<br>");

    /*PODMIENKY V PHP*/
    $age = 18;
    if($age >= 18)
    {
        echo "Si dospelý.";
        echo("<br>"); 
    }
    else
    {
        echo "Si neplnoletý.";
        echo("<br>"); 
    }

    /*CYKLY V PHP*/
    for($i = 0; $i < 5; $i++){
       echo "Hodnota premennej i je: $i <br>";
    }

    $i=0;
    while($i<5){
        echo "Hodnota premennej i je: $i <br>";
        $i++;
    }

    $colors = array("červená", "modrá", "zelená");
    // python for color in colors
    foreach($colors as $color){
        echo "Farba: $color <br>";
    }

    $data = array("Peter" => 25, 
                  "Jana" => 30, 
                  "Marek" => 20
                );
    
    foreach($data as $name => $age){
        echo "$name má $age rokov <br>";
    }

    ?>
    

</body>
</html>