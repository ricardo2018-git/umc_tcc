<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 280px;	/*estava 33.3%*/
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 150px) { /*estava 650px*/
  .column {
    width: 50%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>
</head>
<body>

<div class="container">

	<center><h2>Nossa Equipe de Analista Desenvolvedores</h2></center>
	<hr>

	<div class="row">
	  <div class="column">
	    <div class="card">
	      <img src="conf/img/equipe/e1.png" alt="Gustavo" style="width:100%">
	      <div class="container">
	        <h2>Gustavo Santos</h2>
	        <p class="title">CEO & Founder</p>
	        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	        <p>gustavo@example.com</p>
	        <p><button class="button">Contato</button></p>
	      </div>
	    </div>
	  </div>

	  <div class="column">
	    <div class="card">
	      <img src="conf/img/equipe/e2.png" alt="Rafael" style="width:100%">
	      <div class="container">
	        <h2>Rafael Magalhães</h2>
	        <p class="title">Art Director</p>
	        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	        <p>rafael@example.com</p>
	        <p><button class="button">Contato</button></p>
	      </div>
	    </div>
	  </div>

	  <div class="column">
	    <div class="card">
	      <img src="conf/img/equipe/e3.png" alt="Ricardo" style="width:100%">
	      <div class="container">
	        <h2>Ricardo Ramos</h2>
	        <p class="title">Designer</p>
	        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	        <p>ricardo@example.com</p>
	        <p><button class="button">Contato</button></p>
	      </div>
		</div>
	   </div>

	  <div class="column">
	    <div class="card">
	      <img src="conf/img/equipe/e4.png" alt="Victor H." style="width:100%">
	      <div class="container">
	        <h2>Victor Hugo</h2>
	        <p class="title">Art Director</p>
	        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	        <p>victorh@example.com</p>
	        <p><button class="button">Contato</button></p>
	      </div>
	    </div>
	  </div>

	  <div class="column">
	    <div class="card">
	      <img src="conf/img/equipe/e5.png" alt="Victor S." style="width:100%">
	      <div class="container">
	        <h2>Victor Scotton</h2>
	        <p class="title">Designer</p>
	        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
	        <p>victors@example.com</p>
	        <p><button class="button">Contato</button></p>
	      </div>
	    </div>
	  </div>
	</div>
</div>
</body>
</html>