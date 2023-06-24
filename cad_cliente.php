<?php
session_start();
require('protected.php');
require('conn.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
        <title>Cadastro de Produtos</title>
        <link rel="stylesheet" type="text/css" href="CSS/cliente.css"/>
        
        <style>

select{
    width:550px;
}

        </style>
    </head>
    
    <DOCTYPE html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">

  <a class="navbar-brand" style=' font-family: Monospace; font-weight: 100; font-size:20px'><img src="./img/RazLogoCrop.png" >ㅤRaz AutoParts</a>
    


<form action="login.php" method="post">
                <form class="d-flex" role="search">
                <button class="btn btn-outline-success" type="submit">Sair</button>
                </form>
                </form>
    
  </div>
</nav>

<link rel="stylesheet" href="./menu/sidebar.css">
<nav role="navigation">
<div id="menuToggle" style="filter: blur 10px;z-index: 255;">
    <input required type="checkbox" />
    
    <span></span>
    <span></span>
    <span></span>
    
   
    <ul id="menu" style="background-color: #20063bff;">
    <a href="table.php"><li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
      class="bi bi-search" viewBox="0 0 16 16">
      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l
      -3.85-3.85a1.007 1.007 0 0  0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg> Procurar Produtos</li></a>

      <a href="index.php"><li> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-plus" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
      <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
      <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
      </svg> Cadastrar Produtos</li></a>

      <a href="cad_veiculo_produto.php"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
      <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
      <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
      </svg> Cadastrar Produto do Veículo</li></a>

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

    <body class="fundo">
    <div class="container">
    <footer>
            
        <form style="text-align: center;" action="CRUD/cad_cli.php" method="POST">
            <h1>Cadastro de cliente</h1>
            <label for="nome_cli">Nome:</label>
            <input required placeholder="Insira seu nome" type="text" id="nome_cli" name="nome_cli" required>
            <br>
            <label for="email_cli">Email:</label>
            <input required placeholder="Insira seu email" type="email" id="email_cli" name="email_cli" required>
            <br><br>
            <label id="cpf_label">CPF:</label>
            <input maxlength="14" required placeholder="Insira seu CPF" autocomplete="on" style="width:300px" type="text" id="cpf_cli" name="cpf_cli" required> 
            <label for=""> CNPJ?</label>
            <input style="vertical-align:middle;height: 30px; width:100px" type="checkbox" id="cpf_cnpj" name="cpf_cnpj" >
            <br> <br>
            <label for="">Marca do veículo</label>
            <input required type="text" name="marca_veic"  oninput="this.value = this.value.toUpperCase()" placeholder="Marca do veículo">
            <br> <br>
            <label for="">Nome do veículo</label>
            <input required type="text"  name="nome_veic"  oninput="this.value = this.value.toUpperCase()" placeholder="Nome do veículo">
            <br> <br>
            <label for="">Placa do veículo</label>
            <input required type="text" maxlength="7" name="placa_veic" pattern="[a-zA-Z]{3}\d{4}"  oninput="this.value = this.value.toUpperCase()" placeholder="Placa do veículo">
            <br> <br>
            <label for="">Ano de fabricação</label>
            <input required type="number" min=1950 max=<?php echo date('Y') ?> name="ano_fabricacao_veic" placeholder="Ano de fabricação">
            <br> <br>
            <label for="">Ano do modelo</label>
            <input required type="number" min=1950 max=<?php echo date('Y') ?> name="ano_modelo_veic" placeholder="Ano do modelo">
            <br> <br>
            <label for="">Câmbio</label>
            <select required type="text" name="cambio_veic"  placeholder="Câmbio">
            <option style=color:black value="Manual">Manual</option>
            <option  style=color:black value="Auto">Automatico</option>
            </select>

        <br> <br>
        <label for="">Combustível</label>
            <select required type="text" name="combustivel_veic" placeholder="Combustível">

            <option style=color:black value="gasolina">Gasolina</option>
            <option style=color:black value="etanol">Etanol</option>
            <option style=color:black value="diesel">Diesel</option>
            <option style=color:black value="gnv">Gás Natural Veicular (GNV)</option>
            <option style=color:black value="eletricidade">Eletricidade</option>
            <option style=color:black value="hidrogenio">Hidrogênio</option>
        
            </select>

            <br><br>
            <a href="table.php" class="custom-btn btn-2">VOLTAR</a> <span>ㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤㅤ</span>
            <input required type="submit" class="custom-btn btn-3" value="CADASTRAR" placeholder="CADASTRAR">   
    </form>
    </div>

    <script>
    function toggleCpfCnpj() {
        var cpf_cli = document.getElementById("cpf_cli");
        var checkbox = document.getElementById("cpf_cnpj");
        var cpfLabel = document.getElementById("cpf_label");

        if (checkbox.checked) {
            cpfLabel.textContent = "CNPJ:";
            cpf_cli.maxLength = 14;
        } else {
            cpfLabel.textContent = "CPF:";
            cpf_cli.maxLength = 11;
        }
    }

    var cpf_cli = document.getElementById("cpf_cli");

    cpf_cli.addEventListener("input", function() {
        var maxLength = parseInt(cpf_cli.maxLength);
        var currentValue = cpf_cli.value;

        if (currentValue.length > maxLength) {
            cpf_cli.value = currentValue.slice(0, maxLength);
        }
    });
</script>
   </div>
                
               
            </form>
        </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  


    </body>
</html>
