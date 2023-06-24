<html>
<body style="background-color: #7f22abff;">

        
    
    <?php

require('../conn.php');

$id_prod = $_POST['id_prod'];
$quant_prod = $_POST['quant_prod'];

$addEst=$pdo->prepare('UPDATE PRODUTOS_TB SET QUANT_PROD = QUANT_PROD+:QUANT WHERE ID_PROD = :ID');
$addEst->execute([':QUANT'=>$quant_prod,':ID'=>$id_prod]);

echo "
<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js'></script>
            <script>
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'Estoque adicionado com sucesso!',
                confirmButtonText: 'OK',
                onClose: function() {
                    window.location.href = '../table.php';
                }
            }).then(function() {
                window.location.href = '../table.php';
            });
            </script>";

?>
</body>
</html>