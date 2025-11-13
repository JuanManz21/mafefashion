<!DOCTYPE html>
<html>
<head>
  <title>Login - Mafe Fashion</title>
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
    <h2>Login</h2>
    <form action="login_process.php" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Login</button>
    </form>
    <div class="form-footer">
        <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
    </div>
  </main>
  <?php include 'includes/footer.php'; ?>
</body>
</html>