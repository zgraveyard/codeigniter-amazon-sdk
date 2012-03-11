--TEST--
Use multiple nodes with identical names as children of <root>.

--FILE--
<?php
require_once '../ArrayToDOMDocument.php';

$data = json_decode('{"count":1,"truncated":false}', true);
echo Array2DOM::arrayToXMLString($data);
?>

--EXPECT--
<?xml version="1.0"?>
<root>
  <count><![CDATA[1]]></count>
  <truncated><![CDATA[false]]></truncated>
</root>
