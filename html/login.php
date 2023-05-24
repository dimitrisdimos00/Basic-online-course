<?php
if($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM users WHERE loginame = '%s'",
        $_POST["uname"]);

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    var_dump($user);
    exit;
}
?>


<!DOCTYPE html>
<html lang="el,en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <form class="login" method="post">
        <div>
            <label for="uname"><b>Username</b></label>
            <input type="email" id="uname" placeholder="Enter Username" name="uname">
        </div>
        <div>
            <label for="psw"><b>Password</b></label>
            <input type="password" id="psw" placeholder="Enter Password" name="psw">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>