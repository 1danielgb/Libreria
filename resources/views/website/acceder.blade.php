<<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
	<header>
		<nav class= "#e64a19 deep-orange darken-2, z-depth-5">
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo">Libreria  <i class="fa fa-book"></i></a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><pre> <i class="fa fa-bars"></i></pre></a>
		      <ul class="right hide-on-med-and-down">
		      	<li><a href="/tienda">Tienda  <i class="fa fa-shopping-bag"></i></a></li>
		      	<li><a href="/carrito">Carrito  <i class="fa fa-shopping-cart"></i></a></li>
		        <li><a href="/acceder">Acceder  <i class="fa fa-user"></i></a></li>
		        <li><a href="/acerca">Acerca <i class="fa fa-question-circle"></i></a></li>
		        <li><a href="/contacto">Contacto  <i class="fa fa-phone"></i></a></li>
		      </ul>
		      <ul class="side-nav" id="mobile-demo">
		      	<li><a href="/tienda"><i class="fa fa-shopping-bag">Tienda</i></a></li>
		      	<li><a href="/carrito"><i class="fa fa-shopping-cart">  Carrito</i></a></li>
		        <li><a href="/acceder"><i class="fa fa-user"></i> Acceder</a></li>
		        <li><a href="/acerca"><i class="fa fa-question-circle"></i> Acerca</a></li>
		        <li><a href="/contacto"><i class="fa fa-phone"></i> Contacto</a></li>
		      </ul>
		    </div>
		</nav>
	</header>

	</br>
    <div class="container center z-depth-5">
        <!-- Page Content goes here -->
        <div class="grid-example col s6 m6">
        	<span class="flow-text">Bienvenido</span> </br>
        	    <i class="fa fa-user fa-5x"></i>
        </div>
	
		<div id="accede1  col s6">
	    	<ul class="collapsible" data-collapsible="accordion">
			    <li>
			      <div class="collapsible-header center"><i class="fa fa-users"></i>Acceder</div>
			      <div class="collapsible-body">
			      		<div class="row">
						    <form class="col s12">
						      	<div class="row">
							        <div class="input-field col s10">
							          <i class="material-icons prefix">account_circle</i>
							          <input id="icon_prefix" type="text" class="validate">
							          <label for="icon_prefix">Usuario</label>
							        </div>
						      	</div>

						      	<div class="row">
							        <div class="input-field col s10">
							          <i class="material-icons prefix">lock_circle</i>
							          <input id="password" type="password" class="validate">
							          <label for="password">Password</label>
							    	</div>
		      					</div>

						    </form>
						</div>
						<div class="center">
				        	<button class="btn waves-effect waves-light" type="submit" name="action">Entrar
							    <i class="material-icons right">send</i> 
							</button>
				        </div> </br>
			      </div>

			    </li>
			</ul>

			<ul class="collapsible" data-collapsible="accordion">
			    <li>
			      <div class="collapsible-header"><i class="fa fa-plus-circle"></i>Registrar</div>
			      
			    </li>
			</ul>
	    </div>

        <div>
        	<a href="">Registrar</a>
        </div>	

    </div>
    

	<footer class="page-footer, #e64a19 deep-orange darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Libreria 
                	<i class="fa fa-book"></i>
                </h5>
                <p class="grey-text text-lighten-4">Leer es una experiencia de vida</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul class="white-text">
                  	<li><a href="sass.html">Tienda </a></li>
			        <li><a href="sass.html">Acceder </a></li>
			        <li><a href="badges.html">Acerca</a></li>
			        <li><a href="collapsible.html">Contacto</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright white-text">
            <div class="container">
           	 	© 2016 - Daniel Galván Bautista
           		<a class="grey-text  right btn-social" href="#!"><i class="fa fa-facebook-square "></i></a>
             	<a class="grey-text right btn-social" href="#!"><i class="fa fa-twitter-square "></i></a>
            </div>
          </div>
    </footer>

	<script type="text/javascript" src="/js/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>