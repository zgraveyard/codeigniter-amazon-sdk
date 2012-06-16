--TEST--
Encode NULL bytes in XML strings.

--FILE--
<?php
require_once '../ArrayToDOMDocument.php';

class Dummy
{
	private $prop = 'property';
}

// Contains NULL bytes (i.e., "\0" or "\u0000")
$serialized_dummy = serialize(new Dummy);

$data = array(
	'dummy' => $serialized_dummy
);

echo Array2DOM::arrayToXMLString($data);
?>

--EXPECT--
<?xml version="1.0"?>
<root>
  <dummy><![CDATA[json_encoded::"O:5:\"Dummy\":1:{s:11:\"\u0000Dummy\u0000prop\";s:8:\"property\";}"]]></dummy>
</root>
