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
		
    	<div class="col-md-12">
        <h1>Listado de clientes</h1>    
      </div>

      <div class="col-md-12">
        <table class="table table-hover">
          <tr>
            <td> <strong> NOMBRES</strong></td>
            <td> <strong> CONTRASEÑA</strong></td>
            <td> <strong> APELLIDOS</strong></td>
            <td> <strong> DIRECCION</strong></td>
            <td> <strong> TELEFONO</strong></td>
            <td> <strong> CORREO</strong></td>
          </tr>
            
          <?php
           error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR); 
           include "conexion.php";
            $sql ="select * from clientes";
            $result = mysql_query($sql);
          ?>  
          <?php

            while ($row = mysql_fetch_row($result)){ 
          ?>
              <tr>
                <td>
                    <a href="mostrar.php?id=<?php echo $row[0]; ?>">
                      <?php echo $row[0] ?>
                    </a>
                  </td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?></td>
                <td><?php echo $row[4] ?></td>
                <td><?php echo $row[5] ?></td>
                
              </tr>         
          <?php
            } 
          ?>
        </table>
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