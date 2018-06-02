<?php
	require('connect.php');
    // Se houver valores, insere-os na base de dados.

    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	    $email = $_POST['email'];
        $password =md5 ($_POST['password']);
 
        $query = "INSERT INTO `users` (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "Utilizador criado com sucesso.<br> Será redirecionado para a pagina inicial em 5 segundos.";
			echo $smsg;
			session_start();
			$_SESSION['user'] = $username;
			header( "refresh:5;url=index.php" );
        }else{
            $fmsg ="O registo falhou";
			echo $fmsg;
        }
		
    }
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
	<title>Registar</title>
<link rel="stylesheet" href="loginstyle.css">
</head>
  <div class="imgcontainer">
	  <a href="Index.php">
    <img src="Logos/Logo V1.png" alt="Avatar" class="avatar">
	  </a>
	    </div>
        <div class="input-group">
			<form action="register.php" method="post">
	  <span class="input-group-addon" id="basic-addon1">Username</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	
	 <span class="input-group-addon" id="basic-addon1">Email</span>
	  <input type="text" name="email" class="form-control" placeholder="Email" required>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
	
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registar</button>
        <a href="login.php" class="butao">Login</a>
      </form>
</div>

</body>

</html>
