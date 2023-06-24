
<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>
<body style="background-color: #7f22abff;">
</body>
</html>

<?php
    require('../conn.php');


 
    $placa_veic = $_POST['placa_veic'];
    $nome_veic = $_POST['nome_veic'];
    $ano_fabricacao_veic = $_POST['anofabrica_veic'];
    $ano_modelo_veic = $_POST['anomodelo_veic'];
    $cambio_veic = $_POST['cambio_veic'];
    $combustivel_veic = $_POST['combustivel_veic'];
    $marca_veic = $_POST['marca_veic'];
    $cliente_veic = $_POST['cliente_veic'];

    echo'<tr>';
print_r($_POST);
echo '</tr>';
    
    if(!isset($placa_veic)||!isset($marca_veic)||!isset($nome_veic)||!isset($ano_fabricacao_veic)||!isset($ano_modelo_veic)||!isset($cambio_veic)||!isset($combustivel_veic)){

        echo "
               <script>
               Swal.fire({
                   icon: 'error',
                   title: 'Erro!',
                   text: 'Campo vazio!',
                   confirmButtonText: 'OK',
                   onClose: function() {
                       history.back();
                   }
               }).then(function() {
                   history.back();
               });
               </script>";

} else{

$check_veic = $pdo->prepare('SELECT * FROM veiculos_tb WHERE nome_veic = :NOME AND ano_fabricacao_veic = :ANOFAB AND ano_modelo_veic = :ANOMOD ');
$check_veic->execute([
   ':NOME' => $nome_veic,
   ':ANOFAB' => $ano_fabricacao_veic,
   ':ANOMOD' => $ano_modelo_veic,
]);

$check_marca = $pdo -> prepare('SELECT * from marcas_tb where nome_marca = :NOME');
$check_marca -> execute([':NOME' => $marca_veic]);



if($check_veic->rowCount()>0 && $check_marca->rowCount()>0){
   echo "
               <script>
               Swal.fire({
                   icon: 'error',
                   title: 'Erro!',
                   text: 'Veiculo já cadastrado!',
                   confirmButtonText: 'OK',
                   onClose: function() {
                       history.back();
                   }
               }).then(function() {
                   history.back();
               });
               </script>";
               

   } else{

if($check_marca->rowCount()>0){ 
   $resultadomarca= $check_marca->fetch();
   $id_marca = $resultadomarca['id_marca'];
       
}else{

   $cad_marc = $pdo -> prepare('INSERT INTO marcas_tb(nome_marca) values (:nome_marca)');
   $cad_marc -> execute([':nome_marca' => $marca_veic]);

   $fetcherMarca = $pdo -> prepare(' SELECT * FROM marcas_tb where nome_marca = :nome_marca '); 
   $fetcherMarca -> execute([':nome_marca' => $marca_veic ]);
   $result = $fetcherMarca->fetch();
   $id_marca = $result['id_marca'];

}



   $cad_veic = $pdo -> prepare('INSERT INTO veiculos_tb (nome_veic, ano_fabricacao_veic, ano_modelo_veic, cambio_veic, combustivel_veic, marca_veic)
                                                values (:nome_veic,:ano_fabricacao_veic,:ano_modelo_veic,:cambio_veic,:combustivel_veic,:marca_veic)');
   $cad_veic -> execute([':nome_veic' =>  $nome_veic,':ano_fabricacao_veic'=> $ano_fabricacao_veic, ':ano_modelo_veic' => $ano_modelo_veic,':cambio_veic' =>  $cambio_veic,':combustivel_veic' =>  $combustivel_veic,':marca_veic' =>  $id_marca]);

   $fetcherVeic = $pdo -> prepare('SELECT * from veiculos_tb where ano_fabricacao_veic = :ano_fabricacao_veic and ano_modelo_veic =:ano_modelo_veic and nome_veic = :nome_veic');
   $fetcherVeic -> execute([ ':ano_fabricacao_veic'=>$ano_fabricacao_veic,':ano_modelo_veic'=>$ano_modelo_veic,':nome_veic'=>$nome_veic ]);

   $resultados = $fetcherVeic->fetch();
   $id_veic = $resultados['id_veic'];


       echo "
               <script>
               Swal.fire({
                   icon: 'success',
                   title: 'Sucesso!',
                   text: 'Cliente e veiculos cadastrados com sucesso!',
                   confirmButtonText: 'OK',
                   onClose: function() {
                       window.location.href = '../table.php';
                   }
               }).then(function() {
                       window.location.href = '../table.php';
               });
               </script>";
  }

}




?>