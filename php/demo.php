<?php
    include "db.php";

    $sql = "SELECT id, itemname, itemtype, quantity, price, harvestdate FROM inevntory";
    $stmt = sqlsrv_query( $conn, $sql );
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
                        }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                                                                 
        echo "<tr><td>".$row['id']."</td><td>".$row['itemname']."</td><td>".$row['itemtype']."</td><td>".$row['quantity']."</td><td>".$row['harvestdate']."</td><td>".$row['price']."</td></tr>";                                               
                                               

            }

    sqlsrv_free_stmt( $stmt);

?>