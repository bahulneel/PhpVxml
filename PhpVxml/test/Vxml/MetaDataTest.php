<?php

namespace Vxml;

class MetaDataTest extends \PHPUnit_Framework_TestCase
{
	/**
	* VXML MetaData
	*
	* @var Vxml\MetaData
	*/
	protected $_metaData = null;

	public function setUp()
	{
		$metaData = new MetaData();
		$this->_metaData = $metaData;
	}

	public function testIsANode()
	{
		$this->assertInstanceOf('Vxml\Node', $this->_metaData);
	}
}
