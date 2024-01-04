<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
        // Add validation and sanitation as needed
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check user credentials against the database (replace this with actual database connection and query)
        $validUser = true; // Replace this with actual validation logic

        if ($validUser) {
            $_SESSION['user'] = $username;
            header('Location: index.php');
        } else {
            $loginMessage = "Invalid username or password.";
        }
    }
?>
