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
<!-- / SNACK 2 -->
<!-- SNACK 4 -->
<h1>Numeri Random</h1>
<form action="" method="GET">
    <label for="start">Start:</label>
    <input type="text" name="start" id="start">
    <label for="end">End:</label>
    <input type="text" name="end" id="end">
    <label for="elements">Elements:</label>
    <input type="text" name="elements" id="elements">
    <button>INVIO</button>
</form>
<?php
    $num_elements = isset($_GET['elements']) ? ($_GET['elements'] === '' ? 15 :$_GET['elements']) : 15;
    $start = isset($_GET['start']) ? ($_GET['start'] === '' ? 15 : $_GET['start']) : 15;
    $end = isset($_GET['end']) ? ($_GET['end'] === '' ? 15 : $_GET['end']) : 15;
    $array_random = [];

    while (count($array_random) <= $num_elements) {
        $random_number = rand($start, $end);
        if (in_array ($random_number,$array_random) === false) {
            $array_random[] = $random_number;
        };
    };
?>
<!-- / SNACK 4 -->
<!-- SNACK 5 -->
<?php
$paragraph = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure, cupiditate rerum quaerat at totam ut sit, in ducimus magnam dolorem nihil sunt vero quisquam accusamus magni laboriosam molestias facilis doloribus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita perspiciatis molestiae quasi necessitatibus ex? Voluptate possimus dicta, rem, cumque magnam repellendus dignissimos fuga numquam quia deleniti nemo repellat, accusantium quidem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem fugiat impedit, voluptatum hic porro similique, nemo veritatis facilis necessitatibus id, quasi repellendus quis alias. Saepe quasi beatae id debitis Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, sint cum! Deleniti, velit inventore officia provident excepturi id cum. Autem, sequi officiis iste eveniet quasi cum quidem aut quo quibusdam! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa animi sed dicta illum consequatur. Animi ab repellat quia quaerat a, cum mollitia nulla excepturi natus quas harum voluptas accusantium itaque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, voluptatem ducimus, fuga natus eos laboriosam corrupti earum, est neque a soluta consequatur ab eius voluptatibus. Perferendis exercitationem doloribus eligendi commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quas eveniet ea, ratione tempora dignissimos itaque quisquam. Nisi asperiores culpa excepturi vel quos harum? Delectus animi quisquam fuga. Quaerat, magni! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam perferendis nemo laborum nobis nulla veritatis adipisci, temporibus natus nostrum atque eaque dolorem. Blanditiis error culpa, commodi iste sapiente a voluptatibus!';

$with_paragraph = str_replace('.', '</p><p>', $paragraph);
?>

<p>
    <?= $with_paragraph ?> <!-- stessa cosa di usare echo -->
</p>


    
</body>
</html>