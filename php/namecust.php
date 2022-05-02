<?php
    include "db.php";

    $resource = $conn->query('SELECT name FROM customer WHERE id = (SELECT max(id) FROM customer)');
    while ( $rows = $resource->fetch_assoc() ) {
        echo "<tr><td>".$rows['name']."</td></tr>";
    }
    $resource->free();
    $conn->close();
?>
