<?PHP
    $n = 5;
    
    if ($n < 1) { 
      print ("To poj�cie nie ma zastosowania dla $n.");
    } elseif ($n == 1) {
      print ('Liczba 1 nie jest ani pierwsza, ani z�o�ona.');
    } else {
      $pierwsza = True;
      for ($i = 2; $i < $n; $i++) {
        if ($pierwsza) {
          if ($n % $i == 0) {
           $pierwsza = False;
          }
        }
      }
   }
   if ($pierwsza) {
     print ("Liczba $n jest pierwsza.");
   } else {
     print ("Liczba $n nie jest pierwsza.");
   } 
?>
