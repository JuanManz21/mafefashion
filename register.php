<!DOCTYPE html>
<html>
<head>
  <title>Registro - Mafe Fashion</title>
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
    <h2>Registro</h2>
    <form action="register_process.php" method="post">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
      <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
  </main>
</body>
</html>