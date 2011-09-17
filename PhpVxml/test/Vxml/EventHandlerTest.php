<?php

namespace Vxml;

class EventHandlerTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document
	 *
	 * @var Vxml\EventHandler
	 */
	protected $_handler = null;

	public function setUp()
	{
		$handler = new EventHandler();
		$this->_handler = $handler;
	}

	public function testIsANode()
	{
		$this->assertInstanceOf('Vxml\Node', $this->_handler);
	}

	public function testChildrenImplentChildList()
	{
		$nodeList = $this->_handler->getChildren();
		$this->assertInstanceOf('Vxml\EventHandler\ChildList', $nodeList);
	}

	public function testGetSetEvent()
	{
		$event = 'myEvent';
		$this->_handler->setEvent($event);
		$this->assertEquals($event, $this->_handler->getEvent());
	}

	public function testDefaultCountIsZero()
	{
		$this->assertSame(0, $this->_handler->getCount());
	}

	public function testSetCount()
	{
		$this->_handler->setCount(1);
		$this->assertEquals(1, $this->_handler->getCount());
	}

	public function testDefaultCondIsTrue()
	{
		$this->assertSame('true', $this->_handler->getCond());
	}

	public function testSetCond()
	{
		$this->_handler->setCond('false');
		$this->assertSame('false', $this->_handler->getCond());
	}
}
