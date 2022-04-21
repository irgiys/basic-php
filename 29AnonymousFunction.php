<?php
   $sayHello = function($name){
      echo "Hello $name" . PHP_EOL;
   };
   $sayHello("poli");

   function sayGoodbye($name, $filter){
      $finalName = $filter($name);
      echo "Good bye $finalName" . PHP_EOL;
   };

   sayGoodbye("gede", function($name) : string {
      return strtoupper($name);
   });

   $filterFunction = function($name) : string {
      return strtolower($name);
   };

   sayGoodbye("KECIL", $filterFunction);

   // akses variable di luar function scope

   $firstName = "Irgi";
   $lastName = "yansyah";

   $sayHelloGi = function() use ($firstName, $lastName) {
      echo "Hello $firstName $lastName" . PHP_EOL;
   };
   
   $firstName = "Budi";
   $lastName = "Nugraha";

   $sayHelloGi();
   