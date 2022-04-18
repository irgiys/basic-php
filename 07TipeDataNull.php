<?php
   define("KOSONG", NULL);
   $name = "Irgi";
   $name = null;

   echo "null : ";
   echo KOSONG;
   echo $name;
   echo "\n";

   // is_null untuk mengecek variable apakah kosong atau tak
   $name = 'irgi';
   echo "Is name null  ? ";
   var_dump(is_null($name));

   // menghapus variable beneran gak di nullin gak di akses lagi 
   $contoh = "irgi";
   unset($contoh);
   // echo $contoh;
   // pake isset lebih aman
   echo "Is contoh defined ? ";
   var_dump(isset($contoh));