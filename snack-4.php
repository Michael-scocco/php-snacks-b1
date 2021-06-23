<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

       <h1>Snack 4</h1>
        
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
    

</body>
</html>