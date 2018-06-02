<?php
	session_start();
require('connect.php');
$username='username';
?>
<html>
<head>
	

<link rel="apple-touch-icon" sizes="180x180" href="favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<meta charset="utf-8">
<title>Prisma V2</title>
<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  
		<header>
		<div class="barra_topo">
		<div class="alinhar_dir">
	 		<div class="login_registro_btn">
   <?php if(!isset($_SESSION['user']))
    {
        echo '<li class="logout"><a href="login.php">Login</a></li>';
		echo '<li class="logout"><a href="register.php">Registo</a></li>';
    }
    else
    {
        echo '<li class="logout"><a href="logout.php">Logout</a></li>';
		echo "<li><p>Bem Vindo,  ".$_SESSION['user']."!<p></li>";
		
    }
?>			
			</div>
		  </div>
		  </div>
		<div class="logo">
			<a href="Index.php">
		<img src="../Prisma/Logos/Logo V1.png">
				</a>
		</div>
		  
<div class="navbar">
					<a href="todos_os_productos.php">Todos os Produtos</a>	
					<a href="roupa.php">Roupa</a>		
					<a href="jogos.php">Jogos</a>
	  				<a href="packs.php">Packs</a>
	 				<input type="text" name="search" placeholder="Pesquisar..." class="pesquisa" />
		 						
	  </div>
			<div class="bigseparador"></div>
	</header>
		
   <!--slideshow-->
<div id="slider">
<figure>
	<a href="colecaojogos.php">
<img src="Slider/Jogos.png" alt>
		</a><a href="cmusica.php">
	<img src="Slider/Musica.png" alt>
	</a><a href="colecaojogos.php">
<img src="Slider/Jogos.png" alt>
	</a>
	<a href="cmusica.php">
<img src="Slider/Musica.png" alt>
	</a>
	<a href="colecaojogos.php">
<img src="Slider/Jogos.png" alt>
	</a>
</figure>
</div>
	
	<div class="smallseparador"></div>

	<!produtos>
	<body>
		<div class="bordanov">
		<h1>Novidades</h1>
		
 <div class="prods">
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/T-Shirts PNG/AC.png" alt>
	<button class="butao"><a>T-Shirt Assassins Creed <br>19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/T-Shirts PNG/AC2.png" alt>
	<button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div></a>
		
		<a href="Prodp.html">
<div class="borda"><img src="Artigos/T-Shirts PNG/bb.png" alt>
	<button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/Sweats/dp.png" alt>
	 <button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/TW.png" alt>
		 <button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/192.png" alt>
	<button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/Sweats/LP.png" alt>
	<button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div></a>
		
		
<div class="borda"><img src="Artigos/hoodies/hp.png" alt>
	<button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div>
	 
	 
<div class="borda"><img src="Artigos/hoodies/HPS.png" alt>
	 <button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/hoodies/RM.png" alt>
		 <button class="butao"><a>T-Shirt Assassins Creed - 19,90 €</a></button></div>
	 </div>
</div>
</body>
	<footer class="footer">

			<div class="container-footer">

				<nav class="footer-texto">
					<ul>
													<li class="menu-home"><a href="Index.php" >Home</a></li>
													<li class="menu-sobre-nos"><a href="sobrenos.php" >Sobre nós</a></li>								
													<li class="menu-contactos"><a href="#" >Contactos</a></li>
						
											</ul>
				</nav>

				<div class="copyright">
					&copy; Prisma 2018. Todos os produtos com IVA incluído.
				</div>	
	</div>
				
			
		</footer>

	


</html>
