<?php
session_start();
require('protected.php');
?>

<html>
<head>
  <title>Tabela de produtos</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">

  <a class="navbar-brand" style=' font-family: Monospace; font-weight: 100'><img src="./img/RazLogoCrop.png" >ㅤRaz AutoParts</a>

    <form action="login.php" method="post">
                <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit">Sair</button>
                </form>
                </form>
    
  </div>
</nav>

<link rel="stylesheet" href="menu/sidebar.css">
<link rel="stylesheet" href="CSS/teste_2.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<nav role="navigation">
<div id="menuToggle" style="filter: blur 10px;z-index: 255;">
    <input type="checkbox" />
    
    <span></span>
    <span></span>
    <span></span>
    
   
    <ul id="menu">
    

      <a href="index.php"><li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
      </svg> Cadastrar Produtos</li></a>

      <a href="cad_cliente.php"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
      class="bi bi-postcard" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 
      1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4Zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 
      0v-7ZM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0
      1H2.5a.5.5 0 0 1-.5-.5Zm0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5ZM10.5 5a.5.5 0 0 0-.5.
      5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3ZM13 8h-2V6h2v2Z"/>
      </svg>   Cadastrar Cliente</li></a>

      <a href="cad_veiculo_produto.php"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-inboxes" viewBox="0 0 16 16">
        <path d="M4.98 1a.5.5 0 0 0-.39.188L1.54 5H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0A.5.5 0 0 1 10 5h4.46l-3.05-3.812A.5.5 0 0 0 11.02 1H4.98zm9.954 5H10.45a2.5 2.5 0 0 1-4.9 0H1.066l.32 2.562A.5.5 0 0 0 1.884 9h12.234a.5.5 0 0 0 .496-.438L14.933 6zM3.809.563A1.5 1.5 0 0 1 4.981 0h6.038a1.5 1.5 0 0 1 1.172.563l3.7 4.625a.5.5 0 0 1 .105.374l-.39 3.124A1.5 1.5 0 0 1 14.117 10H1.883A1.5 1.5 0 0 1 .394 8.686l-.39-3.124a.5.5 0 0 1 .106-.374L3.81.563zM.125 11.17A.5.5 0 0 1 .5 11H6a.5.5 0 0 1 .5.5 1.5 1.5 0 0 0 3 0 .5.5 0 0 1 .5-.5h5.5a.5.5 0 0 1 .496.562l-.39 3.124A1.5 1.5 0 0 1 14.117 16H1.883a1.5 1.5 0 0 1-1.489-1.314l-.39-3.124a.5.5 0 0 1 .121-.393zm.941.83.32 2.562a.5.5 0 0 0 .497.438h12.234a.5.5 0 0 0 .496-.438l.32-2.562H10.45a2.5 2.5 0 0 1-4.9 0H1.066z"/>
        </svg> Cadastrar Compatibilidade</li></a>

      <a href="cad_veiculo.php"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
      <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
      <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
      </svg> Cadastrar Veículo</li></a>

      <a href="relatorio.php"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
      class="bi bi-list-ul" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 
      .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 
      0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
      </svg> Ver Relatórios</li></a>

      <a href="Sobre_Nos.php"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088
      -.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
      </svg> Informações</li></a>
    </ul>
  </div>
</nav>
    </div>    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!----------------------------------------------------------------------------------------------------------------------------------------------------------->
      
    
    <div class="conteudo">
      <h2 style="text-align:center; color: white;">Procurar por produtos</h2>
      <br>
        <form  style="text-align: center; color: white;" action="table.php" method="post">
        <input class="pesquisa" type="text" name="nome_prod" placeholder="Nome" >
        <input class="pesquisa" type="text" name="descricao_prod" placeholder="Pesquisar descrição"  >  
        <input type=text name="veiculo_pv" placeholder ="Pesquisar por veículo">

        <select  name="categoria_prod" id="">
          <option class="pesquisa" value="" style="color:black">Categoria</option>
            <?php

            require('conn.php');
            
            $categoriasFetcher = $pdo->prepare("SELECT * FROM categorias_tb");
            $categoriasFetcher -> execute();
            $categoria = $categoriasFetcher->fetchall();
            foreach($categoria as $j){
              echo '<option style="color:black" value="'.$j['id_categ'].'">'.$j['nome_categ'].'</option>';
            }
            ?>        
        </select>

        <button type = submit class="custom-btn btn-7" style="align-items: center;"> PESQUISAR</button>
        <button type = none class="custom-btn btn-7" style="align-items: center;"><a href="" style="text-decoration:none;color:white">LIMPAR</a></button>
        </form>           
        <?php

require("conn.php");


function getCateg($id_categ){
global $pdo;
$categoriasFetch = $pdo ->prepare('SELECT * from categorias_tb where id_categ=:id');
$categoriasFetch ->execute([':id'=>$id_categ]);
$categoria = $categoriasFetch->fetch();
return $categoria['nome_categ'];


}
if(empty($_POST)){}else{
$nome_prod = '%'.$_POST['nome_prod'].'%';
$descricao_prod = '%'.$_POST['descricao_prod'].'%';
$veiculo_pv = $_POST['veiculo_pv'];
$categoria_prod = $_POST['categoria_prod'];
}

