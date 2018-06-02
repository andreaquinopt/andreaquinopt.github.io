<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("A ligação à base de dados falhou" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'prisma');
if (!$select_db){
    die("Base de dados errada" . mysqli_error($connection));
}
?>