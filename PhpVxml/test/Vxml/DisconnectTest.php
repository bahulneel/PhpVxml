<?php

namespace Vxml;

class DisconnectTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document Disconnect
	 *
	 * @disconnect Vxml\Disconnect
	 */
	protected $_disconnect = null;

	public function setUp()
	{
		$disconnect = new Disconnect();
		$this->_disconnect = $disconnect;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_disconnect);
	}

	// @TODO namelist attribute
}
