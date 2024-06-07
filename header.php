<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <script src="https://kit.fontawesome.com/aa422d9bdc.js" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="container d-flex flex-wrap justify-content-between py-3 mb-4">
      <a href="" class="d-flex align-items-center justify-between mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <i class="fa-solid fa-star bi "></i><h3 class="">WARDS DWWM</h3>
      </a>
      <ul class="nav nav-pills d-none d-md-flex">
        <li class="nav-item"><a href="#presentation" class="nav-link yellow">presentation</a></li>
        <li class="nav-item"><a href="#inscription" class="nav-link yellow">inscription</a></li>
        <li class="nav-item"><a href="#nomines" class="nav-link yellow">les nominés</a></li>
      </ul>
      <div class="dropdown d-md-none">
        <button class="btn btn-yellow dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          présentation
        </button>
        <ul class="dropdown-menu">
          <li class="dropdown-item"><a href="#presentation" class="nav-link yellow">presentation</a></li>
          <li class="dropdown-item"><a href="#inscription" class="nav-link yellow">inscription</a></li>
          <li class="dropdown-item"><a href="#nomines" class="nav-link yellow">les nominés</a></li>
        </ul>
      </div>
    </div>
  </header>
