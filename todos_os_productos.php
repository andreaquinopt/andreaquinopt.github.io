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
<title>Prisma - Todos os produtos</title>
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
	
	
	
	<!--Menu-->
<div class="bordanov">
		<h1>Todos os Produtos</h1>
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
	 
	 <div class="borda"><img src="Artigos/Caveada/13.png" alt>
	<button class="butao"><a>Manga Caveada - 13 Reasons Why <br>19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/Caveada/caveleiros.png" alt>
	<button class="butao"><a>Manga Caveada - Cavaliers<br> 19,90 €</a></button></div></a>
		
		<a href="Prodp.html">
<div class="borda"><img src="Artigos/Caveada/eat.png" alt>
	<button class="butao"><a>Manga Caveada - Eat Game Sleep<br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/Caveada/gifted.png" alt>
	 <button class="butao"><a>Manga Caveada - The Gifted<br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Caveada/legend.png" alt>
		 <button class="butao"><a>Manga Caveada - legen...dary<br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Caveada/lildicky.png" alt>
	<button class="butao"><a>Manga Caveada - Lil Dicky<br> 19,90 €</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/Caveada/lion.png" alt>
	<button class="butao"><a>Manga Caveada - Burger King<br> 19,90 €</a></button></div></a>
		
		
<div class="borda"><img src="Artigos/Caveada/luci.png" alt>
	<button class="butao"><a>Manga Caveada - Lucifer<br> 19,90 €</a></button></div>
	 
	 
<div class="borda"><img src="Artigos/Caveada/mario.png" alt>
	 <button class="butao"><a>Manga Caveada - Super Mario<br> 19,90 €</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/Caveada/portal.png" alt>
		 <button class="butao"><a>Manga Caveada - Portal WC<br> 19,90 €</a></button></div>

	  <div class="borda"><img src="Artigos/Caveada/strain.png" alt>
		 <button class="butao"><a>Manga Caveada - The Strain<br> 19,90 €</a></button></div>
	 
	  <div class="borda"><img src="Artigos/Caveada/zelda.png" alt>
		 <button class="butao"><a>Manga Caveada - Zelda<br> 19,90 €</a></button></div>
	<div class="borda"><img src="Artigos/hoodies/HPS.png" alt>
	 <button class="butao"><a>Hoodie - Severus Snape <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/hoodies/RM.png" alt>
		 <button class="butao"><a>Hoodie - Rick and Morty <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/hoodies/alien.png" alt>
	 <button class="butao"><a>Hoodie - Alien <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/hoodies/Bowser.png" alt>
		 <button class="butao"><a>Hoodie - Bowser <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/hoodies/doge.png" alt>
	 <button class="butao"><a>Hoodie - Doge <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/hoodies/Dragon ball.png" alt>
		 <button class="butao"><a>Hoodie - Dragon Ball "Goku" <br> 19,99€</a></button></div>
	 
	 		<div class="borda"><img src="Artigos/hoodies/Flash.png" alt>
	 <button class="butao"><a>Hoodie - ZombieFlash <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/hoodies/joker.png" alt>
		 <button class="butao"><a>Hoodie - Joker <br> 19,99€</a></button></div>
	
			
			<div class="borda"><img src="Artigos/hoodies/hp.png" alt>
	 <button class="butao"><a>Hoodie - Ron Wesley <br> 19,99€</a></button></div>
	 
	 
	 <div class="borda"><img src="Artigos/hoodies/kha.png" alt>
		 <button class="butao"><a>Hoodie - Mecha Kha'Zix <br> 19,99€</a></button></div>
	 
	 <!--checkpoint-->
	 
	 	 <div class="borda"><img src="Artigos/hoodies/khapre.png" alt>
		 <button class="butao"><a>Hoodie - Kha'Zix "Dunk" <br> 19,99€</a></button></div>
	 
	 		<div class="borda"><img src="Artigos/hoodies/orianna.png" alt>
	 <button class="butao"><a>Hoodie - Orianna <br> 19,99€</a></button></div>

	<div class="borda"><img src="Artigos/Sweats/dp.png" alt>
	 <button class="butao"><a>Sweatshirt - Deadpool <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/TW.png" alt>
		 <button class="butao"><a>Sweatshirt - Teen Wolf <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/192.png" alt>
	<button class="butao"><a>Sweatshirt - Blink 182 <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/Sweats/LP.png" alt>
	<button class="butao"><a>Sweatshirt - Linkin Park <br> 19,99€</a></button></div></a>
			
			<div class="borda"><img src="Artigos/Sweats/db.png" alt>
	 <button class="butao"><a>Sweatshirt - Dragon Ball Slashed <br> 19,99€</a></button></div></a>
	 <!--check-->
			
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/atari.png" alt>
		 <button class="butao"><a>Sweatshirt - Neon Atari <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/deadbomb.png" alt>
	<button class="butao"><a>Sweatshirt - Deadpool Bomba <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/Sweats/eat.png" alt>
	<button class="butao"><a>Sweatshirt - Eat Sleep Game <br> 19,99€</a></button></div></a>
			
				 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/pacman.png" alt>
	<button class="butao"><a>Sweatshirt - Pacman Pie <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.html">
<div class="borda"><img src="Artigos/Sweats/pokemon.png" alt>
	<button class="butao"><a>Sweatshirt - Train your pokemon <br> 19,99€</a></button></div></a>
		
			<!-- check -->
						
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/poker.png" alt>
		 <button class="butao"><a>Sweatshirt - Poker galático <br> 19,99€</a></button></div></a>
	 
	 <a href="Prodp.html">
	 <div class="borda"><img src="Artigos/Sweats/Twenty one pilots.png" alt>
	<button class="butao"><a>Sweatshirt - Twenty One Pilots <br> 19,99€</a></button></div></a>

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