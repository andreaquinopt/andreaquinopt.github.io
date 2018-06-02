<?php  //Inicia a Session

session_start();

require('connect.php');

//3. Se o formulário é submetido ou não.
//3.1 Se o formulário for submetido

if (isset($_POST['username']) and isset($_POST['password'])){

    //3.1.1 Atribui os valores ás variáveis.
    
$username = $_POST['username'];
$password = md5 ($_POST['password']);
    
//3.1.2 Verificar se os valores existem na base de dados.

$query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

$count = mysqli_num_rows($result);

//3.1.2 Se os valores forem iguais, então a sessão é criada para este utilizador.

if ($count == 1){ 
				$smsg = "Login realizado com sucesso.<br> Será redirecionado para a pagina inicial em 5 segundos.";
				echo $smsg;
                $_SESSION['user'] = $username;
				header( "refresh:5;url=index.php" );
                }
else{
    
    //3.1.3 Se os valores não coincidirem, aparece uma mensagem de erro.
    
    $fmsg = "Login inválido.";
    }
}
//3.1.4 Se o utilizador existir aparece uma mensagem de sucesso
if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
}else{
	
?>
<html>
<head>
	<title>Login</title>
	<link rel="apple-touch-icon" sizes="180x180" href="favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="favicon.ico">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="loginstyle.css"
	</head>
<body>

<div class="container">
      <form class="form-signin" method="POST">
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
        <div class="imgcontainer">
	  <a href="Index.php">
    <img src="Logos/Logo V1.png" alt="Avatar" class="avatar">
	  </a>
	    </div>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Username</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	</div>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button type="submit">Login</button>
        <a href="register.php" class="butao">Registar</a>
      </form>
</div>

</body>

</html>
<?php } ?>