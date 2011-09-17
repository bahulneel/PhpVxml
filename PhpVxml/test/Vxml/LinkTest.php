<?php

namespace Vxml;

class LinkTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document
	 *
	 * @var Vxml\Link
	 */
	protected $_link = null;

	public function setUp()
	{
		$link = new Link();
		$this->_link = $link;
	}

	public function testIsANode()
	{
		$this->assertInstanceOf('Vxml\Node', $this->_link);
	}

	public function testChildrenImplentChildList()
	{
		$nodeList = $this->_link->getChildren();
		$this->assertInstanceOf('Vxml\Link\ChildList', $nodeList);
	}

	// @TODO fetchaudio attribute
	// @TODO dtmf attribute
	// @TODO cache attributes
	// @TODO next attributes
	// @TODO throw attributes
}