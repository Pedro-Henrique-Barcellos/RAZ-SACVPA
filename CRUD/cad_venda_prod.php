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

$quant_venda = $_POST['quant_venda'];
$preco = $_POST['preco_total_vendas'];
$data_venda = date('Y/m/d H:i:s');
$produto_venda = $_POST['produto_venda'];
$cliente_venda = $_POST['cliente_venda'];


if (empty($quant_venda) || 
    empty($preco) || 
    empty($data_venda) || 
    empty($produto_venda) || 
    empty($cliente_venda)) {
    
    echo "<html>
    <head><script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js'></script></head>
    <body><script>
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
        </script></body></html>";


}else{

    $preco_total_vendas = $quant_venda * $preco;
    $insert_venda = $pdo->prepare("INSERT INTO vendas_tb (quant_venda, 
                                                      preco_total_vendas,
                                                      data_venda, 
                                                      produto_venda, 
                                                      cliente_venda)
                                             VALUES (:quant_venda, 
                                                     :preco_total_vendas, 
                                                     :data_venda, 
                                                     :produto_venda, 
                                                     :cliente_venda)");

$insert_venda->execute([
    ':quant_venda' => $quant_venda,
    ':preco_total_vendas' => $preco_total_vendas,
    ':data_venda' => $data_venda,
    ':produto_venda' => $produto_venda,
    ':cliente_venda' => $cliente_venda
]);

// include('../GerarQR.php');

// $texto = 'https://picpay.me/pedro.henrique.barcellos2'; 
// $caminhoQRCode = gerarQRCode($texto);

$prodReduzirQuant = $pdo -> prepare('UPDATE produtos_tb set quant_prod=quant_prod-:quant_venda where id_prod = :id_prod');
$prodReduzirQuant -> execute(['quant_venda' => $quant_venda,':id_prod'=>$produto_venda]);

    echo "<html>
    <head>
    <style>
    img{
        height:200px;
        width:200px;
    }
</style>
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js'></script></head>
    <body style='background: rgba(255,0,255,255)'><script>
        Swal.fire({
            icon: 'Success',
            title: 'Vendido!',
            text: 'Vendido Com Sucesso! Pague Acima.',
            imageUrl: '../qrcodes/codigo.png',
            imageHeight: 200, 
            imageAlt: 'Código QR',
            confirmButtonText: 'OK',
            onClose: function() {
                window.location.href = '../table.php';
            }
            }).then(function() {
                window.location.href = '../table.php';
            });
        </script></body></html>";

}





?>
