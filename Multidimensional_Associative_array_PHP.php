<?php
$marks = [
  "rifat" => [
    "physis" => 50,
    "math" => 50,
    "chemistry" => 60
  ],
  "shamim" => [
    "physis" => 60,
    "math" => 33,
    "Chemistry" => 40
  ],
  "Mohon" => [
    "Physis" => 90,
    "math" => 70,
    "chemistry" => 55
  ]

  ];


  foreach($marks as $key => $value){
    echo $key. " ";
    foreach ($value as $value2){
      echo $value2."-";
    }
    echo "<br>";
  }

  echo "<pre>";
  print_r($marks);
  echo "</pre>";  

?>
