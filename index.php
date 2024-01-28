<?php
require_once 'includes/config_session.php';
require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Sign-Up</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Enter Username">
        <input type="password" name="pwd" placeholder="Enter Password">
        <input type="text" name="email" placeholder="Enter E-mail">
        <button>Sign up</button>
    </form>

    <?php
    check_signup_errors();
    ?>
</body>

</html>