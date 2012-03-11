<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['storage'] = array(
		// Amazon Web Services Key. Found in the AWS Security Credentials. You can also pass
		// this value as the first parameter to a service constructor.
		'key' => '',

		// Amazon Web Services Secret Key. Found in the AWS Security Credentials. You can also
		// pass this value as the second parameter to a service constructor.
		'secret' => '',

		// This option allows you to configure a preferred storage type to use for caching by
		// default. This can be changed later using the set_cache_config() method.
		//
		// Valid values are: `apc`, `xcache`, or a file system path such as `./cache` or
		// `/tmp/cache/`.
		'default_cache_config' => '',

		// Determines which Cerificate Authority file to use.
		//
		// A value of boolean `false` will use the Certificate Authority file available on the
		// system. A value of boolean `true` will use the Certificate Authority provided by the
		// SDK. Passing a file system path to a Certificate Authority file (chmodded to `0755`)
		// will use that.
		//
		// Leave this set to `false` if you're not sure.
		'certificate_authority' => false
);