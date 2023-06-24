<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>

</head>
<body style="background-color: #7f22abff;">
    
</body>
</html>



<?php
    include("../conn.php");
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $usuario = $pdo->prepare('SELECT * FROM usuarios_tb where login_usu=:login_usu AND senha_usu=:senha_usu');
    $usuario->execute(array(':login_usu'=>$login,':senha_usu'=>$senha));

    $rowTabela = $usuario->fetchAll();
    
    if (empty($rowTabela)){
        echo "<script>
        Swal.fire({
            icon: 'error',
            title: 'Erro!',
            text: 'Usuário e/ou senha inválidos!!!',
            confirmButtonText: 'OK',
            onClose: function() {
                history.back();
            }
        }).then(function() {
            history.back();
        });
        </script>";

    }else{
       
    $sessao = $rowTabela[0];

    if(!isset($_SESSION)) {
    session_start();
    }

    $_SESSION['login'] = $sessao['login_usu'];
    $_SESSION['email'] = $sessao['email_usu'];
    $_SESSION['senha'] = $sessao['senha_usu'];
    
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Bem-vindo!',
        text: 'Login bem-sucedido! Bem-vindo, " . $_SESSION['login'] . "!',
        confirmButtonText: 'OK',
        onClose: function() {
            window.location.href = '../table.php';
        }
    }).then(function() {
        window.location.href = '../table.php';
    });
    </script>";
    }
    ?>