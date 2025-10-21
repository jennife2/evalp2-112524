<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Calculadora de Área y Volumen</title>
<style>
body { font-family:Arial; background:linear-gradient(135deg,#84fab0,#8fd3f4); padding:30px; }
.container { background:white; border-radius:15px; padding:30px; width:800px; margin:auto; box-shadow:0 10px 25px rgba(0,0,0,0.2); }
.section { background:#f9f9f9; padding:20px; border-radius:10px; margin-top:20px; }
.result { background:#d4edda; border-left:5px solid #28a745; padding:15px; margin-top:15px; border-radius:8px; }
</style>
</head>
<body>
<div class="container">
<h1>📐 Calculadora de Área y Volumen</h1>

<div class="section">
  <h2>Rectángulo</h2>
  <form method="POST">
    <label>Base:</label><input type="number" name="b" step="0.01" required>
    <label>Altura:</label><input type="number" name="h" step="0.01" required>
    <button name="calc_rect">Calcular</button>
  </form>
  <?php
  if(isset($_POST["calc_rect"])) {
      $b=$_POST["b"]; $h=$_POST["h"];
      if($b>0 && $h>0){
          $a=$b*$h; $p=2*($b+$h);
          echo "<div class='result'>Área: $a<br>Perímetro: $p</div>";
      } else echo "<p style='color:red;'>Valores inválidos</p>";
  }
  ?>
</div>
</div>
</body>
</html>
