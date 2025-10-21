<?php
session_start();
$usuario = "itca";
$clave = "feP@de2025";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["user"] == $usuario && $_POST["pass"] == $clave) {
        $_SESSION["user"] = $usuario;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Credenciales incorrectas.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body {
  background: linear-gradient(120deg, #00b4db, #0083b0);
  font-family: Arial;
  display: flex; justify-content: center; align-items: center;
  height: 100vh; margin: 0;
}
.login {
  background: white; padding: 40px; border-radius: 15px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.3); width: 350px;
}
h2 { text-align:center; color:#333; }
input,button { width:100%; padding:10px; margin:10px 0; border-radius:8px; }
button { background:#0083b0; color:white; border:none; cursor:pointer; }
button:hover { background:#006f7f; }
.error { color:red; text-align:center; }
img { width:100%; border-radius:10px; margin-top:15px; }
</style>
</head>
<body>
<div class="login">
  <h2>Inicio de Sesión</h2>
  <form method="POST">
    <input type="text" name="user" placeholder="Usuario" required>
    <input type="password" name="pass" placeholder="Contraseña" required>
    <button type="submit">Ingresar</button>
  </form>
  <?php if($error) echo "<p class='error'>$error</p>"; ?>
  
  <!-- Imagen ilustrativa desde URL -->
  <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.mundoprimaria.com%2Frecursos-matematicas%2Ftriangulos&psig=AOvVaw2FopJ6cNRu1OllkhV58XX1&ust=1761153885247000&source=images&cd=vfe&opi=89978449&ved=0CBUQjRxqFwoTCIDohtHntZADFQAAAAAdAAAAABAE" alt="Ilustración de login">
</div>
</body>
</html>
