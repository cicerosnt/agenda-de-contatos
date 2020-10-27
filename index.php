<?php include_once "inc/header.php";?>

  <main class="">
    <?php
      $url = (isset($_GET['url'])) ? htmlentities(strip_tags($_GET['url'])) : '';
      $parametros = explode('/', $url);
      $paginas_permitidas = array('login','home', 'new');
      
      if(isset($_GET['s']) && $_GET['s'] != ''){
        include_once "pages/search.php";
      }else{
        if($url == ''){
          include_once "pages/home.php";
          
        }elseif(in_array($parametros[0], $paginas_permitidas)){
          include_once "pages/".$parametros[0].'.php';
          
        }else{
          include_once "pages/erro404.php";
        }
      }
    ?>
  </main>

<?php include_once "inc/footer.php";?>