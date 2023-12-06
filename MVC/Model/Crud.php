<?php

// Read
$result = mysqli_query($conexao, "SELECT * FROM cliente");
$clientes = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Update
if (isset($_POST['update'])) {
    $id = $_POST['idcliente'];
    $senha = $_POST['senha']
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $numero = $_POST['numero'];
    $rg = $_POST['rg'];


    $update_query = "UPDATE cliente SET nome='$nome', email='$email', cpf='$cpf', telefone='$telefone', cep='$cep', numero ='&numero', rg='$rg' WHERE  idcliente=$idcliente";
    mysqli_query($conexao, $update_query);
}

// Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conexao, "DELETE FROM cliente WHERE id=$id");
}
?>