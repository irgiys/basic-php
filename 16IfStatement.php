<?php 
   // if(expression){
   //    statement 1
   //    statement n
   // }
   $nilai = 90;
   $absen = 75;
   if($nilai >= 90 && $absen >= 90){
      print "Nilai Anda A !" . PHP_EOL;
   } elseif($nilai >= 75 && $absen >= 75) {
      echo "Nilai Anda B !" . PHP_EOL;
   }else{
      echo "Maaf Nilai anda E " . PHP_EOL;
   }
   // syntax alternatif
   if($nilai >= 90 && $absen >= 90):
      print "Nilai Anda A !" . PHP_EOL;
    elseif($nilai >= 75 && $absen >= 75):
      echo "Nilai Anda B !" . PHP_EOL;
   else:
      echo "Maaf Nilai anda E " . PHP_EOL;
   endif;