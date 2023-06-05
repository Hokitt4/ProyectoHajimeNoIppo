<?php
if (isset($_GET["dato"])) {
  // Obtener el dato enviado a través del parámetro en la URL
  $dato = $_GET["dato"];
  // Realizar las operaciones necesarias con el dato
  // ...
  // Mostrar los resultados
  
  // Consultar a la base de datos toda la información del personaje
  ?>
  <?php 
  require_once("conexion.php");
  $sql= "SELECT * from personaje WHERE idPersonaje = $dato";
  $result=$conn->query($sql);
  $mostrar= $result->fetchAll(PDO::FETCH_ASSOC);
  

  foreach($mostrar as $personaje){
    ?>
  
<?php 
  }}
 ?>
<?php
require_once("conexion.php");

if(isset($_GET['enviar'])){
   $busqueda = trim($_GET['busqueda']); // Eliminar espacios en blanco al inicio y final
   
   // Verificar si el valor de búsqueda no está vacío
   if(!empty($busqueda)) {
       $sql = "SELECT * FROM personaje WHERE Nombre LIKE '%$busqueda%'";
       $result = $conn->query($sql);
       $mostrar = $result->fetchAll(PDO::FETCH_ASSOC);
       
       // Verificar si se encontraron resultados
       if(count($mostrar) > 0) {
           foreach($mostrar as $personaje) {
               echo $personaje['idPersonaje'];
               // Mostrar los resultados
           }
       } else {
           Header("Location: index.php");
       }
   } else {
       Header("Location: index.php");
   }
}
?>


<!DOCTYPE html>
<html lang="en" >
	
<head>
  	<meta charset="UTF-8">
  	<title>HajimeNoIppo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Inconsolata'><link rel="stylesheet" href="./prueba.css">
  	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Material+Icons+Round'>
	<link rel="stylesheet" href="./styles.css">

</head>

<body>


<img src="./img/Banner.jpg" style="opacity:5%;position: fixed;width:120%;height:140%; background-size:cover; z-index:-1; display:flex;top:0;left:0">

<div id="container2" style="position:absolute; width:100%; height:130px; top:0; left:0; display: flex; justify-content:center; text-align:center">
<div style="width:100%; margin-top:40px;">

<nav id="navbar">
  <ul class="navbar-items flexbox-col">
    <li class="navbar-logo flexbox-left">
      <a href="index.php" class="navbar-item-inner flexbox">
		<img src="./img/logo.gif" style="width:100%; height:100%;transform: scaleX(-1)"></img>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a href="index.php" class="navbar-item-inner flexbox-left">
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="home-outline"></ion-icon>
        </div>
        <span class="link-text">Home</span>
      </a>
    </li></ion-icon>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left">
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="folder-open-outline"></ion-icon>
        </div>
        <span class="link-text">Projects</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left">
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="people-outline"></ion-icon>
        </div>
        <span class="link-text">Login</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left">
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="chatbubbles-outline"></ion-icon>
        </div>
        <span class="link-text">Support</span>
      </a>
    </li><!--
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left">
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="settings-outline"></ion-icon>
        </div>
        <span class="link-text">Settings</span>
      </a>
    </li>-->
  </ul>
  </nav>

<a id="titulo"style="font-family:'Raleway', sans-serif; font-size:40px ; color: white; text-shadow: 5px 5px 7px black;">HajimeNoIppo</a></div></div>





<!-- partial:index.partial.html -->
<section class="container">

