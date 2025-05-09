<?php
     require_once"settings.php";
     if($conn) {
          $query = "SELECT * FROM cars";
          $result = mysqli_query($conn,$query);
          if($result){
               echo "<table>
                    <thead>
                    <tr>
                    <th>Car ID</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th>Year of Manufacture</th>
                    </thead>";
               while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['car_id'] . "</td>";
                    echo "<td>" . $row['make'] . "</td>";
                    echo "<td>" . $row['model'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "<td>" . $row['yom'] . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
          }
          else {
               echo "<p>There are no cars to display bro </p>";
          }

          mysqli_close($conn);
     }
     else echo"<p>Unable to connect to the db</p>";
?>