$queryPesquisa = "SELECT * FROM produtos_tb";
$parametros = [] ;

if (!empty($_POST['nome_prod'])) {
    
    $queryPesquisa .= " WHERE nome_prod LIKE :nome_prod";
    $parametros = [':nome_prod' =>   $nome_prod, ];
}

if (!empty($_POST['descricao_prod'])) {
    
    if (empty($parametros)) {
        $queryPesquisa .= " WHERE descricao_prod LIKE :descricao_prod";
    } else {
        $queryPesquisa .= " AND descricao_prod LIKE :descricao_prod";
    }
    $parametros = array_merge($parametros, [':descricao_prod' =>  $descricao_prod , ]);
}

if (!empty($_POST['categoria_prod'])) {
    
  if (empty($parametros)) {
      $queryPesquisa .= " WHERE categoria_prod LIKE :categoria_prod";
  } else {
      $queryPesquisa .= " AND categoria_prod LIKE :categoria_prod";
  }
  $parametros = array_merge($parametros, [':categoria_prod' =>  $categoria_prod , ]);
}

if (!empty($_POST['veiculo_pv'])) {
    
    if (empty($parametros)) {
        $queryPesquisa .= " WHERE id_prod in 
                          (SELECT produto_pv FROM prod_veic WHERE placa_pv = :placa_pesquisa)";
    } else {
        $queryPesquisa .= " AND id_prod in (SELECT produto_pv FROM prod_veic WHERE placa_pv = :placa_pesquisa) ";
    }
    $parametros = array_merge($parametros, [':placa_pesquisa' => $veiculo_pv]);
}

//print($queryPesquisa);

//print_r($parametros);

$tabela = $pdo->prepare($queryPesquisa);

if(!empty($parametros)){
$tabela->execute($parametros);
}else{
$tabela->execute();

}

?>

      <div class = table-container style="align-content: center;">
        <table class="table" style="align-content: center; width:70vw; ">
        
        <tr>
          <th>Nome</th>
          <br>  
          <th>Descrição</th>
          <br>
          <th>Preço</th>
          <br>
          <th>Categoria</th>
          <br>
          <th>Quantidade</th>
          <th></th>
          <th></th>
        </tr>



        <tr class="table-group-divider">-</tr>



                <?php  
                
    $rowTabela = $tabela->fetchAll();
    
    if (empty($rowTabela) && empty($_POST)){
      echo "
      <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js'></script>
      <script>
      Swal.fire({
          icon: 'error',
          title: 'Erro!',
          text: 'Tabela vazia, retornando ao cadastro de produtos.',
          confirmButtonText: 'OK',
          onClose: function() {
            window.location.href = 'index.php';
          }
          }).then(function() {
            window.location.href = 'index.php';
          });
          </script>";
    }
    else if(empty($rowTabela) && !empty($_POST)){
      echo "
            <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js'></script>
            <script>
            Swal.fire({
                icon: 'error',
                title: 'Erro!',
                text: 'Tabela Vazia, retornando a tabela.',
                confirmButtonText: 'OK',
                onClose: function() {
                  window.location.href = 'table.php';
                }
                }).then(function() {
                  window.location.href = 'table.php';
                });
                </script>";
    }
    $y=0;
    foreach ($rowTabela as $linha){

      $y++;
                if($y%2==0){
                  $cor_linha='#524D9D';
                  $cor_texto='#e0e0e0';
                }else{
                  $cor_linha='#e0e0e0';
                  $cor_texto='#524D9D';
                }

    echo '<tr>';
    echo '<th style= "background-color:'.$cor_linha.'; color:'.$cor_texto.'">'.$linha['nome_prod'].'</th>';
    echo '<th style= "background-color:'.$cor_linha.'; color:'.$cor_texto.'">'.$linha['descricao_prod'].'</th>';
    echo '<th style= "background-color:'.$cor_linha.'; color:'.$cor_texto.'">R$'.$linha['preco_prod'].'</th>';
    echo '<th style= "background-color:'.$cor_linha.'; color:'.$cor_texto.'">'.getCateg($linha['categoria_prod']).'</th>';
    echo '<th style= "background-color:'.$cor_linha.'; color:'.$cor_texto.'">'.$linha['quant_prod'].'</th>';
    
    if($linha['quant_prod']<1){
    echo '<th style= "background-color:'.$cor_linha.'; color:'.$cor_texto.'"><button class="custom-btn btn-4 float-end" style="filter: grayscale(80%)">VAZIO</button></th>';
    }else{
    echo '<th style= "background-color:'.$cor_linha.'; color:'.$cor_texto.'"><a href="Tela_Venda_prod.php?id_prod='.$linha['id_prod'].'"><button type="submit" class="custom-btn btn-4 float-end">VENDER</button></a></th>';
    }
    echo '<th style= "background-color:'.$cor_linha.'; color:'.$cor_texto.';"><a href="Adicionar_estoque.php?id_prod='.$linha['id_prod'].'&nome_prod='.$linha['nome_prod'].'"><button type="submit" style="width:80px;" class="custom-btn btn-4 float-end">INSERIR</button></a></th>';

    echo '</tr>';
}
?>
          </table>
        </div>
      </div>
</body>