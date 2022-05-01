<table>
    <tr>
    <th><h3>Sl No.</h3></th>
    <th><h3>Product</h3></th>
    <th><h3>Category</h3></th>
    <th><h3>Current Stock</h3></th>
    <th><h3>Selling Price</h3></th>
    <th><h3>Next Harvestdate</h3></th>
    </tr>

                                   
    </h3> 
    <h4>    
    <?php
        include "db.php";

        $resource = $conn->query('SELECT id, itemname, itemtype, quantity, price, harvestdate FROM inventory');
        while ( $rows = $resource->fetch_assoc() ) {
            echo "<tr><td>".$rows['id']."</td><td>".$rows['itemname']."</td><td>".$rows['itemtype']."</td><td>".$rows['quantity']."</td><td>".$rows['harvestdate']."</td><td>".$rows['price']."</td></tr>";
        }

        $resource->free();
        $conn->close();

    ?>
    </h4>
    </table> 