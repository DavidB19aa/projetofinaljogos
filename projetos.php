<!-- ESTUDANTE: DAVID BARBOSA DA SILVA
     MATRÍCULA: 202304324468 -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projetos Enviados</title>
    <link rel="stylesheet" href="style_dois.css">
</head>
<body>

    <main class="main-content">
        <h1 class="texto-promocional">Projetos Enviados</h1>

        <div class="projetos-container">
            <?php
                $projects = include 'get.php';

                if (!empty($projects)) {
                    foreach ($projects as $project) {
                        echo "<div class='projeto-card'>";
                        echo "<h3 class='projeto-titulo'>Projeto: " . htmlspecialchars($project["nome_projeto"]) . "</h3>";
                        echo "<p class='projeto-detalhe'><strong>Nome:</strong> " . htmlspecialchars($project["nome_usuario"]) . "</p>";
                        echo "<p class='projeto-detalhe'><strong>Telefone:</strong> " . htmlspecialchars($project["telefone"]) . "</p>";
                        echo "<p class='projeto-detalhe'><strong>Email:</strong> " . htmlspecialchars($project["email"]) . "</p>";
                        echo "<p class='projeto-detalhe'><strong>Descrição:</strong> " . htmlspecialchars($project["descricao"]) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Nenhum projeto encontrado.</p>";
                }
            ?>
        </div>
		
    </main>
		<a href="index.html" class="voltar-btn">Voltar para a Página Principal</a>
</body>
</html>
