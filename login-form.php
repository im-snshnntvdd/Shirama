 <?php 
    include '../admin/login.class.php';

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log-in</title>
    <link rel="stylesheet" href="login-form.css">
</head>

<body>
    <div class="banner">
    <div class="login-box">
        <h1>Login</h1><br>
        <form action="login.class.php" method="post">
            <input type="uname" name ="username" value = "uname" placeholder="Enter Username">
            <br><br>
            <input type="password" name ="password" value="password" placeholder="Enter Password">
            <br><br>
            <button class="btn">Submit</button>
        </form>
     
    </div>
</div>
</body>

</html>