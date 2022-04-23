<?php
   $name = "irgi";

   $otherName = &$name;
   $otherName = "Aski";

   echo $name . PHP_EOL;

   // passsing argument as reference
   function increment(int &$value){
      $value ++;
   };
   $counter = 0;
   increment($counter);
   increment($counter);
   increment($counter);
   echo $counter . PHP_EOL;

   // returning reference
   function &getValue(){
      static $value = 100;
      return $value;
   } 

   $a = &getValue();
   $a = 200;
   
   $b = &getValue();
   echo $b . PHP_EOL;  