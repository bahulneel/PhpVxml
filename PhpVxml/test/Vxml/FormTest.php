<?php

namespace Vxml;

class FormTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document
	 *
	 * @var Vxml\Form
	 */
	protected $_form = null;

	public function setUp()
	{
		$form = new Form();
		$this->_form = $form;
	}

	public function testIsANode()
	{
		$this->assertInstanceOf('Vxml\Node', $this->_form);
	}

	public function testChildrenImplentChildList()
	{
		$nodeList = $this->_form->getChildren();
		$this->assertInstanceOf('Vxml\Form\ChildList', $nodeList);
	}

	public function testSetGetId()
	{
		$id = 'myId';
		$this->_form->setId($id);
		$this->assertEquals($id, $this->_form->getId());
	}

	public function testSetGetScope()
	{
		$scope = 'myScope';
		$this->_form->setScope($scope);
		$this->assertEquals($scope, $this->_form->getScope());
	}
}
