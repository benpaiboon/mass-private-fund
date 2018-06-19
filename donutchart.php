<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mass Private Fund</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.flot.min.js"></script>
  <script src="js/jquery.flot.pie.min.js"></script>
</head>

<body>
  <h1>Welcome to Mass Private Fund</h1>
  <div id="donutChart" style="width:450px;height:300px;margin:0 auto"></div>
</body>

<script>
  $(document).ready(function () {
    var stock = ['AAV', 'BBL', 'SCB', 'KBANK', 'COL', 'JAS', 'S', 'VNG'];
    var count = 0;
    var data = [];

    stock.forEach(element => {
      var dataObj = { label: element, data: Math.random(), color: count }
      count += 1;
      data.push(dataObj);
    });

    console.log(data);

    // var dataSet = [
    //   { label: "Asia", data: 4119630000, color: 0 },
    //   { label: "Latin America", data: 590950000, color: 1 },
    //   { label: "Africa", data: 1012960000, color: 2 },
    //   { label: "Oceania", data: 35100000, color: 3 },
    //   { label: "Europe", data: 727080000, color: 4 },
    //   { label: "North America", data: 344120000, color: 5 }
    // ];

    var options = {
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

    $.plot($("#donutChart"), data, options);

  });
</script>

</html>