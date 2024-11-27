<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Análisis y Diseño de un Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Ajustes personalizados para los submenús */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -5px;
            display: none;
        }

        .dropdown-submenu:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<body style="background-color: #f5f5dc;">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ff8c00;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php?page=inicio">
                <img src="img/logo.jpg" alt="Logo Hipermaxi" style="width: 100px; height: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?page=inicio" style="font-size: 20px;">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=marco_teorico" style="font-size: 20px;">Marco Teórico</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="index.php?page=modelo_Estructurado" id="analisisDropdown" role="button" data-bs-toggle="dropdown" style="font-size: 20px;">Análisis Estructurado</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#" style="font-size: 20px;">Modelo Escencial</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.php?page=analisis/modelo-ambiental" style="font-size: 20px;">Modelo Ambiental</a></li>
                                    <li><a class="dropdown-item" href="index.php?page=analisis/modelo-comportamiento" style="font-size: 20px;">Modelo de Comportamiento</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="index.php?page=analisis/modelo-implementacion" style="font-size: 20px;">Modelo Implementación</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="index.php?page=modelado" style="font-size: 20px;">Modelado Orientado a Objetos</a></li>

                    <li class="nav-item"><a class="nav-link" href="index.php?page=video" style="font-size: 20px;">Video</a></li>
                </ul>
            </div>
        </div>
    </nav>

