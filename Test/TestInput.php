<?php
require_once __DIR__."/../Helper/Input.php";
$name = input("namaku");
echo "hello ({$name})". var_dump($name);