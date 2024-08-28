<?php
session_start();

if (!isset($_SESSION['Admin_id'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <div class="header">
        <h1>Hello Kanishk</h1>
        <form method="post">
            <button name="Admin_logout">Log out</button>
        </form>
    </div>

    <?php
    if (isset($_POST['Admin_logout'])) {
        session_destroy();
        header("Location: admin_login.php");
        exit();
    }
    ?> 
</body>
</html>
