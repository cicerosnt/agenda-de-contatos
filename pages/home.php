<?php
  include ('verifica.php');

  
?>

<div class="container text-white">
  
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Telefone</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>mark@localhost.com</td>
          <td>17 12345-1234</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Ottom</td>
          <td>ottom@localhost.com</td>
          <td>17 98745-6123</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>larry@localhost.com</td>
          <td>87 96325-8741</td>
        </tr>
      </tbody>
    </table>

  <div class="text-center">
  <button type="button" class="btn btn-dark">
    <a href="<?php echo PATH ?>/new">
      <img class="svg" src="<?php echo PATH;?>/icons/add.svg" alt="novo contato" title="adicionar novo contato" srcset="" />
    </a>
  </button>
  </div>

</div>