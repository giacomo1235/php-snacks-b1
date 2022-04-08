<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punteggi Basket</title>
</head>
<body>
    <ul> <?php
            $array_partite = [
                [
                    'casa' => [
                        'nome' => 'olimpia milano',
                        'punteggio' => 90
                    ],
                    'ospite' => [
                        'nome' => 'cantù',
                        'punteggio' => 60
                    ]
                ],
                [
                    'casa' => [
                        'nome' => 'atletico meddelin',
                        'punteggio' => 100
                    ],
                    'ospite' => [
                        'nome' => 'paraguay',
                        'punteggio' => 80
                    ]
                    ],
                [
                    'casa' => [
                        'nome' => 'bologna',
                        'punteggio' => 90
                    ],
                    'ospite' => [
                        'nome' => 'golden state',
                        'punteggio' => 1000
                    ]
                ]  
            ];
            for ($_i=0; $_i < count($array_partite); $_i++)  {
                ?>
                <li>
                    <span><?= ucwords($array_partite[$_i]['casa']['nome'] . ' - ' . $array_partite[$_i]['ospite']['nome'] . ' | ')?></span>
                    <span><?= $array_partite[$_i]['casa']['punteggio'] . ' - ' . $array_partite[$_i]['ospite']['punteggio']?></span>
                </li><?php
            }?>
        </ul>

        
    
</body>
</html>