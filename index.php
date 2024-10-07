<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/style.css">
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
        <h1 class="fw-bold text-center mt-5">Strong Password Generator</h1>
        <h2 class="fw-bold text-center my-2">Genera una password sicura </h2>

        <form action="index.php" method="GET">
            <div class="my-3">
                <label for="password" class="form-label fw-bold">Lunghezza password</label>
                <input type="password" class="form-control w-25" id="password"
                    placeholder="Inserire la lunghezza della password">
            </div>
        </form>
    </main>


</body>

</html>