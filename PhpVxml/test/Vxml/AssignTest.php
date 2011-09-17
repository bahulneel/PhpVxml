<?php

namespace Vxml;

class AssignTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document Assign
	 *
	 * @assign Vxml\Assign
	 */
	protected $_assign = null;

	public function setUp()
	{
		$assign = new Assign();
		$this->_assign = $assign;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_assign);
	}

	public function testSetGetName()
	{
		$name = "myAssign";
		$this->_assign->setName($name);
		$this->assertEquals($name, $this->_assign->getName());
	}

	public function testSetGetExpr()
	{
		$expr = "x = 1;";
		$this->_assign->setExpr($expr);
		$this->assertEquals($expr, $this->_assign->getExpr());
	}
}
