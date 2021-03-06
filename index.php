<!-- 
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box-grigio{
            width: 100px;
            height: 100px;
            background-color: gray;
        }
        .box-verde{
            width: 100px;
            height: 100px;
            background-color: green;
        }
    </style>
</head>
<body>

<h1>
    Snack 1
    
    <?php  
    /*
      Snack 1
        Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla  squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
    */
       $db = [
           [
               'team1' => 'milano',
               'team2' => 'torino',
               'score1' => 30,
               'score2' => 25,
           ],
           [
                'team1' => 'trento',
                'team2' => 'bolzano',
                'score1' => 50,
                'score2' => 20,
            ],
            [
                'team1' => 'bologna',
                'team2' => 'empoli',
                'score1' => 10,
                'score2' => 22,
            ],
        ];
        // ciclo tutte le partite
        var_dump($db);
        for ($i=0; $i < count($db); $i++) { 
            # code...
            $match = $db[1];
            var_dump($match);
            echo '<br><br>';//voglio vedere lemento per elemento

            // stampiamo a schermo le nostre partite

            echo 'team 1:' . $match['team1'] . '<br>'
                . 'team 2: ' . $match['team2'] . '<br>'
                . 'score 1: ' . $match['score1'] . '<br>'
                . 'score 2: ' . $match['score2'] . '<br><hr>';

        }
    ?>

</h1>

<h1>
    Snack 2
    
    <?php  
    /*
      Snack 2
        Passare come parametri GET name, mail e age e verificare 
        (cercando i metodi che non conosciamo nella documentazione) 
        che name sia più lungo di 3 caratteri, che mail contenga 
        un punto e una chiocciola e che age sia un numero. 
        Se tutto è ok stampare “Accesso riuscito”, altrimenti 
        “Accesso negato”
    */

    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    var_dump($name, $mail, $age);

        
    ?>

</h1>

<h1>
    Snack 3
    
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
    <p> <strong><?php $post['title']; ?> </strong></p>
    <p><?php $post['author']; ?></p>
    <p><?php $post['text']; ?></p>

</h1>

<h1>
    Snack 4
    <?php 
        /*
            Snack 4
            Creare un array con 15 numeri casuali, 
            tenendo conto che l’array non dovrà contenere lo stesso 
            numero più di una volta
        */
        $arr = [];
        //fin tanto che la numerosita(cont), del nostro array è inferiore a 15, continuiamo a ciclare
        while (count($arr) < 15){

            $rnd = rand(1, 100);//faccio la random

            //se questo elemento(cioè il numero casuale) non è presente all'interno dell'array (!in_array) quale array? quello dentro la parentesi, allora lo puschio dentro
            if (!in_array($rnd, $arr)) {
                # code...
                $arr [] = $rnd;
            }
        }
        var_dump($arr);

    ?>

</h1>

<h1>
    Snack 5
    
    <?php  
    /*
      Snack 5
      Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    */

    $str = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum maiores reprehenderit rerum aliquid sequi. In sapiente eveniet esse mollitia aspernatur.';
    //voglamo spezzetare tra i punti per avere un array che poi possiamo ciclare e stampare i vari p

    // per spezzare la stringa uso explode

    $sentences = explode('.', $str);
    // var_dump($sentences);

    for ($i=0; $i < count($sentences); $i++) { //se voglio ignorare il punto finale il quale mi da una stringa pari a zero, nel count faccio -1
        # code...
        $sentence = $sentences[$i];
        // var_dump($sentence);
        echo '<p>' . $sentence . '<p>';

        // se il count è maggiore di 1 è vero se è -1 è falso
        if ($sentence) {
            # code...
            echo '<p>' . $sentence . '.<p>';
        }
    }

    ?>

</h1>

<h1>
    Snack 6
    
    <?php  
    /*
      Snack 6
        Utilizzare questo array: https://pastebin.com/CkX3680A. 
        Stampiamo il nostro array mettendo gli insegnanti in un 
        rettangolo grigio e i PM in un rettangolo verde.
    */
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
        
        $teachers = $db['teachers'];
        $pms = $db['pm'];

        var_dump($teachers);
        echo '<br>';
        var_dump($pms);


        for ($i=0; $i < count($teachers); $i++) { 
            # code...
            $teacher = $teachers[$i];

            echo '<div class="box-grigio">' 
            . $teacher['name'] . ' ' . $teacher['lastname']
            . '</div>';
        }

        for ($i=0; $i < count($pms); $i++) { 
            # code...
            $pm = $pms[$i];

            echo '<div class="box-verde">' 
            . $pm['name'] . ' ' . $pm['lastname']
            . '</div>';
        }
    ?>

</h1>



    
</body>
</html>