<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>

<body>
    <main class="container">
        <h1 class="fw-bold text-center"> <?= $_SESSION['password']; ?> </h1>
    </main>
</body>

</html>