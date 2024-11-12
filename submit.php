<!-- ESTUDANTE: DAVID BARBOSA DA SILVA
     MATRÍCULA: 202304324468 -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "endProject";
$port = 3307;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Capturar dados do formulário
$nome_usuario = $_POST['nome_usuario'];
$nome_projeto = $_POST['nome_projeto'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$descricao = $_POST['descricao'];

if (empty($nome_usuario) || empty($nome_projeto) || empty($telefone) || empty($email) || empty($descricao)) {
    $mensagem = "Por favor, preencha todos os campos.";
} else {
  
    $stmt = $conn->prepare("INSERT INTO projetos (nome_usuario, nome_projeto, telefone, email, descricao) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome_usuario, $nome_projeto, $telefone, $email, $descricao);

    if ($stmt->execute()) {
        $mensagem = "Projeto enviado com sucesso!";
    } else {
        $mensagem = "Erro ao enviar o projeto: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}

header("Location: index.html?mensagem=" . urlencode($mensagem));
exit();
?>
