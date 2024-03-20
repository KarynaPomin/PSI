<?PHP
    // http://localhost/2E/PAI/cw_1.php

    // echo('Hello!');
    // print('Hello');
    // phpinfo();

    // $imie = 'Karyna';
    // $nazwisko = 'Pomin';
    // print('Nazywam się <i>'. $imie .' '. $nazwisko . "</i><br>");
    
    // $bokA = 5;
    // $bokB = 7;
    // print('<u>Pole</u> prostokąta o bokach: A = '. $bokA .', B = '. $bokB . ' wynosi: <b>' .  $bokA * $bokB . '</b><br>');
    // print('<u>Obwód</u> prostokąta o bokach: A = '. $bokA .', B = '. $bokB . ' wynosi: <b>' .  $bokA + $bokB . '</b><br>');

    // define ("KWOTA_DO_ODJĘCIA", 436.20);
    // define ("STAWKA_PODATKOWA", 0.19); // czyli 19%
    // print ("Podtek od dochodu 5000 PLN w 2000 roku wynosi: ");
    
    // printF ("%0.2f", (5000 * STAWKA_PODATKOWA - KWOTA_DO_ODJĘCIA)); // "%0.2" --> dokładność do 2-ch miejsc po przecinku
    // print (" PLN");

    $tekst = 'Radek';
    $tekst .= 'Barski';
    $tekst .= '<br>';
    $tekst .= 'ul. Czzekoladowa 15/3';
    $tekst .= '<br>';
    $tekst .= '99-900 Czekoladowo';
    print $tekst; // .= --> nadpisywanie 
?>
