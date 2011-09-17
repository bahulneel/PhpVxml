<?php

namespace Vxml\Structure;

require_once 'TestCase.php';

/**
* @group structure
*/
class FormTest extends TestCase
{

	public function getChildName()
	{
		return 'FormChild';
	}

	public function getChildren()
	{
		$children = array(
			'Block',
			'Data',
			'EventHandler',
			'Field',
			'Filled',
			'Grammar',
			'Initial',
			'Link',
			'Object',
			'Property',
			'Record',
			'Script',
			'Subdialog',
			'Transfer',
			'Variable',
		);
		$params = array();
		foreach ($children as $child) {
			$params[] = array($child);
		}
		return $params;
	}



}
