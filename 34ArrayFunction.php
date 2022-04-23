<?php
   $data = [1,2,3,4,5,6,7,8,9,10];

   // map
   var_dump(array_map(fn(int $value) : int => $value * 2, $data ));

   // rsort
   rsort($data);
   // var_dump($data);
   
   $person = [
      "firstName" => "Irgi",
      "lastName" => "yansyah"
   ];
   // array_keys
   var_dump(array_keys($person));
   // array_values
   var_dump(array_values($person));