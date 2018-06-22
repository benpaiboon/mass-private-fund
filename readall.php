<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'core/libs/header.libs.php'; ?>
</head>

<?php 
  include 'config/db.php';
  include 'config/readall_conf.php';
?>

<body>
  <?php 
    // Insert CSV to DB
    // insertDataToCashDB($conn, $cashCSVData, $cashTable, $cashDbField);

    // Show Data After Inserted
    $sql = "SELECT * FROM fact_privatefund_cash";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        // echo "<pre>";
        // print_r($row);
        // echo "</pre>";
      }
    }
    else {
      echo "0 results";
    }

  ?>
</body>

</html>