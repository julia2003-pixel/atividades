<?php 
    header("Content-Type: application/json");
    include "conexao.php";

    if(!empty($_POST))
    {
        $id=$_POST["id"];
        $select="SELECT id_tipo, tipo FROM tipo_comida where id_tipo='$id'";
    }
    else{
        $select="SELECT id_tipo, tipo FROM tipo_comida";
    }
    $res = mysqli_query($con, $select) or die(mysqli_error($con));
    while($linha=mysqli_fetch_assoc($res)){
        $resultado[]= $linha;
    }
    echo json_encode($resultado);
?>
