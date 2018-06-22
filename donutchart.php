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
  <h1>Welcome to Mass Private Fund</h1>
  <?php 
    $sql = "SELECT instrument,avg_cost FROM fact_privatefund_instrument WHERE inst_port_id = 'P1800001'";
    $result = $conn->query($sql);
    $portRows = [];

    if ($result->num_rows > 0) {    
      while($row = $result->fetch_assoc()) {
        array_push($portRows, $row);  
      }
    }
    else {
      echo "0 results";
    }
  ?>
  <div id="donutChart" style="width:450px;height:300px;"></div>
</body>

<script>
  $(document).ready(function () {
    let stock = <?php echo json_encode($portRows); ?>;
    if(stock.length === 0){
      alert("No data in SQL");
      console.log('No data in SQL');
    }
    else{
      let count = 0;
      let dataSet = [];

      stock.forEach(element => {
        let dataObj = { label: element.instrument, data: element.avg_cost, color: count }
        count += 2;
        dataSet.push(dataObj);
      });

      let options = {
        series: {
          pie: {
            show: true,
            innerRadius: 0.4,
            label: {
              show: true
            }
          }
        },
        legend: {
          show: false
        }
      };

      $.plot($("#donutChart"), dataSet, options);
    }

  });
</script>

</html>