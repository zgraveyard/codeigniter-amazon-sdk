--TEST--
Empty nodes in the JSON document (inner).

--FILE--
<?php
require_once '../ArrayToDOMDocument.php';

$data = json_decode('{"data1":{"full":["one","two"],"empty":[]},"data2":{"full":{"one":"two"},"empty":{}}}', true);
echo Array2DOM::arrayToXMLString($data);
?>

--EXPECT--
<?xml version="1.0"?>
<root>
  <data1>
    <full>
      <full><![CDATA[one]]></full>
      <full><![CDATA[two]]></full>
    </full>
    <empty/>
  </data1>
  <data2>
    <full>
      <one><![CDATA[two]]></one>
    </full>
    <empty/>
  </data2>
</root>
