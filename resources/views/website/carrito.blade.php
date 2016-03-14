<<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Carrito</title>
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

 <!-- Page Layout here -->
	    <div class="row">
	      	<div class="col s3">
	        	<!-- Grey navigation panel -->
	        	<h3>Interes</h3>
	     	</div>
	      	<div class="col s6">
	        	<!-- Teal page content  -->
	        	<center><h2>Productos en carrito</h2></center>
	        		<table class="centered bordered" >
				        <thead>
				          <tr>
				              <th data-field="id">Name</th> 
				              <th data-field="name">Item Name</th>
				              <th data-field="price">Item Price</th>
				          </tr>
				        </thead>

				        <tbody>
				          <tr>
				            <td>Alvin
								 <a href="#!" class="btn waves-effect waves-teal">Send</a>
				            </td>
				            <td>Eclair</td>
				            <td>$0.87</td>
				          </tr>
				          <tr>
				            <td>Alan</td>
				            <td>Jellybean</td>
				            <td>$3.76</td>
				          </tr>
				          <tr>
				            <td>Jonathan</td>
				            <td>Lollipop</td>
				            <td>$7.00</td>
				          </tr>
				        </tbody>
				    </table>
	     	</div>
	    </div>
	
	<script type="text/javascript" src="/js/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="/js/materialize.min.js"></script>
	<script type="text/javascript" src="/js/app.js"></script>

</body>
</html>