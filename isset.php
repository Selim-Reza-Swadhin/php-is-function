<?php
$var = '';
//True
if (isset($var)){
    echo 'This var is set so I will print.';
}

//The return value of isset()
$a = 'test';
$b = 'another test';
var_dump(isset($a));
var_dump(isset($a, $b));

unset($a);

var_dump(isset($a));
var_dump(isset($a, $b));

$foo = null;

var_dump(isset($foo));
