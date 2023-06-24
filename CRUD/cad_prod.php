<!DOCTYPE html>
<html lang="pt-br">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
</head>
<body style="background-color: #7f22abff;">
</body>
</html>

<?php
require('../conn.php');



$nome_prod = $_POST['nome_prod'];
$quant_prod = $_POST['quant_prod'];
$preco_prod = $_POST['preco_prod'];
$categoria_prod = $_POST['categoria_prod'];
$fornecedor_prod = $_POST['fornecedor_prod'];
$descricao_prod= $_POST['descricao_prod'];

if(empty($nome_prod) || empty($quant_prod)||empty($descricao_prod)||empty($categoria_prod)||empty($fornecedor_prod)){
    echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'produto já cadastrado, por favor insira outro nome!',
            confirmButtonText: 'OK',
            onClose: function() {
                history.back();
            }
        }).then(function() {
            history.back();
        });
        </script>";

}else{

    $check_prod = $pdo->prepare("SELECT * FROM produtos_tb WHERE nome_prod = :nome_prod");
    $check_prod->execute(array(':nome_prod' => $nome_prod));
    if ($check_prod->rowcount()>0){

        echo "
        <script>
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'produto já cadastrado, por favor insira outro nome!',
            confirmButtonText: 'OK',
            onClose: function() {
                history.back();
            }
        }).then(function() {
            history.back();
        });
        </script>";

    }else{

    $cad_prod = $pdo->prepare("INSERT INTO produtos_tb(nome_prod,
                                                              quant_prod,
                                                              preco_prod,
                                                              categoria_prod,
                                                              fornecedor_prod,
                                                              descricao_prod)
                                                                VALUES
                                                            (:nome_prod,
                                                             :quant_prod,
                                                             :preco_prod,
                                                             :categoria_prod,
                                                             :fornecedor_prod,
                                                             :descricao_prod)");
    $cad_prod->execute([
    ':nome_prod' => $nome_prod,
    ':quant_prod' => $quant_prod,
    ':preco_prod' => $preco_prod,
    ':categoria_prod' => $categoria_prod,
    ':fornecedor_prod' => $fornecedor_prod,
    ':descricao_prod' => $descricao_prod
    ]);
   
    echo "
    <script>
    Swal.fire({
        icon: 'success',
        title: 'Cadastrado!',
        text: 'Produto cadastrado com sucesso!',
        confirmButtonText: 'Voltar a Tabela',
        onClose: function() {
            window.location.href = '../table.php';
        }
    }).then(function() {
        window.location.href = '../table.php';
    });
    </script>";
    }
}


