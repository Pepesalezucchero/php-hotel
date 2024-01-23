<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>PHP Hotels</title>
  </head>
    </head>

    <body>

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

            //intero array
            var_dump($hotels);
            echo "<br>";

            //scritte singole
            foreach ($hotels as $hotel) {
                if ($hotel['parking'] === true) {
                    $parkingInfo = 'Parcheggio disponibile';
                } else {
                    $parkingInfo = 'Nessun parcheggio';
                }

                echo "<br>";

                echo "<h3>" 
                    . $hotel['name'] . " - " 
                    . $hotel['description'] . " , " 
                    . $parkingInfo . " , " 
                    . "Voto: " . $hotel['vote'] . " , " 
                    . "Distanza dal centro: " . $hotel['distance_to_center'] . "Km"
                . "</h3>";
            };

            echo "<br>";
        ?>

        <!-- tabella -->
        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">parking</th>
            <th scope="col">2</th>
            <th scope="col">distance to center</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach ($hotels as $key => $hotel) {
                    if ($hotel['parking'] === true) {
                        $parkingInfo = 'Parcheggio disponibile';
                    } else {
                        $parkingInfo = 'Nessun parcheggio';
                    }
                    echo "<tr>";
                    echo '<th scope="row">'. ($key + 1) . "</th>";
                    echo "<td>". $hotel['name'] . "</td>";
                    echo "<td>". $hotel['description'] . "</td>";
                    echo "<td>". $parkingInfo . "</td>";
                    echo "<td>". $hotel['vote'] . "</td>";
                    echo "<td>". $hotel['distance_to_center'] . "</td>";
                    echo "</tr>";
                }

                //var_dump($key);
            ?>

        </tbody>
        </table>

    </body>
</html>