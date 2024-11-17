<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <a id="backhome" href="home.php" target="_blank">Back To HOME</a>

    <div class="sign_up">
        <form action="signup_handler.php" method="post">        
            <h1>SIGN UP</h1><br><br>

            <label for="username">Username: </label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="email">Email: </label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password: </label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">I agree to the Terms and Conditions</label><br><br>

            <input type="submit" class="button" name="signUp" value="Sign Up">
            <br><br>

            <a href="conditions.php" target="_blank">Read Terms and Conditions</a>
        </form>
    </div>
</body>
</html>
