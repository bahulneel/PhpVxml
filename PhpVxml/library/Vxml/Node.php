<?php

namespace Vxml;

use Vxml\Document\Element;

abstract class Node implements Document\Element_Node
{
	/**
	* Child elements
	*
	* @var array
	*/
	protected $_children = array();

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