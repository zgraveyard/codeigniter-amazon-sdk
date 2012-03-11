<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

require_once  dirname(__FILE__) . '/aws-sdk-for-php/sdk.class.php';

class Awslib {

	protected $_CI;
	protected $_initialised;
	protected $_config;
	protected $_options = array();

	public function __construct(){
		$this->_CI =& get_instance();
	}

	public function get_as()
	{
		$o = $this->_initialise();
		return new AmazonAS($o);
	}

	public function get_cloudformation()
	{
		$o = $this->_initialise();
		return new AmazonCloudFormation($o);
	}

	public function get_cloudfront()
	{
		$o = $this->_initialise();
		return new AmazonCloudFront($o);
	}

	public function get_cloudwatch()
	{
		$o = $this->_initialise();
		return new AmazonCloudWatch($o);
	}

	public function get_ec2()
	{
		$o = $this->_initialise();
		return new AmazonEC2($o);
	}

	public function get_beanstalk()
	{
		$o = $this->_initialise();
		return new AmazonElasticBeanstalk($o);
	}

	public function get_elb()
	{
		$o = $this->_initialise();
		return new AmazonELB($o);
	}

	public function get_emr()
	{
		$o = $this->_initialise();
		return new AmazonEMR($o);
	}

	public function get_iam()
	{
		$o = $this->_initialise();
		return new AmazonIAM($o);
	}

	public function get_importexport()
	{
		$o = $this->_initialise();
		return new AmazonImportExport($o);
	}

	public function get_rds()
	{
		$o = $this->_initialise();
		return new AmazonRDS($o);
	}

	public function get_sdb()
	{
		$o = $this->_initialise();
		return new AmazonSDB($o);
	}

	public function get_ses()
	{
		$o = $this->_initialise();
		return new AmazonSES($o);
	}

	public function get_sns()
	{
		$o = $this->_initialise();
		return new AmazonSNS($o);
	}

	public function get_sqs()
	{
		$o = $this->_initialise();
		return new AmazonSQS($o);
	}

	public function get_s3()
	{
		$o = $this->_initialise();
		return new AmazonS3($o);
	}


	public function get_pas()
	{
		$o = $this->_initialise();
		return new AmazonPAS($o);
	}


	private function _initialise()
	{
		if (!$this->_initialised) {
			$config_keys = array(
				'key',
				'secret',
				'certificate_authority'
			);
			$this->_config = $this->_CI->config->item('storage');
			foreach ($config_keys as $key) {
				$this->_options[$key] = $this->_config[$key];
			}
			$this->_initialised = true;
			return $this->_options;
		}
	}
}