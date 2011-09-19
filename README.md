PhpVxml
-------

The PhpVxml project is an attempt to implement the [VoiceXML 2.0](http://www.w3.org/TR/voicexml20/) and [VoiceXML 2.1](http://www.w3.org/TR/voicexml21/) W3C standards entirely in PHP.

When complete it will consist of the following sub-components:

 1. PhpVxml - PHP VXML Parser/Generator
 2. PhpVxml\Lint - VXML lint/static analysis tool
 3. PhpVxml\Unit - VXML Unit testing framework
 4. PhpVxml\Browser - A working VXML implementation in PHP

The initial plan is to only support 2.1 and above of the spec however it will allow the addition of browser extensions.  This will also allow a user to restrict the parser to the 2.0 spec if they so wish.

At the moment only the parse/generator is being actively developed, with the lint tool to follow once the ability to read source files has been added.
