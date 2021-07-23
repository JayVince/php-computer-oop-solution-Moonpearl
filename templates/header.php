<?php

require_once './SqlDbHandler.php';
require_once './models/Cpu.php';
require_once './models/Gpu.php';
require_once './models/Hdd.php';
require_once './models/Os.php';
require_once './models/Ram.php';

$databaseHandler = new SqlDbHandler(); die();

// Récupère tous les processeurs en base de données
$cpus = Cpu::findAll();
// Récupère tous les cartes graphiques en base de données
$gpus = Gpu::findAll();
// Récupère tous les périphériques de stockage en base de données
$hdds = Hdd::findAll();
// Récupère tous les systémes d'exploitation en base de données
$oss = Os::findAll();
// Récupère toutes les mémoires en base de données
$rams = Ram::findAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composez votre PC gaming sur mesure</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Calculateur</a>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Processeurs
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($cpus as $cpu): ?>
                                <li><a class="dropdown-item" href="component.php?type=cpu&id=<?= $cpu->getId() ?>"><?= $cpu->getName() ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Carte graphiques
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($gpus as $gpu): ?>
                                <li><a class="dropdown-item" href="component.php?type=cpu&id=<?= $gpu->getId() ?>"><?= $gpu->getName() ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Stockage
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($hdds as $hdd): ?>
                                <li><a class="dropdown-item" href="component.php?type=cpu&id=<?= $hdd->getId() ?>"><?= $hdd->getName() ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Systèmes d'exploitation
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($oss as $os): ?>
                                <li><a class="dropdown-item" href="component.php?type=cpu&id=<?= $os->getId() ?>"><?= $os->getName() ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="nav-link dropdown-toggle" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Mémoires vives
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <?php foreach ($rams as $ram): ?>
                                <li><a class="dropdown-item" href="component.php?type=cpu&id=<?= $ram->getId() ?>"><?= $ram->getName() ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
