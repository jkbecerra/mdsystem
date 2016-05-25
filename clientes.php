<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
   
    <title>Clientes - M&DS</title>

  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body background="imagenes/fondo.jpg">
    
		
	<div class="container">
		<div class="row">

      <div class="col-md-12">
        <?php include 'menu.php' ?>
      </div>

      <br><br><br>
			
      <div class="col-md-6">
        <h1><center>REGISTRO</center></h1>
         <div class="jumbotron">
          <form action="guardar.php" method="post">
            <div class="form-group">
              <label>NOMBRES</label>
              <input type="text" class="form-control"   name="nom">
            </div>
            <div class="form-group">
              <label>CONTRASEÑA</label>
              <input type="password" class="form-control"   name="con">
            </div>
            <div class="form-group">
              <label>APELLIDOS</label>
              <input type="text" class="form-control"   name="ap">
            </div>
            <div class="form-group">
              <label>DIRECCION</label>
              <input type="text" class="form-control"   name="dir">
            </div>
             <div class="form-group">
              <label>TELEFONO</label>
              <input type="text" class="form-control"   name="tel">
            </div>
             <div class="form-group">
              <label>CORREO</label>
              <input type="text" class="form-control"  name="corr">
            </div>
            
            <button type="submit" style="background-color: #FF9900"> <STRONG> GUARDAR</STRONG></button>
           </form>
          </div>
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