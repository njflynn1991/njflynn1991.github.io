<?php
    include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Board Game Database</title>
</head>

<body>

<form action="addgame.inc.php" method="POST">
    <input type="text" name="title" placeholder="Title"><br>
    <input type="text" name="genre" placeholder="Genre"><br>
    <input type="text" name="apt" placeholder="Average Play Time"><br>
    <input type="text" name="minp" placeholder="Minimum Players"><br>
    <input type="text" name="maxp" placeholder="Maximum Players"><br>
    <button type="submit" name="submit">Submit</button>
</form>

<br>

<table>
<tr>
<th>Name</th>
<th>Genre</th>
<th>Average Play Time</th>
<th>Minimum Players</th>
<th>Maximum Players</th>
</tr>

<?php
    $sql = "SELECT * FROM boardgames;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row['Title'] . "</td><td>" . $row['Genre'] . "</td><td>" . $row['Average_Play_Time'] . "</td><td>" . $row['Minimum_Players'] . "</td><td>" . $row['Maximum_Players'] . "</td></tr>";
        }
        echo "</table>";
    }
    else:
        echo "</table>";
?>

</body>
</html>