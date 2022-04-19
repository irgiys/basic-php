<?php
   $first   = [
      "first_name" => "Irgi"
   ];
   $last = [
      "first_name" => "supri",
      "last_name" => "yansyah"
   ];
   // union $arrayA + $arrayB
   $full = $first + $last;
   // var_dump($full);

   $a = [
      "first_name" => "supri",
      "last_name" => "yansyah"
   ];
   $b = [
      "last_name" => "yansyah",
      "first_name" => "supri"
   ];
   
   var_dump($a == $b);
   // identity
   var_dump($a === $b);