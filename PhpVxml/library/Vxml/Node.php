<?php

namespace Vxml;

use Vxml\Document\Element;
use Vxml\Document\NodeList;

abstract class Node implements Document\Node
{
	/**
	* Child elements
	*
	* @var \Vxml\Document\NodeList
	*/
	protected $_children = null;

	public function __construct()
	{
		$this->_children = new NodeList();
	}

	/**
	 * Gets the number of children
	 *
	 * @return integer the number of children
	 */
	public function count()
	{
		return count($this->_children);
	}

	/**
	 * Adds a child to the document
	 *
	 * @param Structrure\VxmlChild $child A child element
	 */
	public function addChild(Element $child)
	{
		$this->_children[] = $child;
	}
}