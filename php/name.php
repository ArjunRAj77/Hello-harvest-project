<?php
    include "db.php";

    $resource = $conn->query('SELECT name FROM farmer WHERE id = (SELECT max(id) FROM farmer)');
    while ( $rows = $resource->fetch_assoc() ) {
        echo "<tr><td>".$rows['name']."</td></tr>";
    }
    $resource->free();
    $conn->close();
?>
