<?php

  session_start();
  include_once "config.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP</title>

    <link rel="stylesheet" href="<?php echo PATH;?>/css/bootstrap.css" />
    <link href="<?php echo PATH;?>/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo PATH;?>/css/custom.css" rel="stylesheet" />


  </head>
  <body>
    <header class="text-white">
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre</h4>
              <p class="text-muted">
                Descrição da minha lista de contato pessoal
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-whit">Menu</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Novo contato</a></li>
                <li><a href="#" class="text-white">Lista de contato</a></li>
                <?php if(isset($_SESSION['navigation'])){ ?>
                    <li><a href="<?php echo PATH?>/logout.php" class="text-white">Sair</a></li>
                <?php }else{ ?>
                    <li><a href="<?php echo PATH?>/login" class="text-white">Logar</a></li>
                <?php } ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="<?php echo PATH?>" class="navbar-brand d-flex align-items-center">
            <img class="svg" src="<?php echo PATH;?>/icons/contact-book.svg" alt="" srcset="" /> 
            &nbsp;minha agenda
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarHeader"
            aria-controls="navbarHeader"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>