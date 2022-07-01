<?php

// $x=20;
// while($x>10){
//     echo '<br>' . 'Fuck you';
//     $x--; 
// }
// for($s=1;$s<11;$s+=s2){
//     echo '<br>' . 'Shit';
// }
$s= 5;
$x= 7;
$z=$s++ + (++$x*$s++)*$s-- + $x++;
echo $z . 'br';
$m=$x+$s+(++$x*++$s)+$s++;
echo $m;

$names=['Mohammed','Ahmed','Hasan','Ali','Khalid'];
// foreach($names as $name){
//     echo $name . '<br>';
// }
 
for($i=0;$i<count($names);$i++){
    echo $names[$i] . '<br>';
}


// Route هاي الدالة لتعريف رابط 

