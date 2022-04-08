<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>email</title>
</head>
<body>
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