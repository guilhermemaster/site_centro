﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<p align="center"><img src="../img/carregando_azul.gif" alt="" ></p>
<meta http-equiv="refresh" content="3;url=../home.php">
<?php

$primeiro = $_GET['data'];
$segundo = $_GET['horario'];
$terceiro =  $_GET['descricao'];



include_once "../conexao_pagina/conexao_pagina.php";

$sql = "INSERT INTO Palestras (data, Descricao, horario) 
VALUES ('$primeiro', '$terceiro', '$segundo')";
$sql = mysql_query($sql) or die ("Houve erro na gravação");





?>

</body>
</html>


