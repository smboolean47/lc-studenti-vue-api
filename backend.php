<?php
$students = [
    [
        "firstName" => "Samuele",
        "lastName" => "Madrigali"
    ],
    [
        "firstName" => "Nicholas",
        "lastName" => "Latini"
    ],
    [
        "firstName" => "Federico",
        "lastName" => "Travi"
    ],
    [
        "firstName" => "Maurizio",
        "lastName" => "Paoletti"
    ]
];

header("Content-Type: application/json");

echo json_encode($students);