<?php
    require 'database.php';

    $message = '';

    if (!empty($_POST['email']) and !empty($_POST['password'] )) {
        $sql = "INSERT INTO users (email, password) VALUE (:email, :password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email',$_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password',$password);

        if ($stmt->execute()) {
            $message ='Successfully created new user';
        } else{
            $message ='Sorry there must have been an inssue creating your acount';

        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SingUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <?php require 'partials/header.php'?>

    <?php if(!empty($message)):  ?>
        <p> <?= $message  ?></p>
    <?php endif;  ?>
    

    <h1>SinUp</h1>
    <span> or <a href="login.php">Login</a></span>
    <form action="signup.php" method="post">
        <input type="email" name="email" placeholder="Enter your email">
        <input type="password" name="password" placeholder="Enter your password">
        <input type="password" name="confirm_password" placeholder="Confirm  your password">
        <input type="submit" value="Send">

    </form>


</body>
</html>