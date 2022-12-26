<?php

$obj = file_get_contents('person.json');
$array = json_decode($obj,true);
echo"<pre>";
print_r($array);
echo"</pre>";



$obj = simplexml_load_file('person.xml');
echo"<pre>";
print_r($obj);
echo"</pre>";
echo $persons->person[1]->attributes()->id;

phpinfo();

?>
