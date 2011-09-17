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
 *   * Neither the name of Bahul Neel Upadhyaya nor the names of his
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
 * @package Vxml
 * @author Bahul Neel Upadhyaya <bahulneel@gmail.com>
 * @copyright  2011 Bahul Neel Upadhyaya <bahulneel@gmail.com>
 * @license    http://www.opensource.org/licenses/bsd-license.php  BSD License
 */

namespace Vxml;

/**
 * Vxml Var
 *
 * Srcs Script as Var is a reserved word
 *
 * @category PhpVxml
 * @package Vxml
 * @author Bahul Neel Upadhyaya <bahulneel@gmail.com>
 */
class Script extends Node implements Structure\VxmlChild
{
	/**
	 * Script Src
	 *
	 * @var string
	 */
	protected $_src = null;

	/**
	 * Script srcexpr
	 *
	 * @var string
	 */
	protected $_srcexpr = null;

	/**
	 * Script http-equiv
	 *
	 * @var string
	 */
	protected $_charset = null;

	/**
	 * Sets the vars src
	 *
	 * @param string $src the variable src
	 *
	 * @return void
	 */
	public function setSrc($src)
	{
		$this->_src = $src;
	}

	/**
	 * Gets the variable src
	 *
	 * @return string The variables src
	 */
	public function getSrc()
	{
		return $this->_src;
	}

	/**
	 * Sets the srcexpr
	 *
	 * @param string $srcexpr
	 *
	 * @return void
	 */
	public function setSrcexpr($srcexpr)
	{
		$this->_srcexpr = $srcexpr;
	}

	/**
	 * Gets the srcexpr
	 *
	 * @return string The ECMAScript srcexpression
	 */
	public function getSrcexpr()
	{
		return $this->_srcexpr;
	}

	/**
	 * Sets the http-equiv
	 *
	 * @param string $charset
	 *
	 * @return void
	 */
	public function setCharset($charset)
	{
		$this->_charset = $charset;
	}

	/**
	 * Gets the srcexpr
	 *
	 * @return string The ECMAScript srcexpression
	 */
	public function getCharset()
	{
		return $this->_charset;
	}
}
