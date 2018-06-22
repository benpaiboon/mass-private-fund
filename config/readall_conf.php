<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mass_privatefund";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  include 'core/libs/functions.php';
  
  $cashTable = 'fact_privatefund_cash';
  $cashDbField = 'cash_id,cash_date,cash_port_id,title,cash_market_value,cash_proportion_pct';

  $instTable = 'fact_privatefund_instrument';
  $instDbField = 'inst_id,inst_date,inst_port_id,sector,securities,instrument,unit,avg_cost_price,avg_cost,market_price,inst_market_value,unrealized_profit_lost,unrealized_profit_lost_pct,inst_proportion_pct';

  $folderForRead = 'assets/csv_resources/';
  
  // Fired Functions
  $fileArr = getFileNameFromFolder($folderForRead);
  
  foreach($fileArr as $f){
    $file = fopen("$folderForRead"."$f", "r");
    $fileData = getDataFromCSV($file);
    
    $numberOfKeyPerRow = count(current($fileData));

    if($numberOfKeyPerRow <= 5){
      $cashDataTable = array('cashTable' => $fileData);
      echo "<pre>";
      print_r($cashDataTable['cashTable']);
      echo "</pre>";

      insertDataToCashDB($conn, $cashDataTable['cashTable'], $cashTable, $cashDbField);
    }
    if($numberOfKeyPerRow > 5){
      $instDataTable = array('instTable' => $fileData);
      echo "<pre>";
      print_r($instDataTable['instTable']);
      echo "</pre>";

      insertDataToInstDB($conn, $instDataTable['instTable'], $instTable, $instDbField);
    }

    // echo "<pre>";
    // print_r($fileData);
    // echo "</pre>";
  }

  // for($i=0;$i<count($fileArr); $i++){
  //   $file = fopen("$folderForRead"."$fileArr[$i]", "r");
  //   $fileData[$i] = getDataFromCSV($file);
  //   // echo "<pre>";
  //   // print_r($fileData[$i]);
  //   // echo "</pre>";
  //   $numberOfKeyPerRow = count(current($fileData[$i]));
  //   if($numberOfKeyPerRow <= 5){
  //     echo 'cash';
  //     $fileData['cashTable'] = $fileData[$i];
  //     echo "<pre>";
  //     print_r($fileData['cashTable']);
  //     echo "</pre>";
  //   }
  //   if($numberOfKeyPerRow > 5){
  //     echo 'inst';
  //     $fileData['instTable'] = $fileData[$i];
  //     echo "<pre>";
  //     print_r($fileData['instTable']);
  //     echo "</pre>";
  //   }
  // }

  // $getIndex = searchIndexFromArray($fileArr, $stringForSearchFile);    
  // $file = fopen("$folderForRead"."$fileArr[$getIndex]", "r");
  // $fileData = getDataFromCSV($file);

?>