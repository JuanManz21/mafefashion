<?php
session_start();
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['userid'] = $row['id'];
            $_SESSION['is_admin'] = $row['is_admin'];
            if ($row['is_admin']) {
                header("Location: admin/index.php");
            } else {
                header("Location: index.php");
            }
        } else {
            echo "Email o contraseña no válidos.";
        }
    } else {
        echo "Email o contraseña no válidos.";
    }
}
?>