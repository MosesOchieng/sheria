<?php

?>

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
        <title>Sign up Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="box">
            <div class="form" method="POST" action="database.php">
                <h2>Sign up</h2>
                <div class="inputBox">
                    <input type="text"name="username" required="required">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>email</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password"name="password" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="#">Forgot password?</a>
                    <a href="log.php">Sign in</a>
                </div>
                <a href="database.php"><input type="submit" value="Sign up"></a>
            </div>
        </div>
    </body>
</html>
<!-- partial -->

</body>
</html>
