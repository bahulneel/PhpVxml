<?php
/**
 * PHP VXML
 *
 * PHP Version 5.3
 *
 * Copyright (c) 2011, Bahul Neel Upadhyaya <bahulneel@gmail.com>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Sebastian Bergmann nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @category PhpVxml
 * @package Vxml\Vxml
 * @subpackage UnitTests
 * @author Bahul Neel Upadhyaya <bahulneel@gmail.com>
 * @copyright  2011 Bahul Neel Upadhyaya <bahulneel@gmail.com>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 */

namespace Vxml;

class Vxml
{
	/**
	 * The URI of this document's application root document, if any
	 *
	 * @var string
	 */
	protected $_application = null;

	/**
	 * The base URI for this document
	 *
	 * A URI which all relative references within the document take as their base.
	 *
	 * @var string
	 */
	protected $_base = null;

	/**
	 * The language identifier for this document.
	 *
	 * If omitted, the value is a platform-specific default.
	 *
	 * @var string
	 */
	protected $_lang = 'en-GB';

	/**
	 * The version of VoiceXML of this document
	 *
	 * @var string
	 */
	protected $_version = null;

	/**
	 * Child elements
	 *
	 * @var array
	 */
	protected $_children = array();

	/**
	 * Sets the application/root document
	 *
	 * @param string $application The root document
	 *
	 * @return void
	 */
	public function setApplication($application)
	{
		$this->_application = $application;
	}

	/**
	 * Returns the root document
	 *
	 * @return string The root document
	 */
	public function getApplication()
	{
		return $this->_application;
	}

	/**
	 * Sets base Uri
	 *
	 * @param string $base The base uri
	 */
	public function setBase($base)
	{
		$this->_base = $base;
	}

	/**
	 * Gets base uri
	 *
	 * @return string The base uri
	 */
	public function getBase()
	{
		return $this->_base;
	}

	/**
	 * Sets the language
	 *
	 * @param string $lang The language
	 */
	public function setLang($lang)
	{
		$this->_lang = $lang;
	}

	/**
	 * Gets the language
	 *
	 * @return string The language
	 */
	public function getLang()
	{
		return $this->_lang;
	}

	/**
	 * Sets the version
	 *
	 * @param string $version The version
	 */
	public function setVersion($version)
	{
		$this->_version = $version;
	}

	/**
	 * Gets the version
	 *
	 * @return string The version
	 */
	public function getVersion()
	{
		return $this->_version;
	}

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