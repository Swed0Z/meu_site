<?php
include 'includes/db.php';

// Consulta para obter os títulos dos livros
$query = $pdo->query("SELECT id, titulo FROM livros");
$livros = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Biblioteca</h2>
<ul>
    <?php foreach ($livros as $livro): ?>
    <li>
        <!-- Cada título de livro é um link para uma página individual -->
        <a href="pages/livro.php?id=<?php echo $livro['id']; ?>">
            <?php echo $livro['titulo']; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>