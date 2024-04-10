<?php
session_start();


if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    // Set correct username and password
    $correct_username = 'myusername';
    $correct_password = 'mypassword';
    // Check if entered username and password are correct
    if($username == $correct_username && $password == $correct_password) {
        // Set session variable to mark user as logged in
        $_SESSION['loggedin'] = true;
        // Redirect user to welcome page
        header('Location: welcome.php');
        exit;
    } else {
        // Decrement login attempts
        if(isset($_SESSION['attempts'])) {
            $_SESSION['attempts']--;
        } else {
            $_SESSION['attempts'] = 3;
        }
        // Display error message if maximum login attempts exceeded
        if($_SESSION['attempts'] <= 0) {
            echo "Maximum login attempts exceeded. Please try again later.";
        } else {
            // Display error message
            echo "Invalid username or password. You have ".$_SESSION['attempts']." Attempt(s) left.";
        }
    }
}
?>
<!-- HTML form for user input -->
<form method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" name="submit" value="Log In">
</form>
