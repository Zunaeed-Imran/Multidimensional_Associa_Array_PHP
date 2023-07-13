<?php

$movie = [
 "Marvel" => [
  "Doctor" => "Strength",
  "Captain" => "America",
  "Iron-Man" => "Stark",
  "Thor" => "Odin-Son"
 ],
 "DC" => [
  "Flash" => "Barry",
  "Dark-side" => "Slade",
  "Bat-man" => "Wayn"
 ],
 "Hollywood" => [
  "Transformer" => "optomus",
  "Expandable" => "Rambo",
  "Snake-Eyes" => "Unknown"
  ]
 ];

 echo "<table border '2px' cellpadding='5px' cellspacing='0'>
  
          <tr>
            <th>Movie Universe</th>
            <th>hero-1 Name</th>
            <th>hero-2 Name</th>
            <th>hero-3 Name</th>
            <th>hero-4 Name</th>
          </tr>";

  foreach($movie as $key => $value){
      echo "<tr>
        <td> $key </td>";
         foreach($value as $value2){
       echo "<td> $value2 </td>";
    }
    echo "</tr>";

  } 

 echo "</table>";


?>
