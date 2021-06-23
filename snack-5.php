<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>
        Snack 5
    </h1>
        
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

</body>
</html>