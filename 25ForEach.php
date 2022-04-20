<?php
   $array = ["irgi", 12, "yansyah"];
   // for biasa
   // for($i = 0 ; $i < count($array) ; $i++){
   //    echo "Hello array ke $array[$i]" . PHP_EOL;
   // }
   // foreach($array as $arr){
   //    echo "Hello $arr" . PHP_EOL;
   // }

   // foreach dengan key custom
   $person = [
      "full_name" => "Irgiyansyah",
      "kelas" => "Malam B",
      "nim" => 211351068 
   ];

   foreach($person as $key => $value) {
     echo "$key : $value" . PHP_EOL; 
   }