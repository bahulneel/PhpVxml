<?php

namespace Vxml\Document;

interface Node extends Element, \Countable
{
	/**
	 * Adds a child to the document
	 *
	 * @param Structrure\VxmlChild $child A child element
	 */
	public function addChild(Element $child);
}
