<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Instrument</title>
</head>

<body>
  <?php 
    include 'config/db.php';
    include 'config/inst_conf.php';
    
    // Insert CSV to DB
    insertDataToInstDB($conn, $instCSVData, $instTable, $instDbField);

    // Show Data After Inserted
    $sql = "SELECT * FROM daily_val_inst";
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