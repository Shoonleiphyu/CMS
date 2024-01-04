<?php
    session_start();
    include('header.php');
    include('login_process.php');
?>

<section>
    <h2>Log In</h2>
    <?php
        if (isset($loginMessage)) {
            echo "<p>$loginMessage</p>";
        }
    ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Log In</button>
    </form>
</section>

<?php
    include('footer.php');
?>
