<?php

# Creo il mio array
$matchs = [
    [
        "team_home" => "Olimpia Milano",
        "team_away" => "Virtus Bologna",
        "points_home" => 62,
        "points_away" => 45
    ],
    [
        "team_home" => "Sassari BdS",
        "team_away" => "Trento",
        "points_home" => 44,
        "points_away" => 76
    ],
    [
        "team_home" => "Napoli",
        "team_away" => "Messina",
        "points_home" => 93,
        "points_away" => 92
    ],
    [
        "team_home" => "Cosenza",
        "team_away" => "Bolzano",
        "points_home" => 65,
        "points_away" => 66
    ],
];

#Ciclo ogni elemento dell'array
foreach ($matchs as $match) {
    echo $match["team_home"] . " vs " . $match["team_away"] . ": " . $match["points_home"] . " - " . $match["points_away"] . "<br>";
}


?>