<?php
    include_once './includes/connection.php';
    session_start();

    if (isset($_SESSION['id_estagiario'])){
        header('Location: ./pages/estagiario/envioEmailTRE.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Pages/css/login.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/png">
    <title>Login</title>
</head>
<body>
    
    <div class='titulo'>
        <h1>TS Telecom Helper</h1>
    </div>
    <div class="login">
        
        <h1>Login</h1>
        <form method=post action="./Pages/loginAuth.php">
           <input name='usuario' type="text" placeholder="Usuário">
           <input name='senha' type="password" placeholder="Senha">
           <button type="submit">Login</button>
        </form>
    </div>
    <footer>
        <span class="nomeCompainha">Created by&nbsp;<a class="nomeCompainha" target="_blank" href="https://github.com/pablo-conte"> Pablo's Company ®</a></span>
    </footer>
    
</body>
</html>