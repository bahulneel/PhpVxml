<?php

namespace Vxml\Structure;

require_once 'TestCase.php';

/**
* @group structure
*/
class EventHandlerTest extends TestCase
{

	public function getChildName()
	{
		return 'EventHandlerChild';
	}

	public function getChildren()
	{
		$children = array(
			'Audio',
			'Assign',
			'Clear',
			'Data',
			'Disconnect',
			'Exit',
			'ForEach',
			'Goto',
			'If',
			'Log',
			'Prompt',
			'RePrompt',
			'Return',
			'Script',
			'Submit',
			'Throw',
			'Variable',
		);
		$params = array();
		foreach ($children as $child) {
			$params[] = array($child);
		}
		return $params;
	}



}
