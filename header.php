<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Wash Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="book.php">Book Now</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php
                    if (!isset($_SESSION['user'])) {
                        echo "<li><a href='login.php'>Log In</a></li>";
                    } else {
                        echo "<li><a href='profile.php'>Profile Settings</a></li>";
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                ?>
            </ul>
        </nav>
        <h1>Car Wash Blog</h1>
    </header>
