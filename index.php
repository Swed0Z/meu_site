<?php
include 'includes/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'biblioteca';

switch ($page) {
    case 'biblioteca':
        include 'pages/biblioteca.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
    default:
        include 'pages/biblioteca.php';
}

include 'includes/footer.php';
?>