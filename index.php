<?php
// index.php

// Incluir header
include 'templates/header.php';

// Determinar la página solicitada
$page = isset($_GET['page']) ? $_GET['page'] : 'inicio';

// Ruta al archivo de la página solicitada
$pagePath = __DIR__ . '/pages/' . $page . '.php';

// Verificar si el archivo existe
if (file_exists($pagePath)) {
    include $pagePath;
} else {
    echo "<div class='container'><h1>Página no encontrada (404)</h1><p>La página solicitada no existe.</p></div>";
}

// Incluir footer
include 'templates/footer.php';
?>
