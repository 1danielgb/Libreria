<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Tienda</title>
	<link rel="stylesheet" type="text/css" href="/css/materialize.min.css"/>
	<link rel="stylesheet" href="/css/app.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"/>
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


	<div id="cont2"class="container center">
        <!-- Page Content goes here -->
        <div class="grid-example col s6 m6">
        	<span class="flow-text">Acerca de nostros</span> </br>
        	    <i class="fa fa-question-circle fa-5x"></i>
        </div>
    </div>

    <div id="cont3" class="center">
    	<ul class="collapsible" data-collapsible="accordion">
		    <li>
		      <div class="collapsible-header"><i class="fa fa-users"></i>Equipo</div>
		      <div class="collapsible-body"><p>Somos un equipo responsable, unido y puntual.</p>
					 <img class="materialboxed" data-caption="A picture of some deer and tons of trees" width="250" src="images/personas.jpg">
		      </div>

		    </li>
		</ul>

		<ul class="collapsible" data-collapsible="accordion">
		    <li>
		      <div class="collapsible-header"><i class="fa fa-line-chart"></i>Meta</div>
		      <div class="collapsible-body"><p>Nuestra meta es ser la mejor libreria en calidad y producto.</p>
					 <img class="materialboxed" data-caption="A picture of some deer and tons of trees" width="250" src="images/calidad.png">
		      </div>
		    </li>
		</ul>
    </div>

    <div id="cont4" class="center">
    	hola
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