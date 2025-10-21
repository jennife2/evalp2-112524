<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Clasificación de Triángulos</title>
<style>
body { font-family:Arial; background:linear-gradient(135deg,#667eea,#764ba2); color:#333; padding:40px; }
.container { background:white; border-radius:15px; padding:30px; box-shadow:0 10px 25px rgba(0,0,0,0.3); width:600px; margin:auto; }
.result { margin-top:15px; padding:20px; border-radius:10px; }
.error { background:#f8d7da; border:3px solid #dc3545; color:#721c24; }
</style>
</head>
<body>
<div class="container">
<h1>🔺 Clasificación de Triángulos</h1>
<form method="POST">
<input type="number" name="a" placeholder="Lado 1" required>
<input type="number" name="b" placeholder="Lado 2" required>
<input type="number" name="c" placeholder="Lado 3" required>
<button name="ver">Clasificar</button>
</form>
<?php
if(isset($_POST["ver"])){
$a=$_POST["a"]; $b=$_POST["b"]; $c=$_POST["c"];
if($a<=0||$b<=0||$c<=0) echo "<div class='result error'>❌ Los lados deben ser positivos.</div>";
elseif($a+$b<=$c||$a+$c<=$b||$b+$c<=$a) echo "<div class='result error'>⚠️ No cumple desigualdad triangular.</div>";
}
?>
</div>
</body>
</html>
