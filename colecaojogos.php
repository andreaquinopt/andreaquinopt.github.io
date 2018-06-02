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
<title>Prisma - Coleção Jogos</title>
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
	
	
	
	
		<body>
		<div class="bordanov">
		<h1>"EAT GAME SLEEP"</h1>
		
 <div class="prods">
	  
<div class="borda"><img src="Artigos/T-Shirts PNG/AC.png" alt>
	 <button class="butao"><a>T-Shirt - Rosto Assassins Creed <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts PNG/AC2.png" alt>
		 <button class="butao"><a>T-Shirt - Rage Assassins Creed <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/Caveada/eat.png" alt>
	 <button class="butao"><a>Manga Caveada - Eat Game Sleep <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/Caveada/mario.png" alt>
		 <button class="butao"><a>Manga Caveada - Super Mario <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/Caveada/portal.png" alt>
	 <button class="butao"><a>Manga Caveada - Portal <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/Caveada/zelda.png" alt>
		 <button class="butao"><a>Manga Caveada - Zelda<br> 19,99€</a></button></div>
	 
	 		<div class="borda"><img src="Artigos/Sweats/atari.png" alt>
	 <button class="butao"><a>Sweatshirt - Atari Neon <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/Sweats/eat.png" alt>
		 <button class="butao"><a>Sweatshirt - Eat Game Sleep <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/Sweats/pacman.png" alt>
	 <button class="butao"><a>Sweatshirt - Pacman Pie<br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/Sweats/pokemon.png" alt>
		 <button class="butao"><a>Sweatshirt - Train Your Pokemon <br> 19,99€</a></button></div>
	 
	 <!--checkpoint-->
	 
	 	 <div class="borda"><img src="Artigos/hoodies/Bowser.png" alt>
		 <button class="butao"><a>Hoodies - Bowser <br> 19,99€</a></button></div>
	 
	 		<div class="borda"><img src="Artigos/hoodies/kha.png" alt>
	 <button class="butao"><a>Hoodies - Kha'Zix <br> 19,99€</a></button></div>
	 
	 	 <div class="borda"><img src="Artigos/hoodies/khapre.png" alt>
		 <button class="butao"><a>Hoodies -  <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/hoodies/Bob.png" alt>
	 <button class="butao"><a>Hoodie - Bob Marley <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/hoodies/Avicci.png" alt>
		 <button class="butao"><a>Hoodie - Avicci <br> 19,99€</a></button></div>
	 
	  <!--checkpoint-->
	 
	 	 <div class="borda"><img src="Artigos/hoodies/nirvana.png" alt>
		 <button class="butao"><a>Hoodie - Nirvana <br> 19,99€</a></button></div>
	 
	 		<div class="borda"><img src="Artigos/Caveada/lildicky.png" alt>
	 <button class="butao"><a>Manga Caveada - Lil Dicky <br> 19,99€</a></button></div>
	 
	 

	 </div>
			
			
</div>
</body>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	<footer class="footer">
		
		



			<div class="container-footer">

				<nav class="footer-texto">
					<ul>
													<li class="menu-home"><a href="Index.html" >Home</a></li>
													<li class="menu-sobre-nos"><a href="#" >Sobre nós</a></li>
													<li class="menu-contactos"><a href="#" >Contactos</a></li>
						
											</ul>
				</nav>

				<div class="copyright">
					&copy; Prisma 2018. Todos os produtos com IVA incluído.
				</div>	
	</div>
				
			
		</footer>

</html>