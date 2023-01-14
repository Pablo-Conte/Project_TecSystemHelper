<?php

    include_once '../includes/connection.php';

    session_start();

    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = $conn->prepare('SELECT * FROM estagiario WHERE nome = :nome AND senha = :senha');
    $query->bindParam(':nome', $nome);
    $query->bindParam(':senha', $senha);

    $query->execute();

    $result = $query->fetchAll();

    if (count($result) > 0) {
        $_SESSION['email'] = $result['email'];
        header('Location: ./envioEmailTRE.php');
    }
    
    // header('Location: ../index.php');


?>