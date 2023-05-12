<?php

require_once __DIR__.'/functions.php';

session_start();

$password = '';
$password_length = $_GET['password-length'];


//verifico se esiste il parametro 
if (!empty($password_length)) {
    $password = generatePassword($password_length);

    //salvo la password in una sessione
    $_SESSION['password'] = $password;
    //redirect della sessione
    header('location: ./result-password.php');
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
                    <label for="password-length" class="form-label">Chose your password length</label>
                    <input type="number" value="<?php echo $password_length; ?>" name="password-length" class="form-control" id="password-length" min="8" max="30">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>