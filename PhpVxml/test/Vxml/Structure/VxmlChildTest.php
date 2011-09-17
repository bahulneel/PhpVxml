<?php

namespace Vxml\Structure;

require_once 'TestCase.php';

/**
* @group structure
*/
class VxmlChildTest extends TestCase
{

	public function getChildName()
	{
		return 'VxmlChild';
	}

	public function getChildren()
	{
		$children = array(
			'Data',
			'EventHandler',
			'Form',
			'Link',
			'Menu',
			'Meta',
			'MetaData',
			'Property',
			'Script',
			'Variable'
		);
		$params = array();
		foreach ($children as $child) {
			$params[] = array($child);
		}
		return $params;
	}



}
