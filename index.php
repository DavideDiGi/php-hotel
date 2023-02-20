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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-Hotel</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="text-bg-dark">

    <div class="container mt-5">

        <table class="table table-bordered text-white">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Valutazione</th>
                    <th scope="col">Parcheggio disponibile</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-start fst-italic fw-normal" scope="row"><?php echo "<div>1 - " . $hotels[0]['name'] . "</div>"; ?></th>
                    <td class="text-start"><?php echo "<div>" . $hotels[0]['description'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[0]['vote'] . " stelle</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[0]['parking'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[0]['distance_to_center'] . " km</div>"; ?></td>
                </tr>
                <tr>
                    <th class="text-start fst-italic fw-normal" scope="row"><?php echo "<div>2 - " . $hotels[1]['name'] . "</div>"; ?></th>
                    <td class="text-start"><?php echo "<div>" . $hotels[1]['description'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[1]['vote'] . " stelle</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[1]['parking'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[1]['distance_to_center'] . " km</div>"; ?></td>
                </tr>
                <tr>
                    <th class="text-start fst-italic fw-normal" scope="row"><?php echo "<div>3 - " . $hotels[2]['name'] . "</div>"; ?></th>
                    <td class="text-start"><?php echo "<div>" . $hotels[2]['description'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[2]['vote'] . " stelle</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[2]['parking'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[2]['distance_to_center'] . " km</div>"; ?></td>
                </tr>
                <tr>
                    <th class="text-start fst-italic fw-normal" scope="row"><?php echo "<div>4 - " . $hotels[3]['name'] . "</div>"; ?></th>
                    <td class="text-start"><?php echo "<div>" . $hotels[3]['description'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[3]['vote'] . " stelle</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[3]['parking'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[3]['distance_to_center'] . " km</div>"; ?></td>
                </tr>
                <tr>
                    <th class="text-start fst-italic fw-normal" scope="row"><?php echo "<div>5 - " . $hotels[4]['name'] . "</div>"; ?></th>
                    <td class="text-start"><?php echo "<div>" . $hotels[4]['description'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[4]['vote'] . " stelle</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[4]['parking'] . "</div>"; ?></td>
                    <td><?php echo "<div>" . $hotels[4]['distance_to_center'] . " km</div>"; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>