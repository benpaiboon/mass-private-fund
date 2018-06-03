<?php 
  
  include 'func/functions.php';
  
  // Init Important Variables For Insert
  $cashTable = 'daily_val_cash';
  $cashDbField = 'id,date_port,port_id,title,market_value,proportion_pct';
  $folderForRead = 'csv_resources/';
  $stringForSearchFile = 'daily_val_cash';
  
  // Fired Functions
  $cashFileArr = getFileNameFromFolder($folderForRead);
  $getIndex = searchIndexFromArray($cashFileArr, $stringForSearchFile);    
  $file = fopen("$folderForRead"."$cashFileArr[$getIndex]", "r");
  $cashCSVData = getDataFromCSV($file);

?>