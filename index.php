<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
   
  	<title>Inicio - M&DS</title>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body background="imagenes/fondo.jpg">
		
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
         <?php include 'menu.php' ?>
      </div>

      <br><br><br><br><br>

      <div class="col-md-6">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="imagenes/1.jpg" height="700px">
            </div>

            <div class="item">
              <img src="imagenes/2.jpg" height="700px">
            </div>

            <div class="item">
              <img src="imagenes/3.jpg" height="700px">
            </div>
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
          </div>
       </div>
      </div>


      <div class="col-md-6">
       <center>
        <h1><strong> ¿CUAL ES SU FUNCIONALIDAD?</strong></h1>
          <br>
        <h3><strong> M&DS</strong> es un sistema de informacion que optimiza eL funcionamiento de las labores administrativas de la empresa. 
        entre sus funciones principales esta el registro de clientes, ventas y productos. </h3>
       </center>
      </div>

      <div class="col-md-12">
        <hr>
         <p>Diseñado y Administrado por: Aprendides SENA TGA Ficha 959480 &copy; 2016 | 
         <a href="http:\\mueblesanty.co"><font color="#DC143C">MUEBLES Y DISEÑOS SANTY</font></a></p>
     </div>

    </div>
  </div>
      
</body>
</html>