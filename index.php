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
<img src="./img/Banner.jpg" style="opacity:10%;position: fixed;width:120%;height:140%; background-size:cover; z-index:-1; display:flex;top:0;left:0">

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
    </li>
	<!--
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left">
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="settings-outline"></ion-icon>
        </div>
        <span class="link-text">Settings</span>
      </a>
    </li> -->
  </ul>
</nav>
</div>
<div style="width: 100%; margin-top: 40px; display: flex; justify-content: center; text-align: center; position: absolute;">
  <div id="z" style="width:70%;"><a id="titulo" style="font-family: 'Raleway', sans-serif; font-size: 40px; color: white; text-shadow: 5px 5px 7px black; flex-grow: 1; margin-right:20%">HajimeNoIppo</a></div>
  <div style="width:30%;">
  <form action="index2.php" method="get" style="margin-right: 5%; padding-top: 6px; width: 90%; display:flex;">
    <input type="text" name="busqueda" style="height: 40px; padding: 0 20px; width: 100%; margin-right:5px;">
    <input type="submit" name="enviar" value="Buscar" style="height: 40px; padding: 0 0px;">
  </form></div>
</div>



</div>
</div>
<?php 

?>



<!-- partial:index.partial.html -->

<section class="container">
	
		<?php 
		require_once("conexion.php");
		$sql= "SELECT * from personaje";
		$result=$conn->query($sql);
		$mostrar= $result->fetchAll(PDO::FETCH_ASSOC);

		foreach($mostrar as $personaje){
		 ?>
		
        	<div class="card">
          		<div class="box">
            		<div class="content">
              			<img src="./img/<?php echo $personaje['Imagen']?>" id="Cards">
              			</img>
              			<h3><?php echo $personaje['Nombre'] ?></h3>
              			<p></p>
						<form action="index2.php" method="POST">
						<a href="index2.php?dato=<?php echo $personaje['idPersonaje']?>">Leer Mas</a>	
            		</div>
          		</div>
        	</div>
		
			<!--<td><?php echo $personaje['idPersonaje'] ?></td>
			<td><?php echo $personaje['Nombre'] ?></td>
			<td><?php echo $personaje['Descripcion'] ?></td>
			<td><?php echo $personaje['Imagen'] ?></td>
			<td><?php echo $personaje['Movimiento1'] ?></td>
		</tr> -->
		<?php 
		}
		 ?>
		</form>
    <div id="container1">
	<span id="text1"></span>
	<span id="text2"></span>
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