<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <head>
        <title>SIGN IN</title>
        <a id="backhome" href="home.php" target="_blank">Back To Home</a>
    
    </head>
    <body>   
    <form method="post" action="logged_In.php">
        <h1 id="head">SIGN IN</h1>
        <br><br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required><br><br>
        <input type="submit" class="button" name="login_button" value="Login">
        <br>
        <a id="new" href="signup.php">Don't have a account.Click here to create one.</a>
    
    </form>

    </body>
</html>