<?php include "cabecalho.php"?>

<body>

<!-- Topo do Site -->
<nav class="nav-extended indigo darken-3 ">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right ">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
    	<h1>Mastercine</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent indigo darken-3">
        <li class="tab"><a href="#test1">Todos</a></li>
        <li class="tab"><a class="active" href="#test2">Assistidos</a></li>
        <li class="tab disabled"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
</nav>
<!-- /Topo do Site -->

<div class="row">
	<div class= "col s6 offset-s3">
		<div class="card">
			<div class="card-content">
				<span class ="card-title">Cadastrar Filme</span>
				<!-- input titulo -->
				<div class ="row">
				<div class="input-field col s12">
					<input id="titulo" id="disabled" type="text" class="validate" require>
	          		<label for="titulo">Titulo do Filme</label>
				</div>
			</div>
			<!-- input sinopse -->
			<div class="row">
		    	<form class="col s12">
		      		<div class="row">
		        		<div class="input-field col s12">
		         			<textarea id="sinopse" class="materialize-textarea"></textarea>
		          			<label for="sinopse">Sinopse</label>
						</div>
					</div>
		    	</form>
			</div>
		    <!-- input nota -->
		    <div class="row">
		    	<div class="input-field col s4">
		   			<input id="nota" type="number" step=".1" min=0 max=10 class="validate" require>
		   			<label for="nota">Nota</label>
				</div>
			</div>
			<!-- input capa -->
		    <div class="file-field input-field">
     			<div class="btn indigo darken-3 ">
        			<span>Capa</span>
        			<input type="file">
        		</div>
        		<div class="file-path-wrapper">
        			<input class="file-path validate" type="text">
      			</div>
  			</div>        
			<!-- Card action -->
			<div class="card-action">
				<a class="btn waves-effect waves-light grey" href="galeria.php">Cancelar</a>
				<a href="#" class="waves-effect waves-light btn indigo darken-3">Confirmar</a>
			</div>
		</div>
	</div>
</div>