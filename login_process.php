<?php
session_start();
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the statement to get the user
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $login_successful = false;

        // Special case: First-time login for admin with the default plaintext password
        if ($user['is_admin'] && $user['password'] === '12345678' && $password === '12345678') {
            $login_successful = true;

            // Automatically hash the password and update the database for future logins
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $update_stmt = $conn->prepare("UPDATE usuarios SET password = ? WHERE id = ?");
            $update_stmt->bind_param("si", $hashed_password, $user['id']);
            $update_stmt->execute();
        }
        // Standard case: Check hashed password for all other users and subsequent admin logins
        elseif (password_verify($password, $user['password'])) {
            $login_successful = true;
        }

        // If login was successful, set session and redirect
        if ($login_successful) {
            $_SESSION['userid'] = $user['id'];
            $_SESSION['is_admin'] = $user['is_admin'];

            if ($user['is_admin']) {
                header("Location: admin/index.php");
            } else {
                header("Location: index.php");
            }
            exit(); // Important to prevent further script execution
        }
    }

    // If we reach here, it means the login failed
    echo "Email o contraseña no válidos.";
}
?>