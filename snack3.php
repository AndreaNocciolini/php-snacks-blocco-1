<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Lorem Ipsum'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Davide Mastrandea',
            'text' => 'Stampare ogni dato'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Giuseppe Cozzaro',
            'text' => 'Invisible no transfer'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Andrea Andreini',
            'text' => 'Non esattamente'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Maria Giudici',
            'text' => 'Quante verità'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Element Index',
            'text' => '100% riciclabile'
        ]
    ],
];

// foreach ($posts as $key => $post) {
//     echo '<h1 class="violet">' . $key . '</h1>';
//     foreach ($post as $content) {
//         echo '<p><span class="red">Title</span> : ' . $content['title'] . '</p>';
//         echo '<p><span class="green">Author</span> :' . $content['author'] . '</p>';
//         echo '<p><span class="blue">Text</span> : ' . $content['text'] . '</p>';
//     }
// }

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
    foreach ($posts as $key => $post) {
        echo '<h1 class="violet">' . $key . '</h1>';
        foreach ($post as $content) {
            echo '<p><span class="red">Title</span> : ' . $content['title'] . '</p>';
            echo '<p><span class="green">Author</span> :' . $content['author'] . '</p>';
            echo '<p><span class="blue">Text</span> : ' . $content['text'] . '</p>';
        }
    }
    ?>
</body>

</html>