<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <form action="Loginpro.php" method="post">
            <h2>Sign in</h2>
            <?php if(isset($_GET['error'])){?>
          <p class="error"><?php echo  $_GET['error'];?></p>
          <?php } ?>
            <div class="inputbox">
                <input type="text" name="username" required >
                <span>Username</span>
                <i> </i>
            </div>
            <div class="inputbox">
                <input type="password" name="password" required>
                <span>Password</span>
                <i> </i>
            </div>
            <div class="links">
                <a href="#">Forgot Password</a>
                <a href="#">Sign Up</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>