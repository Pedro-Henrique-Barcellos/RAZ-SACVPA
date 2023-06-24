<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>
<body style="background-color: #7f22abff;">
</body>
</html>

<?php

require("../conn.php");

$produto_pv = $_POST['produto_pv'];
$veiculo_pv = $_POST['veiculo_pv'];

if(!isset($produto_pv)||!isset($veiculo_pv)){
    echo "
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Erro!',
        text: 'Campo Vazio!',
        confirmButtonText: 'OK',
        onClose: function() {
            history.back();
        }
    }).then(function() {
        history.back();
    });
    </script>"; 
}else{
$pvfetch = $pdo ->prepare('SELECT * from prod_veic where produto_pv=:produto_pv and veiculo_pv = :veiculo_pv');

$pvfetch ->execute([':produto_pv'=>$produto_pv, ':veiculo_pv'=> $veiculo_pv]);


if($pvfetch->rowcount()==0){

    $pvInsert = $pdo ->prepare('INSERT INTO prod_Veic (produto_pv,veiculo_pv) values(:produto_pv,:veiculo_pv)');

    $pvInsert -> execute([':produto_pv'=>$produto_pv, ':veiculo_pv'=> $veiculo_pv]);

    echo "
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Sucesso!',
        text: 'produto e veiculo cadastrada com sucesso!',
        confirmButtonText: 'OK',
        onClose: function() {
            window.location.href = '../table.php';
        }
    }).then(function() {
        window.location.href = '../table.php';
    });
    </script>"; 

}else{


    echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'produto e veiculo já cadastrada, por favor insira outro!',
            confirmButtonText: 'OK',
            onClose: function() {
                history.back();
            }
        }).then(function() {
            history.back();
        });
        </script>"; 
}}
?>
