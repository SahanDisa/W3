<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3</title>
</head>
<body>
    <?php
    echo $result;
    ?>
    <form action="" method="POST">
        <p>
            <label>Username</label>
            <input id="username" value="" name="username" type="text" required="required" /><br>
        </p>
        <p>
            <label>Password</label>
            <input id="password" name="password" type="password" required="required" />
        </p>
        <br />
        <p>
            <button type="submit" name="submit"><span>Login</span></button> <button type="reset"><span>Cancel</span></button>
        </p>
    </form>
</body>
</html>