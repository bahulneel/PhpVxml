<?php

namespace Vxml\Structure;

class VxmlChildTest extends \PHPUnit_Framework_TestCase
{
	public function testEventHandlerImplementsVxmlChild()
	{
		$child = $this->getMock('\Vxml\Structure\EventHandler');
		$this->assertInstanceOf('\Vxml\Structure\VxmlChild', $child);
	}

	public function testVariableImplementsVxmlChild()
	{
		$child = $this->getMock('\Vxml\Variable');
		$this->assertInstanceOf('\Vxml\Structure\VxmlChild', $child);
	}

	public function testPropertyImplementsVxmlChild()
	{
		$child = $this->getMock('\Vxml\Property');
		$this->assertInstanceOf('\Vxml\Structure\VxmlChild', $child);
	}

	public function testMetaImplementsVxmlChild()
	{
		$child = $this->getMock('\Vxml\Meta');
		$this->assertInstanceOf('\Vxml\Structure\VxmlChild', $child);
	}

}
