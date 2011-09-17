<?php

namespace Vxml;

class VariableTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document Var
	 *
	 * @var Vxml\Variable
	 */
	protected $_var = null;

	public function setUp()
	{
		$var = new Variable();
		$this->_var = $var;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_var);
	}

	public function testSetGetName()
	{
		$name = "myVariable";
		$this->_var->setName($name);
		$this->assertEquals($name, $this->_var->getName());
	}

	public function testSetGetExpr()
	{
		$expr = "x = 1;";
		$this->_var->setExpr($expr);
		$this->assertEquals($expr, $this->_var->getExpr());
	}
}
