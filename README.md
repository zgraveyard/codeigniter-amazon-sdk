# Amazon AWS SDK for php

This has been inspired from [Kohana-aws-sdk](http://s.zah.me/AlzyHg).

It has the full amazon sdk for php.

## Requirements :

* Codeigniter : 2.1.X
* PHP 5.3.x
* AWS Account.

## Minimum Requirements in a nutshell

* You are at least an intermediate-level PHP developer and have a basic understanding of object-oriented PHP.
* You have a valid AWS account, and you've already signed up for the services you want to use.
* The PHP interpreter, version 5.2 or newer. PHP 5.2.17 or 5.3.x is highly recommended for use with the AWS SDK for PHP.
* The cURL PHP extension (compiled with the OpenSSL libraries for HTTPS support).
* The ability to read from and write to the file system via file_get_contents() and file_put_contents().
* If you're not sure whether your PHP environment meets these requirements, run the SDK Compatibility Test script included in the SDK download.

## Installation

* Remember to copy the config/awslib.php file to your config directory and fill out your aws.information.
* you can leave it at the spark/amazon-sdk/xxx/config directory.

## Usage:
* Copy the config/storage.php file to your config directory and fill out your aws.
* Load the spark as usual:

```php
	$this->load->spark('amazon-sdk/x.x.x');
	$s3 = $this->awslib->get_s3();
	$result = $s3->list_buckets();
	echo '<pre>' . print_r($result, TRUE) . '</pre>';
```

## Information :

* For more information about the AWS SDK for PHP, including a complete list of supported services, see [aws.amazon.com/sdkforphp](http://aws.amazon.com/sdkforphp).

## Updates :

* [10/09/2012] : updated SDK to version [1.5.15](https://aws.amazon.com/releasenotes/PHP/5261285417896036)..
* [10/09/2012] : updated SDK to version [1.5.14](https://aws.amazon.com/releasenotes/PHP/0994976751217074) , which added support for Cross-Origin Resource Sharing (CORS) to Amazon S3. This feature enables you to access resources in Amazon S3 buckets from within sandboxed applications (such as Ajax-backed web applications)..
* [19/08/2012] : updated SDK to version [1.5.11](https://aws.amazon.com/releasenotes/PHP/2692509814768496) , and fix a bug in the config file.
* [19/06/2012] : small fix to the way that the config is loaded, and change the name of the file to awslib.
* [16/06/2012] : update SDK to version 1.5.7
* [21/05/2012] : update SDK to version 1.5.6
* [14/05/2012] : update SDK to verion 1.5.5
* [05/05/2012] : adding dynamicDB function
* [25/04/2012] : updated SDK to version 1.5.4