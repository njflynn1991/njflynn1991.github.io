<?php
    include_once 'dbh.inc.php';

    $title = $_POST['title'];
    $genre = $_POST['genre'];
    $apt = $_POST['apt'];
    $minp = $_POST['minp'];
    $maxp = $_POST['maxp'];

    $sql = "INSERT INTO boardgames (Title, Genre, Average_Play_Time, Minimum_Players, Maximum_Players) VALUES ('$title', '$genre', '$apt', '$minp', '$maxp');";
    mysqli_query($conn, $sql);

    header("Location: index.php");