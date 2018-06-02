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
	
	<div class="bordanov">
		<h1>Sobre Nós</h1>
		<div class="sobre">

	<h3>Projeto iniciado em 2017, Prisma é uma loja online com foco em Jovens e Adultos até aos 30 anos.Somos empenhados em oferecer produtos de qualidade a um bom preço assim como oferecer produtos que não encontrará em outro lado.
			</h3>
			<div class="polaroid">
  <img src="Artigos/T-Shirt TAG PRISMA.png" alt="Tag" style="width:100%">
  <div class="container-img">
    <p>Etiqueta Prisma</p>
  </div>
				
</div>
		<div class="bigseparador"></div>	
			<h1>As coleções e os vossos produtos?</h1>
			
			<h3>A nossa loja é focada na venda de t-shirts, hoodies, sweatshirts, caps, camisolas de manga caveada e jogos de tabuleiro. Cada peça disponivel no website ou foi desenhada pela nossa equipa ou então utilizada seguindo os termos de utilização dos devidos criadores. Todos as peças e coleções lançadas pela marca Prisma é estampada, e inspecionada para garantir a qualidade do produto para que o cliente se sinta satisfeito e assim garantir o apoio dos mesmos. Os itens são produzidos em pequenas quantidades.</h3>
			
						<div class="polaroid">
  <img src="Slider/Musica.png" alt="Tag" style="width:100%">
  <div class="container-img">
    <p>Coleção - "A musica fica-te bem"</p>
  </div>			
</div>
				<div class="bigseparador"></div>	
			<h1>O nosso lema?</h1>
			
			<h3>O nosso lema é ver a nossa marca de diferentes perspetivas.
			Qualidade/preço, publico alvo e satisfação dos clientes.
			E foi desse nosso lema que surgiu o nome e o logótipo da nossa marca.</h3>
			
						<div class="polaroid">
  <img class="logo1" src="Logos/Logo V1.png" alt="Tag">
  <div class="container-img">
    <p>Logo da marca - "Prisma"</p>
  </div>
	</div>
	</div>
				<div class="bigseparador"></div>
 
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
