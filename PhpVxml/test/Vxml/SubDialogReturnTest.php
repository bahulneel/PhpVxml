<?php

namespace Vxml;

class SubDialogReturnTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document SubDialogReturn
	 *
	 * @subDialogReturn Vxml\SubDialogReturn
	 */
	protected $_subDialogReturn = null;

	public function setUp()
	{
		$subDialogReturn = new SubDialogReturn();
		$this->_subDialogReturn = $subDialogReturn;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_subDialogReturn);
	}

	// @TODO namelist attribute
	// @TODO event attribute
	// @TODO eventexpr attribute
	// @TODO message attribute
	// @TODO messageexpr attribute
}
