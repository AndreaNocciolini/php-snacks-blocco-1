<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    <?php
    $paragraph = "Sacramento è una città statunitense, capoluogo dell'omonima contea e capitale dello Stato della California. Secondo il censimento del 2018 la città aveva una popolazione totale di 501.334 abitanti. Fu fondata nel dicembre del 1848 da John Sutter Jr., a partire dal Forte Sutter, fondato dal padre, il capitano John Sutter, nel 1839.Durante la corsa all'oro Sacramento era un punto di distribuzione, centro agricolo e commerciale, terminale per ferrovie, diligenze, trasporti fluviali, telegrafo, la Pony Express e la First Transcontinental Railroad.La città ha una superficie di circa 248 km², con una popolazione di 407.018 nel 2000 (la popolazione era di 275.741 nel 1980). Essa si trova alla confluenza del fiume Sacramento e dell'American River nella porzione settentrionale della California Central Valley, conosciuta come valle del Sacramento. Ha un porto con acque profonde collegate tramite un canale alla baia di Suisun. È il centro ferroviario, di spedizione, manifatturiero e commerciale della valle di Sacramento, dove frutta, verdura, riso, farina e latticini vengono prodotti, si alleva il bestiame e l'industria alimentare è una delle principali attività. ";

    echo '<h1 class="red">Paragrafo Originale</h1>';
    echo $paragraph;

    $sentences = preg_split('/[\.]+/', $paragraph);

    echo '<h2 class="blue">Paragrafo Diviso</h2>';
    for ($i = 0; $i < count($sentences); $i++) {
        echo '<p>' .  $sentences[$i] . '</p>';
    }

    $sentences_2 = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $paragraph);
    echo '<h2 class="green">Paragrafo Diviso V2.0</h2>';
    for ($i = 0; $i < count($sentences_2); $i++) {
        echo '<p>' .  $sentences_2[$i] . '</p>';
    }
    ?>
</body>

</html>