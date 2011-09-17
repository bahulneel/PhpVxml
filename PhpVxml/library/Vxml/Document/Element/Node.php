<?php

namespace Vxml\Document;

interface Element_Node extends Element, \Countable
{
	/**
	 * Adds a child to the document
	 *
	 * @param Structrure\VxmlChild $child A child element
	 */
	public function addChild(Element $child);
}
