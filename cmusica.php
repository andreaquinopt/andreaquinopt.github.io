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
<title>Prisma - Coleção Musica</title>
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
		<h1>"A Musica Fica-te Bem"</h1>
		
 <div class="prods">
	  
<div class="borda"><img src="Artigos/T-Shirts camisolas png/blink.png" alt>
	 <button class="butao"><a>T-Shirt - Blink 182 <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts camisolas png/eminem.png" alt>
		 <button class="butao"><a>T-Shirt - Eminem <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/T-Shirts camisolas png/kiss1.png" alt>
	 <button class="butao"><a>T-Shirt - KISS <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts camisolas png/likin park.png" alt>
		 <button class="butao"><a>T-Shirt - Linkin Park <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/T-Shirts camisolas png/likin park1.png" alt>
	 <button class="butao"><a>T-Shirt - Linkin Park - Azul e Rosa <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts camisolas png/marsh.png" alt>
		 <button class="butao"><a>T-Shirt - Marshmello <br> 19,99€</a></button></div>
	 
	 		<div class="borda"><img src="Artigos/T-Shirts camisolas png/roling.png" alt>
	 <button class="butao"><a>T-Shirt - Rolling Stones <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts camisolas png/sia.png" alt>
		 <button class="butao"><a>T-Shirt - SIA <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/T-Shirts PNG/greenday.png" alt>
	 <button class="butao"><a>T-Shirt - Green Day <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts PNG/X ed.png" alt>
		 <button class="butao"><a>T-Shirt - "X" Ed Sheeran <br> 19,99€</a></button></div>
	 
	 <!--checkpoint-->
	 
	 	 <div class="borda"><img src="Artigos/Sweats/192.png" alt>
		 <button class="butao"><a>Sweatshirt - Blink 182 <br> 19,99€</a></button></div>
	 
	 		<div class="borda"><img src="Artigos/Sweats/LP.png" alt>
	 <button class="butao"><a>Sweatshirt - Linkin Park <br> 19,99€</a></button></div>
	 
	 	 <div class="borda"><img src="Artigos/Sweats/Twenty one pilots.png" alt>
		 <button class="butao"><a>Sweatshirt - Twenty One Pilots <br> 19,99€</a></button></div>
	
			
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