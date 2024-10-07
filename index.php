<?php

require_once __DIR__ . '/functions/functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!--Milestone 3 (BONUS)
    Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata 
    che tramite $_SESSION recupererà la password da mostrare all’utente.-->

    <main class="container">
        <h1 class="fw-bold text-center pt-5">Strong Password Generator</h1>
        <h2 class="fw-bold text-center my-2 text-white">Genera una password sicura </h2>

        <form action="session.php" method="GET">
            <div class="my-3 bg-light insert">
                <label for="password" class="form-label fw-bold">Lunghezza password</label>
                <input type="number" class="form-control w-50 my-4" id="password" name="password"
                    placeholder="Inserire la lunghezza della password">
                <button class="btn btn-primary my-5">Genera</button>
            </div>
        </form>
    </main>
    <?php
    session_start();
    $_SESSION['password'] = getRandomPassword($_GET['password']);

    ?>
</body>

</html>