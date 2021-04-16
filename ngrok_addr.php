<?php

$l='/var/www/html/_ngrok';

$a=file($l);
// $a=file($argv[1]);
// var_dump($a);

$m=preg_grep('/url=/', $a);
$m=array_values($m);
// var_dump($m);

$b=explode(' ', $m[1]);
// var_dump($b);

$c=explode('=', $b[7]);

echo trim($c[1]);
