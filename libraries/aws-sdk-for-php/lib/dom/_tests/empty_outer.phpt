--TEST--
Empty nodes in the JSON document (outer).

--FILE--
<?php
require_once '../ArrayToDOMDocument.php';

$data = json_decode('{"data1":[],"data2":{}}', true);
echo Array2DOM::arrayToXMLString($data);
?>

--EXPECT--
<?xml version="1.0"?>
<root>
  <data1/>
  <data2/>
</root>
