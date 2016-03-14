<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Librería</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</head>
<body>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
		<nav>
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo">Libreria</a>
		      <ul class="right hide-on-med-and-down">
		        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
		        <li><a href="badges.html"><i class="material-icons">shopping_cart</i></a></li>
		        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
		        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
		      </ul>
		    </div>
 		 </nav>	

		<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
		    <a class="btn-floating btn-large red">
		      <i class="large material-icons">mode_edit</i>
		    </a>
		    <ul>
		      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
		      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
		      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
		      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
		    </ul>
 		 </div>

		

		<div class="row">
		    <form class="col s6" action="/form" method="POST">
		    <center><h5> Registro Usuario</h5></center></br>
		      <div class="row">
		        <div class="input-field col s6">
		          <i class="material-icons prefix">account_circle</i>
		          <input id="icon_prefix" type="text" class="validate" name="nombre">
		          <label for="icon_prefix">Nombre</label> 
		        </div>

				<div class="input-field col s6">
		          <i class="material-icons prefix">perm_identity</i>
		          <input id="icon_prefix" class="validate" type="text" name="nick">
		          <label for="icon_prefix">Nick</label> 
		        </div>
				
				<div class="input-field col s6">
		          <i class="material-icons prefix">email</i>
		          <input id="icon_prefix" class="validate" type="email" name="email">
		          <label for="icon_prefix">Email</label> 
		        </div>
				
				<div class="input-field col s6">
		          <i class="material-icons prefix">lock</i>
		          <input id="icon_prefix" class="validate" type="password" name="password">
		          <label for="icon_prefix">Password</label> 
		        </div>

		        <div class="input-field col s6">
		          <i class="material-icons prefix">phone</i>
		          <input id="icon_telephone" class="validate" type="tel" name="telefono">
		          <label for="icon_telephone">Telephone</label> 
		        </div>
		      </div>
		    </form>
	  	</div>
	  	<div class="input-field col s6">
	  		<center><a class="waves-effect waves-light btn" type="submit" name="enviar"><i class="material-icons left">cloud</i>Enviar</a></center>
	  	</div>

	  	

		<div class="row">
			  		 <ul class="collection">
					    <li class="collection-item avatar">
					      <img src="images/jpg.jpg" alt="" class="circle">
					      <span class="title">Title</span>
					      <p>First Line <br>
					         Second Line
					      </p>
					      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					    </li>
					    <li class="collection-item avatar">
					      <i class="material-icons circle">folder</i>
					      <span class="title">Title</span>
					      <p>First Line <br>
					         Second Line
					      </p>
					      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					    </li>
					    <li class="collection-item avatar">
					      <i class="material-icons circle green">insert_chart</i>
					      <span class="title">Title</span>
					      <p>First Line <br>
					         Second Line
					      </p>
					      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					    </li>
					    <li class="collection-item avatar">
					      <i class="material-icons circle red">play_arrow</i>
					      <span class="title">Title</span>
					      <p>First Line <br>
					         Second Line
					      </p>
					      <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
					    </li>
					 </ul>
		</div>

		<div class="input-field col s12 m6">
		    <select class="icons">
		      <option value="" disabled selected>Choose your option</option>
		      <option value="" data-icon="images/jpg.jpg" class="circle">example 1</option>
		      <option value="" data-icon="images/jpg.jpg" class="circle">example 2</option>
		      <option value="" data-icon="images/jpg.jpg" class="circle">example 1</option>
		    </select>
		    <label>Images in selects</label>
  		</div>
</body>
</html>