<div id="main" class="flexbox-col">
  <h2 style="color:white;margin-top:3%; -webkit-text-stroke: 2px black; text-shadow: 5px 5px 7px black; text-align: center"><?php echo $personaje['Nombre']?></h2>
  <div class="flexbox">

    <table class="container2" style="width:25%; margin-left:10% ">
    <tr>
    <th colspan="2"><img src="./img/<?php echo $personaje['Imagen']?>" style="width:100%; height:200px"></th>
    <tr>
      <th colspan="2" style="text-align:center">Información</th>
    </tr>
    <tr>
      <th>Nombre</th>
      <td><?php echo $personaje['Nombre']?></td>
    </tr>
    <tr>
      <th>Genero</th>
      <td><?php echo $personaje['Genero']?></td>
    </tr>
    <tr>
      <th>Fecha de Nacimiento</th>
      <td><?php echo $personaje['Fecha']?></td>
    </tr>
    <tr>
      <th>Nacionalidad</th>
      <td><?php echo $personaje['Nacionalidad']?></td>
    </tr>
    <tr>
      <th>Altura</th>
      <td><?php echo $personaje['Altura']?></td>
    </tr>
    <tr>
      <th>Clase</th>
      <td><?php echo $personaje['Clase']?></td>
    </tr>
    <tr>
      <th colspan="2" style="text-align:center">Estadisticas</th>
    </tr>
    <tr>
      <th>Cantidad de peleas</th>
      <td><?php echo $personaje['PartidasTotales']?></td>
    </tr>
    <tr>
      <th>Victorias</th>
      <td><?php echo $personaje['Victorias']?></td>
    </tr>
    <tr>
      <th>Derrotas</th>
      <td><?php echo $personaje['Derrotas']?></td>
    </tr>
    <tr>
      <th>Sorteo</th>
      <td><?php echo $personaje['Sorteo']?></td>
    </tr>
  </table>
  
  <?php $detalles = str_replace(". ", "<br/>", $personaje['Descripcion']);?>
  <p style="color:white; text-align:justify; width:45%; margin-left: 10%; padding-top:1%; -webkit-text-stroke: 0.1px black; text-shadow: 5px 5px 7px black;"><?php echo $detalles?></p>
    </div>
    <h2 style="color:white; text-align:center; margin-top:3%; -webkit-text-stroke: 2px black;text-shadow: 5px 5px 7px black;">Historia</h2>
    <?php $historia = str_replace(" .", "<br/></br>", $personaje['Historias']);?>
    <p style="color:white; text-align:justify; width:85%; margin-left: 10%; -webkit-text-stroke: 0.1px black; text-shadow: 5px 5px 7px black;"><?php echo $historia?></p>
    <h2 style="color:white; text-align:center; margin-top:1%; -webkit-text-stroke: 2px black; text-shadow: 5px 5px 7px black;">Técnicas</h2>

    
<section class="container" style="margin-top:-1%">
    <?php 
    foreach($mostrar as $personaje){
     ?>
    
        <div class="card">
              <div class="box">
                <div class="content">
                      <img src="./img/<?php echo $personaje['Movimiento1']?>" id="Cards2">
                      </img>
                      <!--<h3><?php echo $personaje['Nombre'] ?></h3>
                      <p></p>
                    <a>Leer Mas</a>-->	
                </div>
              </div>
        </div>
        <div class="card">
              <div class="box">
                <div class="content">
                      <img src="./img/<?php echo $personaje['Movimiento2']?>" id="Cards2">
                      </img>
                      <!--<h3><?php echo $personaje['Nombre'] ?></h3>
                      <p></p>
                    <a>Leer Mas</a>-->	
                </div>
              </div>
        </div>
        <?php
        if($personaje['Movimiento3']!= null){
            $movimiento = $personaje['Movimiento3'];
            echo "<div class='card'>";
            echo "<div class='box'>";
            echo "<div class='content'>";
            echo "<img src='./img/$movimiento' id='Cards2'>";
            echo "</img>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }?>

        <?php
        }
        ?>


<div id="container1">
	<span id="text1"></span>
	<span id="text2"></span>
</div>
</div>


<!-- The SVG filter used to create the merging effect -->
<svg id="filters">
	<defs>
		<filter id="threshold">
			<!-- Basically just a threshold effect - pixels with a high enough opacity are set to full opacity, and all other pixels are set to completely transparent. -->
			<feColorMatrix in="SourceGraphic"
					type="matrix"
					values="1 0 0 0 0
									0 1 0 0 0
									0 0 1 0 0
									0 0 0 255 -140" />
		</filter>
	</defs>
</svg></section>

  	<script  src="./script.js"></script>
  	<script src='https://npmcdn.com/regl@1.3.9/dist/regl.min.js'></script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/gl-matrix/2.7.1/gl-matrix-min.js'></script>
  	<script src='https://cdnjs.cloudflare.com/ajax/libs/onecolor/3.1.0/one-color-all.js'></script>
	
  	<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js'></script>
	<script src='https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js'></script>


</body>
</html>