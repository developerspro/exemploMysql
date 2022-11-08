<?php 
require_once '../src/Dao.php';
$dao = new Dao();
$lista = $dao->listaUsuario();
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>



<?php
foreach($lista as $linha){
?>
<tr>
      <th scope="row"><?php echo $linha['id']?></th>
      <td><?php echo $linha['usuario']?></td>
      <td><?php echo $linha['senha']?></td>
    </tr>
<?php

}

?>

</tbody>
</table>