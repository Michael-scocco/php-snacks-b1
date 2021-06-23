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
    Snack 6
</h1> 
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


    
</body>
</html>