<?php

namespace Vxml\EventHandler;

class ChildListTest extends \PHPUnit_Framework_TestCase
{
	/**
	 *
	 * @var Vxml\EventHandler\ChildList
	 */
	protected $_childList = null;

	public function setUp()
	{
		$childList = new ChildList();
		$this->_childList = $childList;
	}

	public function testExtendsNodeList()
	{
		$this->assertInstanceOf('Vxml\Document\NodeList', $this->_childList);
	}

	public function testCanAddAEventHandlerChild()
	{
		$child = $this->getMock('\Vxml\Structure\EventHandlerChild');
		$this->_childList[] = $child;
		$this->assertSame($child, $this->_childList[0]);
	}

	/**
	 * @expectedException UnexpectedValueException
	 */
	public function testCanOnlyAddAEventHandlerChild()
	{
		$child = $this->getMock('\Vxml\Document\Element');
		$this->_childList[] = $child;
	}
}