<HTML>
    <HEAD>
        <META HTTP-EQUIV="Content-Temp" CONTENT="text/html; charset=iso-8859-2">
        <TITLE>Pierwiestki równania kwadratowego</TITLE>
    </HEAD>
    <BODY>
        <?php
            // $a = $_POST[formularz_a];
            $a = 5;

            $w1 = 0;
            for($i = $a; $i >= 1; $i--){
                $w1 *= $i;
            }
            print("$w1 <BR>");

            $w2 = $a;
            $i1 = $a;          
            while ($i1 >= 1){
                $w2 *= $i;
                $i1--;
            }
            print("$w1 <BR>");

            $w3 = $a;
            $i2 = $a;
            do{
                $w3 *= $i2;
                $i2--;
            }while($j >= 1);
            print("$w1 <BR>");
            
            // for ($i = 1; $i <= 30; $i++){
            //     print("$i"." ");
            // }
            // print("<BR>");

            // for($i = 30; $i >= 1; $i--){
            //     print("$i"." ");
            // }
            // print("<BR>");

            // $i = 1;

            // while ($i <= 30){
            //     print("$i"." ");
            //     $i++;
            // }
            // print("<BR>");

            // $j = 1;
            // do{
            //     print("$j"." ");
            //     $j++;
            // }while($j <= 30);
            // print("<BR>");
        ?>
    </BODY>
</HTML>

<!-- 
    pisemna forma:
        i++ ->
        i-- ->
        ++i ->
        --i ->
 -->
