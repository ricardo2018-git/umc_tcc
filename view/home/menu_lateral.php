<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#" onclick="closeNav()">Inicio</a>
  <a href="#" onclick="closeNav()">Disciplina</a>
  <a href="#" onclick="closeNav()">Professor</a>
  <a href="#" onclick="closeNav()">FeedBack</a>
  <a href="#" onclick="closeNav()">Sobre</a>
  <a href="sair.php" onclick="closeNav()">Saír</a>
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
            <li class="<?php if($_GET["nivel"] == -1) echo 'active'; ?>"><a data-toggle="tab" href="#espera">Espera</a></li>
            <li class="<?php if($_GET["nivel"] == 0) echo 'active'; ?>"><a data-toggle="tab" href="#" onclick="openNav()">Inicie aqui</a></li>
            <li class="<?php if($_GET["nivel"] == 1) echo 'active'; ?>"><a data-toggle="tab" href="#aluno">Aluno</a></li>
            <li class="<?php if($_GET["nivel"] == 2) echo 'active'; ?>"><a data-toggle="tab" href="#professor">Professor</a></li>
            <li class="<?php if($_GET["nivel"] == 3) echo 'active'; ?>"><a data-toggle="tab" href="#administracao">ADM...</a></li>
          </ul>
          <div class="tab-content">
            <div id="espera" class="tab-pane fade">
            <!--  <h3>Sala de Espera</h3>
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
            </div> -->
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
