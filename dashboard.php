<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<style>
body { background:#f0f4f8; font-family:Arial; padding:40px; }
.box { background:white; padding:30px; border-radius:10px; width:600px; margin:auto; }
h1 { text-align:center; color:#0083b0; }
a { background:#00b4db; color:white; text-decoration:none; padding:10px 20px; border-radius:8px; }
</style>
</head>
<body>
<div class="box">
  <h1>Bienvenido, <?php echo $_SESSION["user"]; ?> 👋</h1>
  <p>Acceso correcto al sistema.</p>
  <a href="logout.php">Cerrar sesión</a>
</div>
</body>
</html>
