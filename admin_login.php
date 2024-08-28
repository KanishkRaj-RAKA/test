 <?php
require("connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link css -->
     <link rel="stylesheet" href="admin_login.css">
    <title>Login Page</title>
 
</head>
<body>

<div class="login-container">
    <img src="https://i.pinimg.com/originals/b5/14/e9/b514e9eb192c7c1c1f9c6eb29e3e2713.jpg" alt="Logo">
    <h2>Login</h2>
    <form  method="post">
        <input type="text" name="User_Id" placeholder="User Id" required>
        <input type="password" name="Admin_password" placeholder="Password" required>
        <input type="submit" name="Admin_login_btn"value="Login">
    </form>
    <p>Don't have an account? <a href="debanjan.html">Sign up</a></p>
</div>

<?php
require("connection.php");
session_start();

if (isset($_POST['Admin_login_btn'])) {
    $user_id = $_POST['User_Id'];
    $password = $_POST['Admin_password'];
    $query = "SELECT * FROM `admin_login` WHERE `Admin_id`='$user_id' AND `Admin_Password`='$password'";

    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['Admin_id'] = $user_id;
        header("Location: dashbord.php");
        exit();
    } else {
        echo "<script>alert('Incorrect password');</script>";
    }
}
?>



</body>
</html> 