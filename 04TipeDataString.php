<?php
   echo 'Nama  : ';
   echo "monke";
   
   // double quote bisa pake escape sequence e.g \n, \t
   echo "\nNama : \t";
   echo "monke";

   // menggunakan heredoc
   echo <<<DOC

   heredoc adalah fitur untuk
   panjang, sehingga kita tidak perlu 
   enter, tab dan yang lain-lain secara manual
   DOC;

   // menggunakan newdoc
   echo <<<'DOC'

   newdoc adalah fitur yang mirip dengan heredoc
   panjang, sehingga kita tidak perlu 
   enter, tab dan yang lain-lain secara manual
   DOC;

