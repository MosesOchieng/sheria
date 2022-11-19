<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <form method="POST" action="database.php">
        <div class="box">
            <div class="form">
                <h2>Login</h2>
                <div class="inputBox">
                    <input type="text" name="username" required="required">
                    <span>Username</span>
                    <i></i>
                </div>
          
                <div class="inputBox">
                    <input type="" name="email" required="required">
                    <span>Email</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">Forgot password?</a>
                    <a href="sign.php">Sign up</a>
                </div>
                <a href="database.php"><input type="submit" value="Login"></a>
            </div>
        </div>
      </form>
    </body>
</html>
<!-- partial -->

</body>
</html>
