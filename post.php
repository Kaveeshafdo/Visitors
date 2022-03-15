<?php
    date_default_timezone_set("Europe/Stockholm");
   // echo date_default_timezone_get().'<br />';
      $trn_date = date("Y-m-d H:i:s");
    
      $file = 'C:\\xampp\\htdocs\\Visitors\\info.csv';
   $fh = fopen($file, 'r');
   while(list($name,$post,$datetime) = fgetcsv($fh,1024,',')){
              printf("<p>%s , %s , %s</p>",$name,$post,$datetime);
   }


?>