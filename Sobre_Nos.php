<html>
<head>

  <title>Sobre Nós</title>

    <link rel="stylesheet" href="CSS/sobre.css">
    <style>
        .container {
            background-color: #20063b;
            padding: 1px;
            margin-bottom: 10px;
            border-radius: 1vh;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
        }

        .container-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .container-group > .container {
            flex-basis: 48%; /* Adjust the value as needed */
        }

        .container-stretch {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
        }

        .container-stretch > .container {
            flex-basis: 100%;
        }

        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-top: 10px; /* Adjust the margin as needed */
        }
    </style>
</head>
<body>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">

  <a class="navbar-brand" style=' font-family: Monospace; font-weight: 100'>
    <img src="./img/RazLogoCrop.png" >ㅤRaz AutoParts</a>
                <form class="d-flex" action=logout.php>
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

    
    </ul>
  </div>
</nav>
    </div>    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



    <div class = container-stretch>
        
        <div style= 'background-color: #20063b;
            padding: 1px;
            margin-bottom: 10px;
            border-radius: 1vh;
            color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;'>
        <h1>Sobre RAZ</h1>
        
        <p>
O método de trabalho adotado foi o de cascata, que consiste na divisão de tarefas entre os membros do grupo: 

Samuel de Oliveira Almeida foi responsável pelo contato com o consultor de vendas para a idealização e produção do tema. Além disso, ele trabalhou na produção do protótipo inicial da página web. 

Pedro Henrique Barcellos Rody de Sá e João Pedro Rosa da Silva ficaram encarregado da criação do banco de dados utilizando o MySQL Workbench, como etapa inicial para a produção oficial do projeto. 

Francisco Ferreira Pimentel Netto, Pedro Henrique Barcellos Rody de Sá e João Pedro Rosa da Silva foram responsáveis pela criação do back-end utilizando a linguagem PHP no Visual Studio Code. 

Samuel Moraes de Oliveira foi responsável pela produção do front-end, utilizando o Visual Studio Code para criar a interface visual das telas, utilizando as linguagens de marcação HTML e CSS.  

Samuel de Oliveira Almeida assumiu a responsabilidade pela documentação do TCC, com auxílio de Francisco Ferreira Pimentel Netto na elaboração de diagramas. Além disso, Samuel de Oliveira Almeida também foi responsável pela documentação do projeto integrador. 

Dessa forma, o trabalho foi realizado de forma colaborativa, com cada membro do grupo desempenhando funções específicas e utilizando as ferramentas adequadas para o desenvolvimento do projeto.
</p>

</div>
</div>
    </div>
    <div class="container-group">
        <div class="container">
        <img style="width: 200px; height: 200px; align-intes: center;" src="imgs/Moraes.jpg" alt="">
            <br>
            <label for="">Programador FrontEnd: <br> Samuel Moraes</label>
            <br>
        </div>
        <div class="container">
            <img style="width: 200px; height: 200px;" src="imgs/chico.jpeg" alt="">
            <img style="width: 200px; height: 200px;" src="imgs/Eu.jpeg" alt="">
            <br>
            <label for="">Programadores BackEnd: <br> Pedro H. Barcellos, <br> Francisco Ferreira</label>
        </div>
    </div>
    <div class="container-group">
        <div class="container">
        <img style="width: 200px; height: 200px;" src="imgs/Samuel.jpeg" alt="">
            <br>
            <label for="">Ideação e <br> Documentação: <br> Samuel Oliveira</label>
            <br>
        </div>
        <div class="container">
        <img style="width: 200px; height: 200px;" src="imgs/JP.jpeg" alt="">
            <br>
            <label for="">Banco de Dados: <br> João Pedro Rosa</label>
            <br>
        </div>
    </div>
    <div class="container-group">
        <div class="container">
            <img style="width: 200px; height: 200px;" src="imgs/Isabel.jpeg" alt="">
            <br>
            <label for="">Orientadora: <br> Prof. Isabel</label>
            <br>
        </div>
        <div class="container">
            <img style="width: 200px; height: 200px;" src="imgs/Renisson.jpeg" alt="">
            <br>
            <label for="">Orientador <br> Tecnico: <br> Prof. Renisson</label>
            <br>
        </div>
    </div>
        <div class="button-container">
            <a href="table.php"><button class="custom-btn btn-1">VOLTAR</button></a>
        </div>
    <div class="container-group">
   
</body>
</html>