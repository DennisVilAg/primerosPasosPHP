<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Iniciailizar una nueva sesión de curl; ch = curl handle
$ch = curl_init(API_URL);
# Queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desactiva verificación SSL (solo para pruebas)
# Ejecutamos la petición y guardamos el resultado
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);

?>

<head>
    <meta charset="UTF-8"/>
    <title>La próxima pelicula de Marvel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>

<main> 
<h2 style="text-align: center;">Próxima pelicula de Marvel</h2>
    <section>
        
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="Poster de <?=$data["title"]; ?>"
        style="border-radius: 16px;"/>
    </section>

    <hgroup>
        <h3><?=$data["title"]; ?> se estrena en <?= $data["days_until"]; ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?> </p>
    </hgroup>
    
</main>

<style>
    :root{
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }

    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

</style>