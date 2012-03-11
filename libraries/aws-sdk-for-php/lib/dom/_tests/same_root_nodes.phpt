--TEST--
Use multiple nodes with identical names as children of <root>.

--FILE--
<?php
require_once '../ArrayToDOMDocument.php';

$data = array(
	'domainInfos' => array(
		array(
			'name' => 'aws-php-sdk-domain',
			'status' => 'REGISTERED'
		),
		array(
			'name' => 'aws-php-sdk-domain2',
			'status' => 'REGISTERED'
		)
	)
);

echo Array2DOM::arrayToXMLString($data);
?>

--EXPECT--
<?xml version="1.0"?>
<root>
  <domainInfos>
    <name><![CDATA[aws-php-sdk-domain]]></name>
    <status><![CDATA[REGISTERED]]></status>
  </domainInfos>
  <domainInfos>
    <name><![CDATA[aws-php-sdk-domain2]]></name>
    <status><![CDATA[REGISTERED]]></status>
  </domainInfos>
</root>
