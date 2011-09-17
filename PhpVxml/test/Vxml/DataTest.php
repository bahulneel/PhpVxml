<?php

namespace Vxml;

class DataTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Data
	 *
	 * @data Vxml\Data
	 */
	protected $_data = null;

	public function setUp()
	{
		$data = new Data();
		$this->_data = $data;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_data);
	}

	public function testSetGetName()
	{
		$name = "myData";
		$this->_data->setName($name);
		$this->assertEquals($name, $this->_data->getName());
	}

	public function testSetGetSrc()
	{
		$src = "mySrc";
		$this->_data->setSrc($src);
		$this->assertEquals($src, $this->_data->getSrc());
	}

	public function testSetGetSrcExpr()
	{
		$src = "mySrc";
		$this->_data->setSrcExpr($src);
		$this->assertEquals($src, $this->_data->getSrcExpr());
	}

	public function testSetGetFetchAudio()
	{
		$src = "mySrc";
		$this->_data->setFetchAudio($src);
		$this->assertEquals($src, $this->_data->getFetchAudio());
	}

	// @TODO: cache attributes
	// @TODO: submit attributes
}
