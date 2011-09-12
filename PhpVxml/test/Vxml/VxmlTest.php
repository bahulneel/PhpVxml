<?php

namespace Vxml;

class VxmlTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document
	 * 
	 * @var Vxml\Vxml
	 */
	protected $_vxml = null;
	
	public function setUp()
	{
		$vxml = new Vxml();
		$this->_vxml = $vxml;
	}
	
	public function testSetGetApplication()
	{
		$application = 'http://www.example.com/root.vxml';
		$this->_vxml->setApplication($application);
		$this->assertEquals($application, $this->_vxml->getApplication());
	}
	
}
