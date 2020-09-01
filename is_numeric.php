<?php
error_reporting(0);//notice error hide
$tests = array(
    '42',
    1337,
    0x539,
    02471,
    1337e0,
    'not numeric',
    array(),
    9.1
);

foreach ($tests as $element) {
    if (is_numeric($element)){
        echo "'{$element}' is numeric", PHP_EOL;
        echo '<br>';
    }else{
        echo "'{$element}' is NOT numeric", PHP_EOL;
        echo '<br>';
    }
}
