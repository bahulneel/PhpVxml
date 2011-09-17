<?php

namespace Vxml;

class NodeTest extends \PHPUnit_Framework_TestCase
{
	/**
	* Node
	*
	* @var Vxml\Node
	*/
	protected $_node = null;

	public function setUp()
	{
		$node = new Node();
		$this->_node = $node;
	}

	public function testChildrenImplementsNoseList()
	{
		$this->assertInstanceOf('Vxml\Document\NodeList', $this->_node->getChildren());
	}

	public function testStartsWithNoChildren()
	{
		$this->assertEquals(0, count($this->_node));
	}

	public function testAddingChildUpdatesList()
	{
		$child = $this->getMock('\Vxml\Document\Element');
		$this->_node->addChild($child);
		$this->assertEquals(1, count($this->_node));
	}

	public function testAddingChildAddsActualChild()
	{
		$child = $this->getMock('\Vxml\Document\Element');
		$this->_node->addChild($child);
		$nodeList = $this->_node->getChildren();
		$this->assertSame($child, $nodeList[0]);
	}
}
