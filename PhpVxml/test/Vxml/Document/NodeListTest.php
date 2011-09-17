<?php

namespace Vxml\Document;

class NodeListTest extends \PHPUnit_Framework_TestCase
{
	/**
	* NodeList
	*
	* @var Vxml\Document\NodeList
	*/
	protected $_nodeList = null;

	public function setUp()
	{
		$nodeList = new NodeList();
		$this->_nodeList = $nodeList;
	}

	public function testDefaultNumberOfChildrenIs0()
	{
		$this->assertEquals(0, $this->_nodeList->count());
	}

	/**
	 * @depends testDefaultNumberOfChildrenIs0
	 */
	public function testAddChildUpdatesChildCount()
	{
		$child = $this->getMock('\Vxml\Document\Element');
		$this->_nodeList[] = $child;
		$this->assertEquals(1, $this->_nodeList->count());
	}

	public function testCanInititaliseWithArray()
	{
		$array = array(
			$this->getMock('\Vxml\Document\Element')
		);
		$nodeList = new NodeList($array);
		$this->assertEquals(1, $nodeList->count());
	}

	/**
	 * @expectedException UnexpectedValueException
	 */
	public function testAddindNonEmelentThrows()
	{
		$this->_nodeList[] = new \stdClass;
	}
}
