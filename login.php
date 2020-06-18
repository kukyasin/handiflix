<?php
if(isset($_POST["submitButton"])){
    echo "Form was submitted.";
}
?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Welcome to Handiflix</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css"/>
<body>
<div class="signInContainer">
    <div class="column">
        <div class="header">
            <img src="assets/images/logo.png" title="Logo" alt="Site logo"/>
            <h3>Sign In</h3>
            <span>to continue to Handiflix</span>
        </div>


        <form method="POST">
            <label>

                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="submitButton" value="SUBMIT">
            </label>
        </form>

        <a href="register.php" class="singInMessage">Need an account? Sign up here!</a>

    </div>
</div>
</body>
</html>