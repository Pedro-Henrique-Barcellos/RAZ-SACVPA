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

$nome_categ = $_POST['nome_categ'];

$categoriasFetch = $pdo ->prepare('SELECT * from categorias_tb where nome_categ=:nome');

$categoriasFetch ->execute([':nome'=>$nome_categ]);

if(!($categoriasFetch->rowcount()==0)){
    
    echo "
    <script>
    Swal.fire({
        icon: 'error',
        title: 'Erro!',
        text: 'Categoria já cadastrada, por favor insira outro nome!',
        confirmButtonText: 'OK',
        onClose: function() {
            history.back();
        }
        }).then(function() {
            history.back();
        });
        </script>"; 
    
    
}else{
        
            $categoriaInsert = $pdo ->prepare('INSERT INTO categorias_tb (nome_categ) values(:nome)');
        
            $categoriaInsert -> execute([':nome'=>$nome_categ]);
           
            echo "
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Cadastrado!',
                text: 'Categoria cadastrada com sucesso!',
                confirmButtonText: 'OK',
                onClose: function() {
                    window.location.href = '../index.php';
                }
            }).then(function() {
                window.location.href = '../index.php';
            });
            </script>";
    }
    
    

?>