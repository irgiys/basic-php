<?php
   function sayHello(string $name, callable $filter){
      $finalName = call_user_func($filter, $name);
      echo "Hello $finalName" . PHP_EOL;
   }
   sayHello("Irgi", fn($name) => strtoupper($name));
   sayHello("SUUD", function($name){return strtolower($name); });
   sayHello("nmae", "strtoupper");