<?php 
  # Inicia session
  session_start();

  # Verifica se a session não existe
  if(!isset($_SESSION['nome'])){
    #redireciona para index passando get 
    header('Location: ../../../index.php?cadastro=4');
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

/*Img do ususario*/
#img{
  border: 1px solid red;
  position: relative;
  left: 0px;
  top: -20px;
  width: 102px;
}
.desativa {
    pointer-events: none;
  cursor: default;
  opacity: 0.6;
  text-decoration: line-through;  /*Risca a palavra no meio*/
}

</style>

</head>
<body>

<div id="mySidenav" class="sidenav sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><i class="fa fa-fw fa-home"></i>Inicio</a><hr> <!-- Linha -->
  <a href="#" onclick="closeNav()">Cadastrar Colaborador</a>
  <a href="#" onclick="closeNav()">Ler FeedBack</a>
  <a href="#" onclick="closeNav()">Permissões</a>
  <a href="#" onclick="closeNav()">Validar Conteudo</a>
  <a href="../sobre2.php" onclick="closeNav()">Sobre</a>
  <a href="../sair.php" onclick="closeNav()">Saír</a>
</div>

<div id="main">
  <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Iniciar</span>          "antigo iniciar dos caras"-->

<div class="row">
        <div class="col-md-4">

          <!-- Imagem do usuario -->
            <div id="img" class="row">
              <div>
                <?php
                  if($_SESSION['foto'] == null){

                    if($_SESSION['sexo'] == 'm'){ # Foto macoluno
                      echo '<img src="../conf/img/usuario_h.png" class="img-circle" alt="Cinque Terre" width=100px>';

                    }else if($_SESSION['sexo'] == 'f'){ # Foto feminino
                      echo '<img src="../conf/img/usuario_f.png" class="img-circle" alt="Cinque Terre" width=100px>';

                    }else if($_SESSION['sexo'] == 'o'){ # Foto Outros
                      echo '<img src="../conf/img/usuario_h2.png" class="img-circle" alt="Cinque Terre" width=100px>';
                    }
                  }else{
                    # Pegar foto do banco
                  }
                ?>
                
              </div>
            </div>
          <!-- FIM Imagem do usuario -->

        </div>

        <div class="col-md-4">
          <!-- Propaganda -->
            <div id="propaganda">
              <!-- RESERVADO PARA PROPRAGANDA -->
            </div>
          <!-- FIM Propaganda -->
        </div>
        
        <div class="col-md-4">

        </div>
      </div>

        <div id="submenu">
          <ul class="nav nav-tabs">
            
            <li class=""><a data-toggle="tab" href="#" onclick="openNav()">Inicie aqui</a></li>
            <li class="desativa"><a data-toggle="tab" href="#aluno">Aluno</a></li>
            <li class="desativa"><a data-toggle="tab" href="#professor">Professor</a></li>
            <li class="active"><a data-toggle="tab" href="#administracao">ADM...</a></li>
          </ul>
          <div class="tab-content">
            <div id="espera" class="tab-pane fade">
              <h3>Sala de Espera</h3>
              home fora
            </div>
            
            <div id="aluno" class="tab-pane fade">
              <h3>ALUNO</h3>
              home fora
            </div>
          
            <div id="professor" class="tab-pane fade">
              <h3>PROFESSOR</h3>
              home fora
            </div>
          
            <div id="administracao" class="tab-pane fade">
              <h3>ADIMINISTRAÇÃO</h3>
              home fora
            </div>
          </div>
        </div>

<!-- Conteudo -->



</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     
</body>
</html> 
