<?php 
   function foo(){
      echo "Function Fooo" . PHP_EOL;
   }
   function bar(){
      echo "Function Barr" . PHP_EOL;
   }
   $functionYangAkanDipanggil = "foo";
   $functionYangAkanDipanggil();

   $functionYangAkanDipanggil = "bar";
   $functionYangAkanDipanggil();

   // use case 
   function sayHello(string $name, $filter){
      $finalName = $filter($name);
      echo "Hello $finalName" . PHP_EOL;
   }
   function sampleFunc(string $name) : string
   {
      return "Sample $name";
   }
   sayHello("gede", "strtoupper");
   sayHello("KECIL", "strtolower");
   sayHello("KECIL", "sampleFunc");