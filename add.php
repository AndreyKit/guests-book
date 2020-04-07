<?php

include('connect.php');
include('config.php');
$result = $mysqli->query(
    "INSERT INTO guests VALUE (NULL,'$_POST[text]', '$_POST[name]')"
);

$mysqli->close();

header('location: index.php');