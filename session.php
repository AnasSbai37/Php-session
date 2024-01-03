<?php
session_start();

if ($_SESSION["autoriser"] != "oui") {
    header("location: login.php");
    exit(); 
}
?>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="style1.css" rel="stylesheet">
</head>
<body bgcolor="#282828" onload="document.formulaire.username.focus()">
<div class="welcome"><font style="color:#C0C0C0">WELCOME</font></div>
<a class="lien" href="logout.php">Sign out</a>
</body>
</html>
