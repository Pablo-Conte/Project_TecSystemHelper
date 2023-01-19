<?php

    include_once '../includes/connection.php';

    session_start();

    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = $conn->prepare('SELECT * FROM estagiario WHERE nome = :nome');
    $query->bindParam(':nome', $nome);

    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if($result == false){
        $result = [];
    }


    if (count($result) > 1 && password_verify($_POST['senha'], $result['senha'])) {
        $_SESSION['id_estagiario'] = $result['id_estagiario'];
        $_SESSION['senha'] = $_POST['senha'];
        header('Location: ./estagiario/estagiarioPage.php');
    } else {
        header('Location: ../index.php');
    }

?>