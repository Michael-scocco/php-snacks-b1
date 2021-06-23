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
</h1>
    
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


    
</body>
</html>