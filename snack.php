<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>
    <!-- SNACK 1 -->
    <h1>Punteggi Basket</h1>
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
<!-- / SNACK 1 -->
<!-- SNACK 2 -->
<h1>E-Mail</h1>
<form action="" method="GET">
       <label for="name">Nome:</label>
       <input type="text" name="name" id="name">
       <label for="email">Email:</label>
       <input type="text" name="email" id="email">
       <label for="age">Età:</label>
       <input type="text" name="number" id="number">
       <button>INVIO</button>
   </form>

   <?php
       if (isset($_GET['email']) && isset($_GET['name']) && isset($_GET['number'])) {
        $email = $_GET['email'];
        $name = $_GET['name'];
        $number = $_GET['number'];
        $pos_chiocciola = strpos($email, '@');
    
            if ($pos_chiocciola !== false && strpos($email, '.', $pos_chiocciola) !== false && strlen($name) < 3 !== true &&  is_numeric($number) !== false ) {
                echo ucwords('accesso riuscito');
            } else {
                echo ucwords('accesso negato');
            };
        };
   ?>

        
    
</body>
</html>