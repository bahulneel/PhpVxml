<?php

namespace Vxml\Document\Structure;

/**
 * @group structure
 */
abstract class TestCase extends \PHPUnit_Framework_TestCase
{
	abstract public function getChildName();
	abstract public function getChildren();

	/**
	* @dataProvider getChildren
	*/
	public function testChildImplementsElementChild($childName)
	{
		$elementFile = dirname(__FILE__) . '/../../../library/Vxml/' . $childName . '.php';
		if (!file_exists($elementFile)) {
			$this->markTestIncomplete($childName . ' not yet implemented');
		}
		$child = $this->getMock('\Vxml\\' . $childName);
		$name = $this->getChildName();
		$this->assertInstanceOf('\Vxml\Document\Structure\\' . $name, $child);
	}
}