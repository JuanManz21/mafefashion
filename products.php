<?php include 'includes/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Productos - Mafe Fashion</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <header>
    <h1>Mafe Fashion</h1>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="products.php">Productos</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Registro</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Nuestros Productos</h2>
    <div class="products">
      <?php
        $sql = "SELECT * FROM productos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            echo "<h3>" . $row['nombre'] . "</h3>";
            echo "<img src='images/" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
            echo "<p>" . $row['descripcion'] . "</p>";
            echo "<p>Precio: $" . $row['precio'] . "</p>";
            echo "</div>";
          }
        } else {
          echo "No hay productos disponibles.";
        }
      ?>
    </div>
  </main>
</body>
</html>