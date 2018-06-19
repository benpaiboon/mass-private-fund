<?php 
  
  include 'core/libs/functions.php';
  
  // Init Important Variables For Insert
  $instTable = 'daily_val_inst';
  $instDbField = 'id,date_port,port_id,sector,securities,instrument,unit,avg_cost_price,avg_cost,market_price,market_value,unrealized_profit_lost,unrealized_profit_lost_pct,proportion_pct';
  $folderForRead = 'assets/csv_resources/';
  $stringForSearchFile = 'daily_val_inst';
  
  // Fired Functions
  $instFileArr = getFileNameFromFolder($folderForRead);
  $getIndex = searchIndexFromArray($instFileArr, $stringForSearchFile);    
  $file = fopen("$folderForRead"."$instFileArr[$getIndex]", "r");
  $instCSVData = getDataFromCSV($file);

?>