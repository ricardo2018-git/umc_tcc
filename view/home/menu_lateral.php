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
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div id="main">
  <!-- <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Iniciar</span>          "antigo iniciar dos caras"-->

<div class="row">
        <div class="col-md-4">
          <!-- Imagem do usuario -->
            <div class="row">
              <div>
                <img src="conf/img/usuario_f.png" class="img-circle" alt="Cinque Terre" width=100px>
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
            <li class="<?php if($_GET["nivel"] == 0) echo 'active'; ?>"><a data-toggle="tab" href="#espera">Espera</a></li>
            <li class="<?php if($_GET["nivel"] == 0) echo 'active'; ?>"><a data-toggle="tab" href="#" onclick="openNav()">Inicie aqui</a></li>
            <!-- condição do if esta == ao de cima-->
            <li class="<?php if($_GET["nivel"] == 1) echo 'active'; ?>"><a data-toggle="tab" href="#aluno">Aluno</a></li>
            <li class="<?php if($_GET["nivel"] == 2) echo 'active'; ?>"><a data-toggle="tab" href="#professor">Professor</a></li>
            <li class="<?php if($_GET["nivel"] == 3) echo 'active'; ?>"><a data-toggle="tab" href="#administracao">ADM...</a></li>
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
