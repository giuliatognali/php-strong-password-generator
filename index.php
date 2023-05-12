<?php

//verifico se esiste il parametro 
if(isset($_GET['password-length'])){
    //var_dump($_GET['password-length']);

$password_lenght =$_GET['password-length'];


//array dei caratteri che si inseriranno nella password generata
$lowercase = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$uppercase= ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
$numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
$special_characters = ["!","@", "#", "$", "%", "^", "&", "*", "-", "+", "/", "?"];

//unisco gli array
 $range_characters = array_merge($lowercase, $uppercase, $numbers, $special_characters);

 $password = '';
//ciclo for per la generazione della password
for($i = 1; $i <= $password_lenght; $i ++){
    
    // per ogni ciclo prendo un numero randomico tra 0 e lunghezza range_characrter
    $random = rand(0, count( $range_characters)-1);
    
    //concateno il carattere preso in posizione random 
    $password .= $range_characters[$random];


}

var_dump($password);


 //var_dump($range_characters);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Strong Password Generator</h1>
        <div class="container">
            <form action="index.php" method="GET">
                <div class="mb-3">
                    <label for="password-length" class="form-label">Your password length</label>
                    <input type="number" name="password-length" class="form-control" id="password-length" min="8" max="30">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>