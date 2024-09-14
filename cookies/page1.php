<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <?php 
    $user = $_POST['usertxt'];
    $pass = $_POST['passtxt'];
    echo "$user";
    echo "$pass";
    $ckname = "name";
    $cknamevalue=$user;
    setcookie($ckname,$cknamevalue);
    $ckpass="password";
    $ckpassvalue=$pass;
    setcookie($ckpass,$ckpassvalue)
    ?>
    <form action="page2.php" method="post">
        <button type="submit">submit</button>
    </form>
</center>
</body>
</html>