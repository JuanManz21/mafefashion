<?php
session_start();
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: ../login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Añadir Producto</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Añadir Nuevo Producto</h1>
    </header>
    <main>
        <form action="add_product_process.php" method="post">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
            <label for="precio">Precio:</label>
            <input type="number" step="0.01" id="precio" name="precio" required>
            <label for="imagen">Nombre del archivo de imagen:</label>
            <input type="text" id="imagen" name="imagen" required>
            <button type="submit">Añadir Producto</button>
        </form>
    </main>
    <?php include '../includes/footer.php'; ?>
</body>
</html>