<?php
include '../includes/db.php';

// Verifica se um ID foi passado na URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para obter o título e o conteúdo do livro pelo ID
    $stmt = $pdo->prepare("SELECT titulo, conteudo FROM livros WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $livro = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($livro) {
        // Exibe o título e o conteúdo do livro
        echo "<h2>" . $livro['titulo'] . "</h2>";
        echo "<p>" . nl2br($livro['conteudo']) . "</p>"; // Preserva as quebras de linha no conteúdo
    } else {
        echo "Livro não encontrado.";
    }
} else {
    echo "ID do livro não fornecido.";
}