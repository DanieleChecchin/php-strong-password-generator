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
    <!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza)
 sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole,
 numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che
 includeremo poi nella pagina principale. -->

    <main class="container">
        <h1 class="fw-bold text-center pt-5">Strong Password Generator</h1>
        <h2 class="fw-bold text-center my-2 text-white">Genera una password sicura </h2>

        <div class="result my-4">
            <h3>Password: <?= getRandomPassword($_GET['password']) ?> </h3>
        </div>

        <form action="index.php" method="GET">
            <div class="my-3 bg-light insert">
                <label for="password" class="form-label fw-bold">Lunghezza password</label>
                <input type="number" class="form-control w-50 my-4" id="password" name="password"
                    placeholder="Inserire la lunghezza della password">
                <button class="btn btn-primary my-5">Genera</button>
            </div>

        </form>

    </main>


</body>

</html>