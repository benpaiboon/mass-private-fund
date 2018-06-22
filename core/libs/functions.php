<?php
  
  function getFileNameFromFolder($dir){
    if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
        $files = [];
        while (($file = readdir($dh)) !== false) {
          array_push($files, $file);
        }
        closedir($dh);
        $cashFileOutput = array_slice($files, 2);
        return $cashFileOutput;
      }
    }
  }

  function searchIndexFromArray($arr, $keyword) {
    foreach($arr as $index => $string) {
      if (strpos($string, $keyword) !== FALSE)
        return $index;
    }
  }

  function getDataFromCSV($file){
    $data = [];
    while (($getData = fgetcsv($file, 10000, ",")) !== FALSE){
      array_push($data,$getData);
    }
    fclose($file);
    array_shift($data);
    return $data;
  }

  function insertDataToCashDB($dbConnection, $csvData, $table, $dbField){
    if(is_array($csvData)){
      foreach($csvData as $row){
        $randomID = md5(uniqid(rand(), true));
        $query = "INSERT INTO $table ($dbField) 
                  VALUES ( '".$randomID."','".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."' )";
        $dbConnection->query($query);              
      }
    }
  }

  function insertDataToInstDB($dbConnection, $csvData, $table, $dbField){
    if(is_array($csvData)){
      foreach($csvData as $row){
        $randomID = md5(uniqid(rand(), true));
        $query = "INSERT INTO $table ($dbField) 
                  VALUES ( '".$randomID."','".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."','".$row[4]."','".$row[5]."','".$row[6]."','".$row[7]."','".$row[8]."','".$row[9]."','".$row[10]."','".$row[11]."','".$row[12]."' )";
        $dbConnection->query($query);              
      }
    }
  }

?>