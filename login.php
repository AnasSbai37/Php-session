<?php
session_start();

@$uname = $_POST["username"];
@$pass = $_POST["pass"];
@$valider = $_POST["authentification"];
$bonuname = "anas";
$bonpass = "rayger1";
$erreur = "";

if (isset($valider)) {
    if ($uname == $bonuname && $pass == $bonpass) {
        $_SESSION["autoriser"] = "oui";
        header("location: session.php");
        exit(); 
    } else {
        $erreur = "Mauvais username ou Mot de passe!";
    }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="style.css" rel="stylesheet">
</head>
<body bgcolor="#282828" onLoad="document.formulaire.username.focus()">
<div class="erreur"><font style="color:white; font-size:12pt;"><?php echo $erreur ?></font></div>
<div class="formu">
    <p class="text"><font style="color:#C0C0C0; font-size:21pt;">AUTHENTIFICATION</font></p>
    <form name="formulaire" action="" method="post">
        <label for="username"><font style="color:white; font-size:12pt;">USERNAME</font></label>
        <input type="text" class="us" name="username" value="" placeholder="Login" id="username"><br><br>
        <label for="password"><font style="color:white; font-size:12pt;">PASSWORD</font></label>
        <input type="password" class="pa" name="pass" value="" placeholder="Password" id="password"><br><br>
        <input type="submit" class="aut" name="authentification" value="S'authentifier">
    </form>
</div>
</body>
</html>
