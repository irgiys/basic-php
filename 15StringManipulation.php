<?php
   $name = "Irgi";
   // penggabungan menggunakan dot notation , PHP End Of Line
   echo "Nama : " . $name . PHP_EOL;
   echo "Nilai : " . 100 . "\n";

   echo $name[0] . PHP_EOL;
   echo $name[1] . PHP_EOL;
   echo $name[2] . PHP_EOL;
   echo $name[3] . PHP_EOL;
   // echo $name[4] . PHP_EOL;
   // konversi ke Number dan sebaliknya 
   $valueString = (string)100;
   $valueInt = (int)"100";
   $valueFloat = (float)"100.12";
   
   var_dump($valueString);
   var_dump($valueInt);
   var_dump($valueFloat);


   // variable parsing
   echo "Hello $name, Selamat belajar" . PHP_EOL;
   // variable parsing curly brace 
   echo "Hello {$name}s, Selamat belajar" . PHP_EOL;