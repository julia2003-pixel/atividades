<?php
    include "conexao.php";
    $cardapio = $_POST["select"];
    $nome = $_POST["nome"];
    
    $insert = "INSERT INTO reserva(
                                    nome,
                                    cod_cardapio
                                ) VALUES (
                                    '$nome',
                                    '$cardapio'
                                )";
    mysqli_query($con, $insert)
     or die(mysqli_error($con));
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Reserva inserida com sucesso!</strong>
    <a href="form_reserva.php"> Clique para cadastrar outra reserva</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
?>