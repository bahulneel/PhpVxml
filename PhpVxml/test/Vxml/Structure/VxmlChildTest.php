<?php

namespace Vxml\Structure;

class VxmlChildTest extends \PHPUnit_Framework_TestCase
{
	public function testEventHandlerImplementsVxmlChild()
	{
		$child = $this->getMock('\Vxml\Structure\EventHandler');
		$this->assertInstanceof('\Vxml\Structure\VxmlChild', $child);
	}
}
