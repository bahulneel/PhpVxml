<?php

namespace Vxml;

class VxmlTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * VXML Document
	 *
	 * @var Vxml\Vxml
	 */
	protected $_vxml = null;

	public function setUp()
	{
		$vxml = new Vxml();
		$this->_vxml = $vxml;
	}

	public function testSetGetApplication()
	{
		$application = 'http://www.example.com/root.vxml';
		$this->_vxml->setApplication($application);
		$this->assertEquals($application, $this->_vxml->getApplication());
	}

	public function testSetGetBase()
	{
		$base = 'http://www.example.com/';
		$this->_vxml->setBase($base);
		$this->assertEquals($base, $this->_vxml->getBase());
	}

	public function testSetGetLang()
	{
		$lang = 'en-GB';
		$this->_vxml->setLang($lang);
		$this->assertEquals($lang, $this->_vxml->getLang());
	}

	public function testSetGetVersion()
	{
		$version = '2.1';
		$this->_vxml->setVersion($version);
		$this->assertEquals($version, $this->_vxml->getVersion());
	}
}
