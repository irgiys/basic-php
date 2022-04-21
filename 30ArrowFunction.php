<?php
   $firstName = "Irgi";
   $lastName = "yansyah";

   $anonymFunc = function () use ($firstName, $lastName){
      echo "Hello $firstName $lastName". PHP_EOL;
   };
   
   // arrow function  auto return
   $arrowFunc = fn() => "Hello $firstName $lastName" . PHP_EOL;
   
   $anonymFunc();
   echo $arrowFunc();