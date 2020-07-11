<?php
$d=date ("d");
$m=date ("m");
$y=date ("Y");
$t=time();
$dmt=$d+$m+$y+$t;    
//$ran= rand(0,10000000);
//$dmtran= $dmt+$ran;
//$un=  uniqid();
//$dmtun = $dmt.$un;
//$mdun = md5($dmtran.$un);
//$sort=substr($mdun, 16);  //if you want sort length code.
$file = '0.txt';
file_put_contents($file, $dmt);
echo $dmt;

?>
