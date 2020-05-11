<?php include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login tutorial</title>
</head>
<body>
<form action="login.php" method="post">
    <input type="text" name="login" required/>
    <br/>
    <input type="password" name="password" required/>
    <br/>
    <button type="submit">login</button>
</form>
</body>
</html>