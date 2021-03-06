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
<title>Prisma - Camisola Harry Potter</title>
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
					 w	
					<a href="jogos.php">Jogos</a>
	  				<a href="packs.php">Packs</a>
	 				<input type="text" name="search" placeholder="Pesquisar..." class="pesquisa" />
		 						
	  </div>
			<div class="bigseparador"></div>
	</header>
	<?php 
	    if (isset($_POST['quantidade']) && isset($_POST['tamanho']) && isset($_POST['morada']) && isset($_POST['codigopostal'])){
        $tamanho = $_POST['tamanho'];
	    $quantidade = $_POST['quantidade']; 
		$morada=$_POST['morada'];
		$codigopostal=$_POST['codigopostal'];
	
	        $query = "INSERT INTO `encomendas` (tamanho, quantidade, morada, codigopostal) VALUES ('$tamanho', '$quantidade','$morada','$codigopostal')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Encomenda realizada com sucesso.";
			echo  "<p style='text-align:center;'>$smsg </p>";
			header( "refresh:5;url=prodp.php" );
        }else{
            $fmsg ="Falha na encomenda";
			echo $fmsg;
        }
		}
	?>

<body>

<div class="column-layout">

  <div class="descricao-dir">
    <h1>T-Shirt Harry Potter</h1>
	  <h8>SKU: 3700334712736</h8><br>
		<h7>19.90€</h7><br>
	  <h8>IVA incluido</h8><br>
<fieldset>
<form action="prodp.php" method="post">
	<legend>Tamanho:</legend>
	<select name="tamanho" id="Tamanho" name="Tamanho">
	<option value="nulo">Selecione o seu tamanho...</option>
    <option value="S">S- 19,90€</option>
    <option value="M">M- 19,90€</option>
    <option value="L">L- 19,90€</option>
	<option value="XL">XL- 19,90€</option>
    <option value="XXL">XXL- 19,90€</option>
  </select>
	<legend>Morada:</legend>
	<input type="text" name="morada" class="morada" maxlength="50" placeholder="Morada - (País ,Distrito, Freguesia, Rua, Porta)">
	<input type="text" name="codigopostal" class="codigopostal" maxlength="8" placeholder="Código-Postal (1234-123)">
</fieldset>
	  <fieldset><input name="quantidade" class="qnt" value="1" type="number"><button class="comprar" type="submit">Comprar</button></fieldset></form>
	  <h3>Descrição:</h3>
	  <p>- Oficialmente Licenciada;<br>- Alta Qualidade;</p>
	  
  </div>

  <img class="imagem" src="Artigos/T-Shirts PNG/Tshirt hp nobg.png">
</div>


</body>
	<footer class="footer">
		
		



			<div class="container-footer">

				<nav class="footer-texto">
					<ul>
													<li class="menu-home"><a href="Index.html" >Home</a></li>
													<li class="menu-sobre-nos"><a href="#" >Sobre nós</a></li>
													<li class="menu-promocoes"><a href="#" >Promoções</a></li>
													<li class="menu-novidades"><a href="#" >Novidades</a></li>
													<li class="menu-contactos"><a href="#" >Contactos</a></li>
						
											</ul>
				</nav>

				<div class="copyright">
					&copy; Prisma.pt 2018. Todos os produtos com IVA incluído.
				</div>	
	</div>
				
			
		</footer>
</html>
