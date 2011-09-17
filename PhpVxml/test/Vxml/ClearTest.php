<?php

namespace Vxml;

class ClearTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document Clear
	 *
	 * @clear Vxml\Clear
	 */
	protected $_clear = null;

	public function setUp()
	{
		$clear = new Clear();
		$this->_clear = $clear;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_clear);
	}

	// @TODO namelist attribute
}
