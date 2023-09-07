<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container py-5">
        <select class="form-select" aria-label="Default select example">
            <option value="0">Cerca tutti gli Hotel</option>
            <option value="1">Cerca Hotel con Parcheggio</option>
            <option value="2">Cerca Hotel senza Parcheggio</option>
        </select>
    </div>
    <?php
    foreach ($hotels as $hotel) {

    ?>
        <div class="container">

            <ul class="list-group py-3">
                <li class="list-group-item d-flex gap-3 align-items-center">
                    <h4>Nome Hotel: </h4><?php echo $hotel['name'] ?>
                </li>
                <li class="list-group-item d-flex gap-3 align-items-center">
                    <h4>Descrizione: </h4><?php echo $hotel['description'] ?>
                </li>
                <li class="list-group-item d-flex gap-3 align-items-center">
                    <h4>Parcheggio in hotel: </h4><?php echo $hotel['parking'] ? 'Si' : 'No' ?>
                </li>
                <li class="list-group-item d-flex gap-3 align-items-center">
                    <h4>Voto Hotel: </h4><?php echo $hotel['vote'] . " / 5" ?><i class="fa-solid fa-star color-star"></i>
                </li>
                <li class="list-group-item d-flex gap-3 align-items-center">
                    <h4>Distanza dal centro città: </h4><?php echo $hotel['distance_to_center'] . " km" ?>
                </li>
            </ul>
        </div>
    <?php
    }
    ?>
</body>

</html>