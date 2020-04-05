<?php

$data = array(
    array(
        "id" => "1",
        "name" => "Venue I",
        "capacity" => "120",
        "eventtype" => "any",
        "rating" => "2.5"
    ),
    array(
        "id" => "2",
        "name" => "Venue II",
        "capacity" => "130",
        "eventtype" => "any",
        "rating" => "2.5"
    ),
    array(
        "id" => "3",
        "name" => "Venue III",
        "capacity" => "140",
        "eventtype" => "any",
        "rating" => "2.5"
    ),
    array(
        "id" => "4",
        "name" => "Venue IV",
        "capacity" => "150",
        "eventtype" => "any",
        "rating" => "2.5"
    ),
    array(
        "id" => "5",
        "name" => "Venue V",
        "capacity" => "120",
        "eventtype" => "any",
        "rating" => "2.5"
    )
);

echo json_encode($data);

?>