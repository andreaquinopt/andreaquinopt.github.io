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
<title>Prisma - T-Shirts</title>
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
		<h1>T-Shirt´s</h1>
		
 <div class="prods">
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/T-Shirts PNG/AC.png" alt>
	<button class="butao"><a>T-Shirt - Rosto Assassins Creed <br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/T-Shirts PNG/AC2.png" alt>
	<button class="butao"><a>T-Shirt - Rage Assassins Creed <br> 19,90 €</a></button></div></a>
		
		<a href="Prodp.html">
<div class="borda"><img src="Artigos/T-Shirts PNG/bb.png" alt>
	<button class="butao"><a>T-Shirt - Breaking Bad Tinta <br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/T-Shirts PNG/BB2.png" alt>
	 <button class="butao"><a>T-Shirt - Breaking Bad Crystal <br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/T-Shirts PNG/Flash Charging.png" alt>
		 <button class="butao"><a>T-Shirt - The Flash Charging <br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/T-Shirts PNG/Flash Reverse or not.png" alt>
	<button class="butao"><a>T-Shirt - Flash Vs Reverse Flash <br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/T-Shirts PNG/greenday.png" alt>
	<button class="butao"><a>T-Shirt - Greend Day Cover <br> 19,90 €</a></button></div></a>
		
		
<div class="borda"><img src="Artigos/T-Shirts PNG/Grimm.png" alt>
	<button class="butao"><a>T-Shirt - Grimm Hexenbiest <br> 19,90 €</a></button></div>
	 
	 
<div class="borda"><img src="Artigos/T-Shirts PNG/hp.png" alt>
	 <button class="butao"><a>T-Shirt - Harry Potter Always <br> 19,90 €</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts PNG/hp2.png" alt>
		 <button class="butao"><a>T-Shirt - Ron Wesley <br> 19,90 €</a></button></div>
	 
	 	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/T-Shirts PNG/HP3.png" alt>
	<button class="butao"><a>T-Shirt - Severus Snape <br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/T-Shirts PNG/HP4.png" alt>
	<button class="butao"><a>T-Shirt - 3 Brothers Tale <br> 19,90 €</a></button></div></a>
		
		
<div class="borda"><img src="Artigos/T-Shirts PNG/Mr robot white.png" alt>
	<button class="butao"><a>T-Shirt - Mr. Robot <br> 19,90 €</a></button></div>
	 
	 
<div class="borda"><img src="Artigos/T-Shirts PNG/PF.png" alt>
	 <button class="butao"><a>T-Shirt - Pulp Fiction Minions <br> 19,90 €</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts camisolas png/arrow.png" alt>
		 <button class="butao"><a>T-Shirt - Green Arrow <br> 19,90 €</a></button></div>
	 
	 <!-- 4 -->

	 	 	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/T-Shirts camisolas png/blink.png" alt>
	<button class="butao"><a>T-Shirt - Blink 182 <br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/T-Shirts camisolas png/roling.png" alt>
	<button class="butao"><a>T-Shirt - Roling Stones <br> 19,90 €</a></button></div></a>
		
		
<div class="borda"><img src="Artigos/T-Shirts camisolas png/likin park.png" alt>
	<button class="butao"><a>T-Shirt - Linkin Park <br> 19,90 €</a></button></div>
	 
	 
<div class="borda"><img src="Artigos/T-Shirts camisolas png/teenwolf.png" alt>
	 <button class="butao"><a>T-Shirt - Teen Wolf <br> 19,90 €</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/T-Shirts camisolas png/marsh.png" alt>
		 <button class="butao"><a>T-Shirt - Marshmello <br> 19,90 €</a></button></div>

	 </div>
			
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