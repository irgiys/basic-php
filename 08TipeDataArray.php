<?php 
   // syntax array di php
   // bisa gini
   $myarr = array(1,"jalo", true, 12);
   // bisa gitu
   $saya = ["irgi", 20, "yansyah"];
   var_dump($saya);
   echo "\n";

   // operasi pada array
   // mengakses
   echo "saya = $saya[0]";
   echo "\n";
   // mengubah 
   $saya[1] = 19;
   echo "umur = $saya[1]";
   echo "\n";
   // menambah pada array ter-belakang
   $saya[] = "ganteng";
   echo "saya = $saya[3]";
   echo "\n\n";
   // menghapus data indexnya pun dihapus
   unset($saya[1]);
   // mengakses total/length data array
   var_dump(count($saya));
   echo "\n";
   var_dump($saya);
   echo "\n";

   // map array yang memikiki key dan value mirip object di js sih cuma beda sntax
   $mymap = array(
      "nama" => "Irgiyansyah",
      "shap" => "tentara",
      "umur" => 20,
   );
   // bisa gini juga
   $yourmap = [
      "nama" => "aowkoa",
      "shap" => "ganteng",
      "umur" => 20,
   ];
   var_dump($yourmap);

   var_dump($mymap["nama"]);

   // array dalam array (nested array)

   $nestedarr = [
      "id" => 123,
      "name" => "Irgiyansyah",
      "address" => array (
         "city" => "Purwakarta",
         "country" => "Indonesia"
      )
   ];
   var_dump($nestedarr["address"]["city"]);