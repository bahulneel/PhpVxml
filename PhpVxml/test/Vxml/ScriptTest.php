<?php

namespace Vxml;

class ScriptTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document Script
	 *
	 * @script Vxml\Script
	 */
	protected $_script = null;

	public function setUp()
	{
		$script = new Script();
		$this->_script = $script;
	}

	public function testSetGetSrc()
	{
		$src = "myScript";
		$this->_script->setSrc($src);
		$this->assertEquals($src, $this->_script->getSrc());
	}

	public function testSetGetSrcexpr()
	{
		$srcexpr = "mySrcexpr";
		$this->_script->setSrcexpr($srcexpr);
		$this->assertEquals($srcexpr, $this->_script->getSrcexpr());
	}

	public function testSetGetCharset()
	{
		$charset = "myCharset";
		$this->_script->setCharset($charset);
		$this->assertEquals($charset, $this->_script->getCharset());
	}

	// @TODO allow cdata/body
}
