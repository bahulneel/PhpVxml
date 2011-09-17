<?php

namespace Vxml\Document;

class NodeList extends \ArrayObject
{
	protected $_acceptInterface = 'Vxml\Document\Element';

	public function __construct($array = null)
	{
		if (!interface_exists($this->_acceptInterface)) {
			throw new UnexpectedValueException('Interface does not exist ' . $this->_acceptInterface);
		}
		if ($array) {
			parent::__construct($array);
		} else {
			parent::__construct();
		}
	}
	public function offsetSet($index, $newval)
	{
		if (!($newval instanceof $this->_acceptInterface)) {
			throw new UnexpectedValueException('Item must implement ' . $this->_acceptInterface);
		}
		return parent::offsetSet($index, $newval);
	}
}
