<?php
session_start();
// Ensure the user is logged in and is an administrator
if (!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']) {
    header("Location: ../login.php");
    exit();
}

include '../includes/db.php';

// Check if an ID is provided
if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    // Prepare and execute the deletion statement
    $stmt = $conn->prepare("DELETE FROM productos WHERE id = ?");
    $stmt->bind_param("i", $product_id);

    if ($stmt->execute()) {
        // Redirect back to the admin panel with a success message (optional)
        header("Location: index.php");
    } else {
        // Handle error
        echo "Error al eliminar el producto.";
    }

    $stmt->close();
} else {
    // Redirect if no ID is provided
    header("Location: index.php");
}
?>