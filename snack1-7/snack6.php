<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


?>

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
    foreach ($db as $key => $teacher) {
        echo '<h1 class="violet">' . $key . '</h1>';
        foreach ($teacher as $value) {
            if ($key === 'teachers') {
                echo '<div class="teachers-container">';
                echo '<p><span class="red">Name</span> : ' . $value['name'] . '</p>';
                echo '<p><span class="green">Lastname</span> :' . $value['lastname'] . '</p>';
                echo '</div>';
            } else {
                echo '<div class="pm-container">';
                echo '<p><span class="red">Name</span> : ' . $value['name'] . '</p>';
                echo '<p><span class="green">Lastname</span> :' . $value['lastname'] . '</p>';
                echo '</div>';
            }
        }
    }
    ?>
</body>

</html>