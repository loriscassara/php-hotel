<!-- php section variables -->
<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distanceToCenter' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distanceToCenter' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distanceToCenter' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distanceToCenter' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distanceToCenter' => 50
        ],
    ];

    //hotel valutation get input from ricerca.php
    $valute = $_GET['vote'] ?? "Nessun voto inserito";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>Php Hotel</title>

	<!-- import bootstrap v5.3 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark text-light">

    <!-- page title -->
    <h1 class="text-center tw-bold pt-3">Hotel Table</h1>
	
	<!-- tables -->
    <table class="table text-center mt-5">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to Center</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if ($valute == 1 || $valute == "") {
                    foreach ($hotels as $hotel){
                        echo "<tr>";
                        echo '<td scope="col">' . $hotel['name'] . "</td>";
                        echo '<td scope="col">' . $hotel['description'] . "</td>";
                        if ($hotel['parking'] == true) {
                            echo '<td scope="col"> &#10004 </td>';
                        } else {
                            echo '<td scope="col"> &#10060; </td>';
                        };
                        echo '<td scope="col">' . $hotel['vote'] . "</td>";
                        echo '<td scope="col">' . $hotel['distanceToCenter'] . " Km</td>";
                        echo "</tr>";
                    }
                } elseif ($valute == 2){
                    echo "<tr>";
                    echo '<td scope="col">' . $hotels[0]['name'] . "</td>";
                    echo '<td scope="col">' . $hotels[0]['description'] . "</td>";
                    if ($hotels[0]['parking'] == true) {
                        echo '<td scope="col"> &#10004 </td>';
                    } else {
                        echo '<td scope="col"> &#10060; </td>';
                    };
                    echo '<td scope="col">' . $hotels[0]['vote'] . "</td>";
                    echo '<td scope="col">' . $hotels[0]['distanceToCenter'] . " Km</td>";
                    echo "</tr>";
                    
                    echo "<tr>";
                    echo '<td scope="col">' . $hotels[1]['name'] . "</td>";
                    echo '<td scope="col">' . $hotels[1]['description'] . "</td>";
                    if ($hotels[1]['parking'] == true) {
                        echo '<td scope="col"> &#10004 </td>';
                    } else {
                        echo '<td scope="col"> &#10060; </td>';
                    };
                    echo '<td scope="col">' . $hotels[1]['vote'] . "</td>";
                    echo '<td scope="col">' . $hotels[1]['distanceToCenter'] . " Km</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo '<td scope="col">' . $hotels[3]['name'] . "</td>";
                    echo '<td scope="col">' . $hotels[3]['description'] . "</td>";
                    if ($hotels[3]['parking'] == true) {
                        echo '<td scope="col"> &#10004 </td>';
                    } else {
                        echo '<td scope="col"> &#10060; </td>';
                    };
                    echo '<td scope="col">' . $hotels[3]['vote'] . "</td>";
                    echo '<td scope="col">' . $hotels[3]['distanceToCenter'] . " Km</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo '<td scope="col">' . $hotels[4]['name'] . "</td>";
                    echo '<td scope="col">' . $hotels[4]['description'] . "</td>";
                    if ($hotels[4]['parking'] == true) {
                        echo '<td scope="col"> &#10004 </td>';
                    } else {
                        echo '<td scope="col"> &#10060; </td>';
                    };
                    echo '<td scope="col">' . $hotels[4]['vote'] . "</td>";
                    echo '<td scope="col">' . $hotels[4]['distanceToCenter'] . " Km</td>";
                    echo "</tr>";
                } elseif ($valute == 3 || $valute == 4) {
                    echo "<tr>";
                    echo '<td scope="col">' . $hotels[0]['name'] . "</td>";
                    echo '<td scope="col">' . $hotels[0]['description'] . "</td>";
                    if ($hotels[0]['parking'] == true) {
                        echo '<td scope="col"> &#10004 </td>';
                    } else {
                        echo '<td scope="col"> &#10060; </td>';
                    };
                    echo '<td scope="col">' . $hotels[0]['vote'] . "</td>";
                    echo '<td scope="col">' . $hotels[0]['distanceToCenter'] . " Km</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo '<td scope="col">' . $hotels[3]['name'] . "</td>";
                    echo '<td scope="col">' . $hotels[3]['description'] . "</td>";
                    if ($hotels[3]['parking'] == true) {
                        echo '<td scope="col"> &#10004 </td>';
                    } else {
                        echo '<td scope="col"> &#10060; </td>';
                    };
                    echo '<td scope="col">' . $hotels[3]['vote'] . "</td>";
                    echo '<td scope="col">' . $hotels[3]['distanceToCenter'] . " Km</td>";
                    echo "</tr>";
                } elseif ($valute == 5){
                    echo "<tr>";
                    echo '<td scope="col">' . $hotels[3]['name'] . "</td>";
                    echo '<td scope="col">' . $hotels[3]['description'] . "</td>";
                    if ($hotels[3]['parking'] == true) {
                        echo '<td scope="col"> &#10004 </td>';
                    } else {
                        echo '<td scope="col"> &#10060; </td>';
                    };
                    echo '<td scope="col">' . $hotels[3]['vote'] . "</td>";
                    echo '<td scope="col">' . $hotels[3]['distanceToCenter'] . " Km</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

    <!-- link per tornare alla pagina di ricerca => ricerca.php -->
    <div class="link-container d-flex justify-content-center pt-3">
        <a href="ricerca.php" class="text-light" style="text-decoration: none;">Torna nella pagina di ricerca</a>
    </div>

	<!-- import bootstrap JS v5.3 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>