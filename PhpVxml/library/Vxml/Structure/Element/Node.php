<?php

abstract class Element_Node
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
	public function numChildren()
	{
		return count($this->_children);
	}

	/**
	 * Adds a child to the document
	 *
	 * @param Structrure\VxmlChild $child A child element
	 */
	public function addChild(Structure\VxmlChild $child)
	{
		$this->_children[] = $child;
	}
}
