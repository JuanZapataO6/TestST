
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
$contraseña = "postgres";
$usuario = "postgres";
$nombreBaseDeDatos = "prueba";

$rutaServidor = "localhost";
$puerto = "5432";
try {
    $base_de_datos = new PDO("pgsql:host=$rutaServidor;port=$puerto;dbname=$nombreBaseDeDatos", $usuario, $contraseña);
    $base_de_datos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base : " . $e->getMessage();
}
?>

    <div class="signupFrm">
        <form action="" class="form">
          <h1 class="title">Sign up</h1>
    
          <div class="inputContainer">
            <label for="" class="label">Email:</label>
            <input type="text" class="input" placeholder="user@mimail.com">   
          </div>
    
          <div class="inputContainer">
            <label for="" class="label">Names:</label>
            <input type="text" class="input" placeholder="Insert your name">
            
          </div>
          <div class="inputContainer">
            <label for="" class="label">Lastname:</label>
            <input type="text" class="input" placeholder="Insert your lastname">
          </div>
    
          <div class="inputContainer">
            <label for="" class="label">Password:</label>
            <input type="text" class="input" placeholder="Type your Password">
          </div>
    
          <div class="inputContainer">
            <label for="" class="label">Confirm Password:</label>
            <input type="text" class="input" placeholder="please confirm your Password">
          </div>
    
          <input type="submit" class="submitBtn" value="Sign up">
        </form>
      </div>
</body>
</html>