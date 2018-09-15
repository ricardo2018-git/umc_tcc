
<!-- Opções do menu lateral -->
  <div id="mySidenav" class="sidenav sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#"><i class="fa fa-fw fa-home"></i>Inicio</a><hr> <!-- Linha -->
    <a href="#" onclick="closeNav()">Perfil</a>
    <a href="#" onclick="closeNav()">Pesquisar</a>
    <a href="#" onclick="closeNav()">Enviar E-mail</a>
    <a href="#" onclick="closeNav()">FeedBack</a>
    <a href="#" onclick="closeNav()" data-toggle="modal" data-target="#myModal">Sobre</a> <!-- chama modal sobre -->
    <a href="../sair.php" onclick="closeNav()">Saír</a>
  </div>
<!-- FIM Opções do menu lateral -->

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
            <div>
              <!-- RESERVADO PARA PROPRAGANDA -->
              
            </div>
          <!-- FIM Propaganda -->
        </div>
        
        <div class="col-md-4">

        </div>
      </div>

        <div id="submenu">
          <ul class="nav nav-tabs">
            
            <li class="desativa"><a data-toggle="tab" href="#" onclick="openNav()" style="color:Tomato;">Inicie aqui</a></li>
            <li class="active"><a data-toggle="tab" href="#espera">Espera</a></li>
            <li class="desativa"><a data-toggle="tab" href="#aluno">Aluno</a></li>
            <li class="desativa"><a data-toggle="tab" href="#professor">Professor</a></li>
            <li class="desativa"><a data-toggle="tab" href="#administracao">ADM...</a></li>
          </ul>

          <div>
              <h3>Sala de Espera</h3>
              <p>Você foi direcionado para sala de espera, ou seja você tem que aguardar aprovoção do administrador do sistema, isso pode legar alguns dias !!!</p>
            </div>

          <div class="tab-content">
                
            <div id="espera" class="tab-pane fade">
              <h3>Sala de Espera</h3>
              <p>Você foi direcionado para sala de espera, ou seja Você tem que aguardar aprovoção do administrador do sistema, isso pode legar alguns dias !!!</p>
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

        <!-- modal sobre -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Nossa Equipe</h4>
                </div>
                  <div class="modal-body">
                    
                    <!-- integrante -->
                      <div class="row">
                        <div class="column">
                          <div class="card">
                            <img src="../conf/img/equipe/e1.png" alt="Jane" class="mx-auto d-block" style="width:100%">
                            <div class="container">
                              
                              <h2>Gustavo S.</h2>
                              <p class="title">Analista &amp; Programador</p>
                              <p>gustavo@example.com</p>
                              <p><button class="button">Contato</button></p>
                              
                            </div>
                          </div>
                        </div>

                        <div class="column">
                          <div class="card">
                            <img src="../conf/img/equipe/e2.png" alt="Jane" style="width:100%">
                            <div class="container">
                              
                              <h2>Rafael M.</h2>
                              <p class="title">Analista &amp; Programador</p>
                              <p>rafael@example.com</p>
                              <p><button class="button">Contato</button></p>

                            </div>
                          </div>
                        </div>

                        <div class="column">
                          <div class="card">
                            <img src="../conf/img/equipe/e3.png" alt="Jane" style="width:100%">
                            <div class="container">
                              
                              <h2>Ricardo R.</h2>
                              <p class="title">Analista &amp; Programador</p>
                              <p>ricardo@example.com</p>
                              <p><button class="button">Contato</button></p>
                              
                            </div>
                          </div>
                        </div>

                        <div class="column">
                          <div class="card">
                            <img src="../conf/img/equipe/e4.png" alt="Jane" style="width:100%">
                            <div class="container">
                              
                              <h2>Victor H.</h2>
                              <p class="title">Analista &amp; Programador</p>
                              <p>victorh@example.com</p>
                              <p><button class="button">Contato</button></p>

                            </div>
                          </div>
                        </div>

                        <div class="column">
                          <div class="card">
                            <img src="../conf/img/equipe/e5.png" alt="Jane" style="width:100%">
                            <div class="container">
                              
                              <h2>Victor S.</h2>
                              <p class="title">Analista &amp; Programador</p>
                              <p>victors@example.com</p>
                              <p><button class="button">Contato</button></p>

                            </div>
                          </div>
                        </div>
                      </div>
                    <!-- FIM integrante -->
                  
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
              </div>
              
            </div>
          </div>
        <!-- FIM modal sobre -->
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

