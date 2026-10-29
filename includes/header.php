<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Brayan Cangas';
}
if (!isset($activePage)) {
    $activePage = 'inicio';
}
if (!isset($basePath)) {
    $basePath = '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Brayan Marcelo Cangas Vásquez — Backend Software Developer & Technical Lead. Quito, Ecuador.">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $basePath; ?>css/style.css">
</head>
<body>
    <div class="bg-grid" aria-hidden="true"></div>
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="<?php echo $basePath; ?>index.php">
                <span class="brand-text">Semana 1 - Tarea 1</span>
            </a>
            <button class="nav-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" data-nav-toggle>
                <span></span><span></span>
            </button>
            <nav class="nav" data-nav aria-label="Navegación principal">
                <a href="<?php echo $basePath; ?>index.php" class="<?php echo $activePage === 'inicio' ? 'is-active' : ''; ?>">Inicio</a>
                <a href="<?php echo $basePath; ?>index.php#sobre-mi">Perfil</a>
                <a href="<?php echo $basePath; ?>index.php#logros">Logros</a>
                <a href="<?php echo $basePath; ?>index.php#experiencia">Experiencia</a>
                <a href="<?php echo $basePath; ?>index.php#proyectos">Proyectos</a>
                <a href="<?php echo $basePath; ?>index.php#habilidades">Skills</a>
                <a href="<?php echo $basePath; ?>php/calculadora.php" class="<?php echo $activePage === 'calculadora' ? 'is-active' : ''; ?>">Calculadora</a>
            </nav>
        </div>
    </header>
    <main>
