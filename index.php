<?php

function getRandomPassword($length)
{
    //tutti i caratteri che possono formare una password
    $characters = [
        'abcdefghijklmnopqrstuvwxyz',
        'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
        '123456789',
        '%&@?!'
    ];

    //Creo una stringa vuota che comporrà la password 
    $password = '';

    //Ciclo for che itera su tutti i $characters per il numero di volte inserito nell'input
    for ($i = 0; $i < $_GET['password']; $i++) {

        //Itero randomicamente su uno dei 4 elementi presenti sull'array $characters
        $randomElement = rand(0, 3);

        //Calcolo la lunghezza di ognuno dei 4 elementi
        $elementLength = strlen($characters[$randomElement]) - 1;

        //Per creare la password selezione l'array characters[elemento[numero random tra 0 e l'index dell'ultimo carattere]]
        $password = $characters[$randomElement[rand(0, $elementLength)]];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>/

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
                <input type="number" class="form-control w-50" id="password" name="password"
                    placeholder="Inserire la lunghezza della password">
            </div>
            <button class="btn btn-primary">Genera</button>
        </form>


        <div class="result my-4">
            <h3> <?= getRandomPassword($_GET['password']) ?> </h3>
        </div>

    </main>


</body>

</html>