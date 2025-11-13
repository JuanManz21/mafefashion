<!DOCTYPE html>
<html>
<head>
    <title>Generador de Hash de Contraseña</title>
</head>
<body>
    <h2>Generador de Hash de Contraseña</h2>
    <form method="post">
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Generar Hash</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);
        echo "<h3>Hash Generado:</h3>";
        echo "<p>" . htmlspecialchars($hash) . "</p>";
    }
    ?>
</body>
</html>