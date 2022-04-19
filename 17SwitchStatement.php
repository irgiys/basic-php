<?php
   $nilai = "A";
   switch ($nilai) {
      case "A":
         # code...
         echo "Anda lulus dengan baik " . PHP_EOL;
         break;
      case "B":
      case "C":
         echo "Anda lulus" . PHP_EOL;
         break;
      case "D":
         echo "Maaf anda tidak lulus" . PHP_EOL;
         break;
      default:
         # code...
         echo "Mungkin anda salah jurusan" . PHP_EOL;
         break;
   }
   // alternatif 
   switch ($nilai) :
      case "A":
         # code...
         echo "Anda lulus dengan baik " . PHP_EOL;
         break;
      case "B":
      case "C":
         echo "Anda lulus" . PHP_EOL;
         break;
      case "D":
         echo "Maaf anda tidak lulus" . PHP_EOL;
         break;
      default:
         # code...
         echo "Mungkin anda salah jurusan" . PHP_EOL;
         break;
   endswitch;