<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cash</title>
</head>

<body>
  <?php 
    include 'config/db.php';
    include 'config/cash_conf.php';
    
    // Insert CSV to DB
    insertDataToCashDB($conn, $cashCSVData, $cashTable, $cashDbField);

    // Show Data After Inserted
    $sql = "SELECT * FROM daily_val_cash";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table border='1'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Date</th>";
      echo "<th>Port ID</th>";
      echo "<th>Title</th>";
      echo "<th>Market Value</th>";
      echo "<th>Proportion Pct</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
      while($row = $result->fetch_assoc()) {
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
        echo "<tr>";
        echo "<td>".$row['date_port']."</td>";
        echo "<td>".$row['port_id']."</td>";
        echo "<td>".$row['title']."</td>";
        echo "<td>".$row['market_value']."</td>";
        echo "<td>".$row['proportion_pct']."</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "<table>";
    }
    else {
      echo "0 results";
    }

  ?>
</body>

</html>