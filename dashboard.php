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
.box { background:white; padding:30px; border-radius:10px; width:600px; margin:auto; text-align:center; box-shadow:0 10px 25px rgba(0,0,0,0.2); }
h1 { color:#0083b0; }
a {
  display:block;
  background:#00b4db;
  color:white;
  text-decoration:none;
  padding:12px;
  margin:10px 0;
  border-radius:8px;
  font-weight:bold;
}
a:hover { background:#007a91; }
</style>
</head>
<body>
<div class="box">
  <h1>Bienvenido, <?php echo $_SESSION["user"]; ?> 👋</h1>
  <p>Selecciona un ejercicio para ver:</p>

  <a href="calculadora.php">🧮 Ejercicio 2: Calculadora de Área y Volumen</a>
  <a href="triangulos.php">🔺 Ejercicio 3: Clasificación de Triángulos</a>
  <a href="logout.php">🚪 Cerrar Sesión</a>
</div>
</body>
</html>
