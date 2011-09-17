<?php

namespace Vxml;

class DialogExitTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document DialogExit
	 *
	 * @dialogExit Vxml\DialogExit
	 */
	protected $_dialogExit = null;

	public function setUp()
	{
		$dialogExit = new DialogExit();
		$this->_dialogExit = $dialogExit;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_dialogExit);
	}

	// @TODO namelist attribute
	// @TODO expr attribute
}
