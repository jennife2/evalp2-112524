<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Clasificación de Triángulos</title>
<style>
body { 
  font-family: Arial; 
  background: linear-gradient(135deg,#667eea,#764ba2); 
  color: #333; 
  padding: 40px; 
}
.container { 
  background: white; 
  border-radius: 15px; 
  padding: 30px; 
  box-shadow: 0 10px 25px rgba(0,0,0,0.3); 
  width: 600px; 
  margin: auto; 
}
input { 
  display: block; 
  width: 100%; 
  padding: 10px; 
  margin: 10px 0; 
  border: 2px solid #ccc; 
  border-radius: 8px; 
  box-sizing: border-box;
}
button { 
  width: 100%; 
  padding: 10px; 
  background: #667eea; 
  border: none; 
  color: white; 
  border-radius: 8px; 
  font-weight: bold; 
  cursor: pointer;
}
button:hover { background: #5568d3; }
.result { 
  margin-top: 15px; 
  padding: 20px; 
  border-radius: 10px; 
  text-align: center; 
}
.error { 
  background: #f8d7da; 
  border: 3px solid #dc3545; 
  color: #721c24; 
}
</style>
</head>
<body>
<div class="container">
  <h1>🔺 Clasificación de Triángulos</h1>
  <form method="POST">
    <input type="number" name="a" placeholder="Lado 1" step="0.01" required>
    <input type="number" name="b" placeholder="Lado 2" step="0.01" required>
    <input type="number" name="c" placeholder="Lado 3" step="0.01" required>
    <button name="ver">Clasificar</button>
  </form>

  <?php
  if(isset($_POST["ver"])) {
      $a = $_POST["a"]; 
      $b = $_POST["b"]; 
      $c = $_POST["c"];

      if($a <= 0 || $b <= 0 || $c <= 0) {
          echo "<div class='result error'>❌ Los lados deben ser positivos.</div>";
      }
      elseif($a + $b <= $c || $a + $c <= $b || $b + $c <= $a) {
          echo "<div class='result error'>⚠️ No cumple desigualdad triangular.</div>";
      }
      else {
          if($a == $b && $b == $c) {
              echo "<div class='result' style='background:#d4edda;border:3px solid #28a745;color:#155724;'>
                      ▲ Triángulo Equilátero
                    </div>";
          }
          elseif($a == $b || $b == $c || $a == $c) {
              echo "<div class='result' style='background:#d1ecf1;border:3px solid #17a2b8;color:#0c5460;'>
                      ▲ Triángulo Isósceles
                    </div>";
          }
          else {
              echo "<div class='result' style='background:#fff3cd;border:3px solid #ffc107;color:#856404;'>
                      ▲ Triángulo Escaleno
                    </div>";
          }
      }
  }
  ?>
</div>
</body>
</html>
