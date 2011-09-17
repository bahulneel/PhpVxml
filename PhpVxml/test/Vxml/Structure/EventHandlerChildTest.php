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
			'Ennumerate',
			'DialogExit',
			'ForEach',
			'Goto',
			'If',
			'Log',
			'Prompt',
			'RePrompt',
			'SubDialogReturn',
			'Script',
			'Submit',
			'EventThrow',
			'Variable',
			'Value'
		);
		$params = array();
		foreach ($children as $child) {
			$params[] = array($child);
		}
		return $params;
	}
}
