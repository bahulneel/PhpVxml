<?php

namespace Vxml;

class MenuTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document
	 *
	 * @var Vxml\Menu
	 */
	protected $_menu = null;

	public function setUp()
	{
		$menu = new Menu();
		$this->_menu = $menu;
	}

	public function testIsANode()
	{
		$this->assertInstanceOf('Vxml\Node', $this->_menu);
	}

	public function testChildrenImplentChildList()
	{
		$nodeList = $this->_menu->getChildren();
		$this->assertInstanceOf('Vxml\Menu\ChildList', $nodeList);
	}

	public function testSetGetId()
	{
		$id = 'myId';
		$this->_menu->setId($id);
		$this->assertEquals($id, $this->_menu->getId());
	}

	public function testSetGetScope()
	{
		$scope = 'myScope';
		$this->_menu->setScope($scope);
		$this->assertEquals($scope, $this->_menu->getScope());
	}

	// @TODO accept attribute
	// @TODO dtmf attribute
}
