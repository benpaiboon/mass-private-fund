<?php 
  
  include 'core/libs/functions.php';
  
  // Init Important Variables For Insert
  $instTable = 'fact_privatefund_instrument';
  $instDbField = 'inst_id,inst_date,inst_port_id,sector,securities,instrument,unit,avg_cost_price,avg_cost,market_price,inst_market_value,unrealized_profit_lost,unrealized_profit_lost_pct,inst_proportion_pct';
  $folderForRead = 'assets/csv_resources/';
  $stringForSearchFile = 'daily_val_inst';
  
  // Fired Functions
  $instFileArr = getFileNameFromFolder($folderForRead);
  $getIndex = searchIndexFromArray($instFileArr, $stringForSearchFile);    
  $file = fopen("$folderForRead"."$instFileArr[$getIndex]", "r");
  $instCSVData = getDataFromCSV($file);

?>