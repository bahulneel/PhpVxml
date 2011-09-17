<?php

namespace Vxml;

class RePromptTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document RePrompt
	 *
	 * @rePrompt Vxml\RePrompt
	 */
	protected $_rePrompt = null;

	public function setUp()
	{
		$rePrompt = new RePrompt();
		$this->_rePrompt = $rePrompt;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_rePrompt);
	}
}
