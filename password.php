<?php
session_start();
$password = $_SESSION['password'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>
        la tua password di <?php echo strlen($password); ?> caratteri è:
    </h1>
    <pre>
        Password: <?php echo $password; ?>
    </pre>

    <nav><button><a href="./index.php">Torna alla pagina principale</a></button></nav>
</body>

</html>