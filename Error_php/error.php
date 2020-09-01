<?php
echo error_reporting(0);//value=32767
echo '<br>';
echo error_reporting(1);//value=0
echo '<br>';
echo error_reporting(E_ERROR);//value=1
echo '<br>';
echo error_reporting(E_WARNING);//value=1
echo '<br>';
echo error_reporting(E_PARSE);//value=2
echo '<br>';
echo error_reporting(E_NOTICE);//value=4
echo '<br>';
echo error_reporting(E_CORE_ERROR);//value=8
echo '<br>';
echo error_reporting(E_CORE_WARNING);//value=16
echo '<br>';
echo error_reporting(E_ALL);//value=32
echo '<br>';
echo error_reporting(E_USER_ERROR);//value=32767
echo '<br>';
echo error_reporting(E_USER_WARNING);//value=256
echo '<br>';
echo error_reporting(E_USER_NOTICE);//value=512
echo '<br>';
echo error_reporting(E_STRICT);//value=1024
echo '<br>';
echo error_reporting(E_RECOVERABLE_ERROR);//value=2048
echo '<br>';
echo error_reporting(E_USER_DEPRECATED);//value=4096
echo '<br>';
echo error_reporting(E_DEPRECATED);//value=16384
echo '<br>';
echo error_reporting(E_COMPILE_ERROR);//value=8192
echo '<br>';
echo error_reporting(E_COMPILE_WARNING);//value=64
echo '<br>';


//error_reporting(0);
echo $a;
print_r(error_get_last());
var_dump(error_get_last());
error_clear_last();
echo '<br>';
var_dump(error_get_last());
error_clear_last();
var_dump(error_get_last());

@$a = $b;
var_dump(error_get_last());
error_clear_last();
var_dump(error_get_last());
