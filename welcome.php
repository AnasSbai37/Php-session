<?php
session_start();

if (!isset($_SESSION["autoriser"]) || $_SESSION["autoriser"] !== "oui") {
    header("location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="style1.css" rel="stylesheet">
</head>
<body bgcolor="#282828">
    <div class="welcome"><font style="color:#C0C0C0">WELCOME</font></div>
    <a class="lien" href="logout.php">Sign out</a>
</body>
</html>
