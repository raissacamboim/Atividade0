<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = isset($_POST['nome']) ? htmlspecialchars(trim($_POST['nome'])) : null;
    $idade = isset($_POST['idade']) ? (int) $_POST['idade'] : null;
    $altura = isset($_POST['altura']) ? (float) $_POST['altura'] : null;
    $peso = isset($_POST['peso']) ? (float) $_POST['peso'] : null;

    // Validação simples
    if (!empty($nome) && $idade > 0 && $altura > 0 && $peso > 0) {
        echo "<h1>Dados do Cliente</h1>";
        echo "Nome do Cliente: $nome <br>";
        echo "Idade do Cliente: $idade anos<br>";
        echo "Altura do Cliente: $altura m<br>";
        echo "Peso do Cliente: $peso kg<br>";
    } else {
        echo "<h1>Erro</h1>";
        echo "Por favor, preencha todos os campos corretamente.";
    }
} else {
    echo "<h1>Erro</h1>";
    echo "O formulário não foi enviado corretamente.";
}
?>
