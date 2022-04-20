<?php
   $data = [
      "action"  => null
   ];
   // biasa
   // if(isset($data["action"])){
   //    $action = $data["action"];
   // }else{
   //    $action = "kosong";
   // }

   $action = $data["action"] ?? "Nothing";
   echo $action . PHP_EOL;