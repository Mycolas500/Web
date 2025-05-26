<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">

        <div class="image-box"></div>

        <div class="form-box">
            <h2>LOGIN</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <form action="login.php" method="post">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" name="uname" placeholder="Enter Username">
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Password">
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
