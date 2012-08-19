<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

require_once  dirname(__FILE__) . '/aws-sdk-for-php/sdk.class.php';

class Awslib {

	protected $_CI;

	public function __construct($config = array()){
		$this->_CI =& get_instance();
		CFCredentials::set($config['storage']);
	}

	public function get_as()
	{
		return new AmazonAS();
	}

	public function get_cloudformation()
	{
		return new AmazonCloudFormation();
	}

	public function get_cloudfront()
	{
		return new AmazonCloudFront();
	}

	public function get_cloudwatch()
	{
		return new AmazonCloudWatch();
	}
	
	public function get_dynamodb()
	{
		return new AmazonDynamoDB();
	}

	public function get_ec2()
	{
		return new AmazonEC2();
	}

	public function get_beanstalk()
	{
		return new AmazonElasticBeanstalk();
	}

	public function get_elb()
	{
		return new AmazonELB();
	}

	public function get_emr()
	{
		return new AmazonEMR();
	}

	public function get_iam()
	{
		return new AmazonIAM();
	}

	public function get_importexport()
	{
		return new AmazonImportExport();
	}

	public function get_rds()
	{
		return new AmazonRDS();
	}

	public function get_sdb()
	{
		return new AmazonSDB();
	}

	public function get_ses()
	{
		return new AmazonSES();
	}

	public function get_sns()
	{
		return new AmazonSNS();
	}

	public function get_sqs()
	{
		return new AmazonSQS();
	}

	public function get_s3()
	{
		return new AmazonS3();
	}


	public function get_pas()
	{
		return new AmazonPAS();
	}

}