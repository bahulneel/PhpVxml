<?php

namespace Vxml\Structure;

require_once 'TestCase.php';

/**
* @group structure
*/
class MenuTest extends TestCase
{

	public function getChildName()
	{
		return 'MenuChild';
	}

	public function getChildren()
	{
		$children = array(
			'Audio',
			'Choice',
			'Enumerate',
			'EventHandler',
			'Help',
			'Property',
			'Prompt',
			'Value'
		);
		$params = array();
		foreach ($children as $child) {
			$params[] = array($child);
		}
		return $params;
	}



}
