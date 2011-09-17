<?php

namespace Vxml;

class MetaTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document Meta
	 *
	 * @meta Vxml\Meta
	 */
	protected $_meta = null;

	public function setUp()
	{
		$meta = new Meta();
		$this->_meta = $meta;
	}

	public function testIsALeaf()
	{
		$this->assertInstanceOf('Vxml\Document\Leaf', $this->_meta);
	}

	public function testSetGetName()
	{
		$name = "myMeta";
		$this->_meta->setName($name);
		$this->assertEquals($name, $this->_meta->getName());
	}

	public function testSetGetContent()
	{
		$content = "myContent";
		$this->_meta->setContent($content);
		$this->assertEquals($content, $this->_meta->getContent());
	}

	public function testSetGetHttpEquiv()
	{
		$httpEquiv = "myHttpEquiv";
		$this->_meta->setHttpEquiv($httpEquiv);
		$this->assertEquals($httpEquiv, $this->_meta->getHttpEquiv());
	}
}
