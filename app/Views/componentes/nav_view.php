<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=esc($titulo)?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <?php 
    if(isset($css)){
      echo '<link rel="stylesheet" href="public/css/'.$css.'.css">';
    }
    ?>
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="<?php echo base_url()?>/museo" class="nav-link" aria-current="page">Login</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>/museo/inicio" class="nav-link">Inicio</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>/museo/exposiciones" class="nav-link">Exposiciones</a></li>
        <li class="nav-item"><a href="<?php echo base_url()?>/museo/inscripciones" class="nav-link">Inscripciones</a></li>
      </ul>
    </header>
  </div>
