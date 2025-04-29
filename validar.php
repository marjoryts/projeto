<?php

function validarCampo($campo, $valor) {
    if (empty($valor)) {
        return "$campo é obrigatório!";
    }
    return "";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefone = $_POST['telefone'] ?? '';
    $data_de_nascimento = $_POST['data_de_nascimento'] ?? '';
    $genero = $_POST['genero'] ?? '';
    $tipoInscricao = $_POST['tipoInscricao'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';

    $erros = [];

    
    if ($erro = validarCampo('Nome', $nome)) {
        $erros[] = $erro;
    }
    if ($erro = validarCampo('Email', $email)) {
        $erros[] = $erro;
    }
    if ($erro = validarCampo('Telefone', $telefone)) {
        $erros[] = $erro;
    }
    if ($erro = validarCampo('Data de Nascimento', $data_de_nascimento)) {
        $erros[] = $erro;
    }
    if ($erro = validarCampo('Gênero', $genero)) {
        $erros[] = $erro;
    }
    if ($erro = validarCampo('Tipo de Inscrição', $tipoInscricao)) {
        $erros[] = $erro;
    }


    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo "<p style='color: red;'>$erro</p>";
        }
    } else {
        echo '<h2>Inscrição realizada com sucesso!</h2>';
        echo "<p>Nome: $nome</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Telefone: $telefone</p>";
        echo "<p>Data de Nascimento: $data_de_nascimento</p>";
        echo "<p>Gênero: $genero</p>";
        echo "<p>Tipo de Inscrição: $tipoInscricao</p>";
        echo "<p>Mensagem: $mensagem</p>";

    }
}
?>