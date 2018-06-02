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
<title>Prisma - Jogos</title>
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
		<h1>Jogos</h1>
		
 <div class="prods">
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/risk/risk.png" alt>
	<button class="butao"><a>Risk - Original<br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/risk/hp.png" alt>
	<button class="butao"><a>Risk - Harry Potter<br> 19,99€</a></button></div></a>
		
		<a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/risk/halo.png" alt>
	<button class="butao"><a>Risk - Halo<br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/risk/who.png" alt>
	 <button class="butao"><a>Risk - Dr. Who <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
	 <div class="borda"><img src="Artigos/jogos/risk/Got.png" alt>
		 <button class="butao"><a>Risk - Game of Thrones <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
	 <div class="borda"><img src="Artigos/jogos/risk/mg.png" alt>
		 <button class="butao"><a>Risk - Especial Metal Gear  <br> 19,99€</a></button></div></a>
	 
	 <div class="borda"><img src="Artigos/jogos/Monopoly/monooriginal.png" alt>
	<button class="butao"><a>Monopoly - Original<br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/Monopoly/007.png" alt>
	<button class="butao"><a>Monopoly - 007<br> 19,99€</a></button></div></a>
		
		<a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/Monopoly/who.png" alt>
	<button class="butao"><a>Monopoly - Dr. Who<br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/Monopoly/SPECIAL.png" alt>
	 <button class="butao"><a>Monopoly - América Special  <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
	 <div class="borda"><img src="Artigos/jogos/Monopoly/strangerthings.png" alt>
		 <button class="butao"><a>Monopoly - Stranger Things <br> 19,99€</a></button></div></a>
			
				 
	 <div class="borda"><img src="Artigos/jogos/Monopoly/dead.png" alt>
	<button class="butao"><a>Monopoly - Deadpool<br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/Monopoly/zelda.png" alt>
	<button class="butao"><a>Monopoly - Zelda<br> 19,99€</a></button></div></a>
		
		<a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/Monopoly/starwars.png" alt>
	<button class="butao"><a>Monopoly - Star Wars<br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/Cluedo/origin.png" alt>
	 <button class="butao"><a>Cluedo - Original  <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
	 <div class="borda"><img src="Artigos/jogos/Cluedo/hp.png" alt>
		 <button class="butao"><a>Cluedo - Harry Potter <br> 19,99€</a></button></div></a>
			
			<a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/Cluedo/london.png" alt>
	 <button class="butao"><a>Cluedo - London Edition  <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
	 <div class="borda"><img src="Artigos/jogos/Cluedo/rick.png" alt>
		 <button class="butao"><a>Cluedo - Rick and Morty <br> 19,99€</a></button></div></a>
			
						<a href="Prodp.php">
<div class="borda"><img src="Artigos/jogos/Cluedo/bang.png" alt>
	 <button class="butao"><a>Cluedo - The Big Bang Theory  <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.php">
	 <div class="borda"><img src="Artigos/jogos/Cluedo/who.png" alt>
		 <button class="butao"><a>Cluedo - Dr. Who <br> 19,99€</a></button></div></a>
			
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