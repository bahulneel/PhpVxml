<?php

namespace Vxml;

class DisconnectTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document Disconnect
	 *
	 * @clear Vxml\Disconnect
	 */
	protected $_clear = null;

	public function setUp()
	{
		$clear = new Disconnect();
		$this->_clear = $clear;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_clear);
	}

	// @TODO namelist attribute
}
