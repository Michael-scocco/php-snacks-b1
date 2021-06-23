<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Snack 3
        </h1>
    <?php

        /*
            Snack 3
            Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
            Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
        */

        $posts = [

            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ],
        ];

        // var_dump(array_keys($posts));
        $keys = array_keys($posts);

        for ($i=0; $i < count($keys) ; $i++) { 
            # code...
            $key = $keys[$i];
            var_dump($key);
            var_dump($posts[$key]);
            //die();//blocco il ciclo

            for ($j=0; $j < count($posts[key]); $j++) { 
                # code...
                $post = $posts[$key][$j];
                var_dump($post);
            }
        }
        
    ?>

    <h1><?php $post['title']; ?></h1>
    <p><?php $post['author']; ?></p>
    <p><?php $post['text']; ?></p>
    
</body>
</html>