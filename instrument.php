<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'core/libs/header.libs.php'; ?>
</head>

<?php 
  include 'config/db.php';
  include 'config/inst_conf.php';
?>

<body>
  <?php 
    // Insert CSV to DB
    insertDataToInstDB($conn, $instCSVData, $instTable, $instDbField);

    // Show Data After Inserted
    $sql = "SELECT * FROM fact_privatefund_instrument";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      echo "<table border='1'>";
      echo "<thead>";
      echo "<tr>";
      echo "<th>Date</th>";
      echo "<th>Port ID</th>";
      echo "<th>Sector</th>";
      echo "<th>Securities</th>";
      echo "<th>Instrument</th>";
      echo "<th>Unit</th>";
      echo "<th>Avg Cost Price</th>";
      echo "<th>Avg Cost</th>";
      echo "<th>Market Price</th>";
      echo "<th>Market Value</th>";
      echo "<th>Unrealized Profit Lost</th>";
      echo "<th>Unrealized Profit Lost Pct</th>";
      echo "<th>Proportion Pct</th>";
      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";
      while($row = $result->fetch_assoc()) {
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
        echo "<tr>";
        echo "<td>".$row['inst_date']."</td>";
        echo "<td>".$row['inst_port_id']."</td>";
        echo "<td>".$row['sector']."</td>";
        echo "<td>".$row['securities']."</td>";
        echo "<td>".$row['instrument']."</td>";
        echo "<td>".$row['unit']."</td>";
        echo "<td>".$row['avg_cost_price']."</td>";
        echo "<td>".$row['avg_cost']."</td>";
        echo "<td>".$row['market_price']."</td>";
        echo "<td>".$row['inst_market_value']."</td>";
        echo "<td>".$row['unrealized_profit_lost']."</td>";
        echo "<td>".$row['unrealized_profit_lost_pct']."</td>";
        echo "<td>".$row['inst_proportion_pct']."</td>";
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