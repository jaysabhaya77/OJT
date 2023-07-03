<?php

    $x = 10;
    $y = 5;
    echo '<h3>Arithmatic Operators </h3><br>';
    echo 'Addition of  ' . $x . ' + ' . $y . ' = ' . $x + $y . '<br>';
    echo 'Substraction of  ' . $x . ' - ' . $y . ' = ' . $x - $y . '<br>';
    echo 'Multiplication of  ' . $x . ' * ' . $y . ' = ' . $x * $y . '<br>';
    echo 'Division of  ' . $x . ' / ' . $y . ' = ' . $x / $y . '<br><br>';
    
    
    echo '<h3>Relation Operators </h3><br>';
    
    $xx = 50;
    $yy = 30;
    echo '50 < 30 = '.(int)($xx < $yy). '<br>';
    echo '50 > 30 = '.(int)($xx > $yy). '<br>';
    
    
    
    echo '<h3>Logical Operators </h3><br>';
    $xxx = 50;
    $yyy = 30;
    echo '50 and 30 = '.($xxx==50 and $yyy==30).'<br>';
    echo '50 or 30 = '.($xxx==50 or $yyy==30).'<br>';
    echo '50 not 30 = '.(int)($xxx!==50).'<br>';

?>