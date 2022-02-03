<!-- SNACK
Creiamo un array consentente dei prodotti con
Nome
Prezzo
Immagine
Tipologia
Stampiamo tutti i nostri prodotti in pagina
Poi con una select filtriamo i nostri prodotti per prezzo o per tipologia -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php include_once __DIR__ . '/server/controller-api.php' ?>
    <?php include_once __DIR__ . '/server/db.php' ?>

    <!-- header -->
    <?php include_once __DIR__ . '/partials/header.php' ?>

    <!-- main -->
    <?php include_once __DIR__ . '/partials/main.php' ?>

    <!-- footer -->
    <?php include_once __DIR__ . '/partials/footer.php' ?>
</body>

</html>