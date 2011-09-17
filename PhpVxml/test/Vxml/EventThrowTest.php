<?php

namespace Vxml;

class EventThrowTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document EventThrow
	 *
	 * @eventThrow Vxml\EventThrow
	 */
	protected $_eventThrow = null;

	public function setUp()
	{
		$eventThrow = new EventThrow();
		$this->_eventThrow = $eventThrow;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_eventThrow);
	}

	// @TODO event attribute
	// @TODO eventexpr attribute
	// @TODO message attribute
	// @TODO messageexpr attribute
}
