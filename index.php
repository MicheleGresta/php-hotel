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
        <form method="GET" class="d-flex align-items-center">

            <select class="form-select" aria-label="Default select example" name="parking-area">
                <option value="null">Cerca tutti gli Hotel</option>
                <option value="1">Cerca Hotel con Parcheggio</option>
                <option value="0">Cerca Hotel senza Parcheggio</option>
            </select>

            <select class="form-select" aria-label="Default select example" name="ranking-area">
                <option value="null">Cerca tutti gli Hotel</option>
                <option value="1">Cerca Hotel con Minimo 1 Stella</option>
                <option value="2">Cerca Hotel con Minimo 2 Stelle</option>
                <option value="3">Cerca Hotel con Minimo 3 Stelle</option>
                <option value="4">Cerca Hotel con Minimo 4 Stelle</option>
                <option value="5">Cerca Hotel con 5 Stelle</option>
            </select>

            <div class="">
                <button type="submit" class="btn btn-primary">Cerca</button>
            </div>
        </form>
    </div>
    <?php
    foreach ($hotels as $hotel) {
        if (
            !$_GET
            || $hotel['parking'] == $_GET['parking-area'] && $hotel['vote'] >= $_GET['ranking-area']
            || $hotel['parking'] == $_GET['parking-area'] && $_GET['ranking-area'] == 'null'
            || $_GET['parking-area'] == 'null' && $hotel['vote'] >= $_GET['ranking-area']
            || $_GET['parking-area'] == 'null' && $_GET['ranking-area'] == 'null'
        ) {

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
    }
    ?>
</body>

</html>