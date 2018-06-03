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
      while($row = $result->fetch_assoc()) {
        print_r($row);
      }
    }
    else {
      echo "0 results";
    }

  ?>
</body>

</html>