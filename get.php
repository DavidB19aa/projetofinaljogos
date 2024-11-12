<!-- ESTUDANTE: DAVID BARBOSA DA SILVA
     MATRÍCULA: 202304324468 -->

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "endProject";

$conn = new mysqli($servername, $username, $password, $dbname, 3307);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM projetos";
$result = $conn->query($sql);

$projects = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
}

$conn->close();

return $projects;
?>
