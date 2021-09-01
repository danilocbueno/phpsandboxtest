<?php
$messages = [
    'Welcome to PHPSandbox',
    'Добро пожаловать в PHPSandbox',
    'Bienvenue sur PHPSandbox',
    'Bienvenido a PHPSandbox',
];

shuffle($messages);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome to PHPSandbox</title>
    <link rel="icon" href="https://phpsandbox.io/assets/img/brand/phpsandbox.png">
</head>
<body>


    <form method="POST" action="test.php">

        <input type="text" name="test">

        <button type="submit">vai</button>

    </form>

</body>
</html>