<?php
   // function sayHello($name = "Anonim"){
   //    echo "Hello $name!" . PHP_EOL;
   // }
   // sayHello();
   // sayHello("Irgiy");
   // sayHello("Irgiy");
   // sayHello("Irgiy");
   
   // type declaration
   // function sum(int $first, int $last){
   //    $result = $first + $last;
   //    echo "Total = $first + $last = $result" . PHP_EOL;
   // }
   // sum("100", "100");
   // sum(100,100);
   // sum(true,false);
   // sum([],[]);

   // Variable-length Argument List 
   function sumAll(...$values){
      $total = 0;
      foreach($values as $value){
         $total += $value;
      }
      echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
      return $total;
   }
   $total = sumAll(10,10,4);
   sumAll(12,31,412,130,13);
   // sumAll([12,31,412,130,13]);
   var_dump($total);

   // return type declaration
   
   function getFinalValue(int $value) : string
   {
      if($value >= 80){
         return "A";
      }elseif($value >= 70){
         return "B";
      }elseif($value >= 60){
         return "C";
      }else{
         return "D";
      }
   }
   
   $nilai = getFinalValue(70);
   var_dump($nilai);

