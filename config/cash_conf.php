<?php 
  
  include 'core/libs/functions.php';
  
  // Init Important Variables For Insert
  $cashTable = 'fact_privatefund_cash';
  $cashDbField = 'cash_id,cash_date,cash_port_id,title,cash_market_value,cash_proportion_pct';
  $folderForRead = 'assets/csv_resources/';
  $stringForSearchFile = 'daily_val_cash';
  
  // Fired Functions
  $cashFileArr = getFileNameFromFolder($folderForRead);
  $getIndex = searchIndexFromArray($cashFileArr, $stringForSearchFile);    
  $file = fopen("$folderForRead"."$cashFileArr[$getIndex]", "r");
  $cashCSVData = getDataFromCSV($file);

?>