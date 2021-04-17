<?php
date_default_timezone_set('PRC');

echo date('Y-m-d H:i:s') . PHP_EOL;

var_dump($_GET);
var_dump($_SERVER['SCRIPT_FILENAME']);

phpinfo();