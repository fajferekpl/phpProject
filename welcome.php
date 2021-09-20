<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="design.css">
    <title>Hello World</title>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-text"><?php echo "Hello " . $_SESSION['username'] . "!"; ?></h1>
        <a href="logout.php">Wyloguj</a>
    </div>
</body>
</html>