<?php

namespace Vxml\Document\Structure;

require_once 'TestCase.php';

/**
* @group structure
*/
class LinkTest extends TestCase
{

	public function getChildName()
	{
		return 'LinkChild';
	}

	public function getChildren()
	{
		$children = array(
			'Grammar',
		);
		$params = array();
		foreach ($children as $child) {
			$params[] = array($child);
		}
		return $params;
	}



}
