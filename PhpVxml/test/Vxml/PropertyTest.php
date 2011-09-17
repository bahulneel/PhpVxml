<?php

namespace Vxml;

class PropertyTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document Property
	 *
	 * @property Vxml\Property
	 */
	protected $_property = null;

	public function setUp()
	{
		$property = new Property();
		$this->_property = $property;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_property);
	}

	public function testSetGetName()
	{
		$name = "myProperty";
		$this->_property->setName($name);
		$this->assertEquals($name, $this->_property->getName());
	}

	public function testSetGetValue()
	{
		$value = "meValue";
		$this->_property->setValue($value);
		$this->assertEquals($value, $this->_property->getValue());
	}
}
