<?php

$infile = $_SERVER['argv'][1];

if (!file_exists($infile)) {
	die('File ' . $infile . ' not found');
}

$xml = simplexml_load_file($infile);

$coverage = new Coverage();
$coverage->fromXml($xml);

$coverage->render();

class Coverage
{
	protected $_project = null;

	public function fromXml(SimpleXMLElement $xml)
	{
		$project = new Coverage_Project();
		$project->fromXml($xml->project);
		$this->_project = $project;
	}

	public function render()
	{
		$this->_project->render();
	}
}

class Coverage_Project
{
	protected $_files = array();

	protected  $_metrics = null;

	public function fromXml(SimpleXMLElement $xml)
	{
		$files = array();
		foreach ($xml->file as $fileNode) {
			/* @var $file SimpleXMLElement */
			$file = new Coverage_File();
			$file->fromXml($fileNode);
			$files[] = $file;
		}
		$metrics = new Coverage_Metrics();
		$metrics->fromXml($xml->metrics);
		$this->_metrics = $metrics;
		$this->_files = $files;
	}

	public function render()
	{
		$this->printRow('File', array('statements', 'conditionals', 'methods'));
		$fileMetrics = array();
		foreach ($this->_files as $file) {
			$name = $file->getName();
			$metrics = $file->getMetrics();
			$fileMetrics[$name] = $metrics;
		}
		$fileMetrics = $this->cleanNames($fileMetrics);
		$fileMetrics['Total'] = $this->_metrics;

		foreach ($fileMetrics as $name => $metrics) {
			$this->printRow($name, array(
				$metrics->coveredStatements,
				$metrics->coveredConditionals,
				$metrics->coveredMethods
			));
		}
		// print_r($fileMetrics);
	}

	public function printRow($name, array $stats)
	{
		$this->printCol($name, 50);
		foreach ($stats as $stat) {
			if (is_numeric($stat) && $stat >= 0 && $stat <= 1) {
				$stat = number_format($stat, 2) . '%';
			}
			$this->printCol($stat, 13);
		}
		echo PHP_EOL;
	}

	public function printCol($name, $colWidth)
	{
		$length = strlen($name);
		$difference = $colWidth - $length;
		if ($difference < 1) {
			$name = '...' . substr($name, 4-$difference);
			$difference = 1;
		}
		echo $name;
		echo str_repeat(' ', $difference);
	}

	public function cleanNames(array $array)
	{
		$base = null;
		foreach ($array as $name => $value) {
			$parts = explode('/', $name);
			if (!$base) {
				$base = $parts;
				continue;
			}
			$newBase = array();
			foreach ($parts as $index => $part) {
				if (!isset($base[$index])) {
					break;
				}
				if ($base[$index] != $part) {
					break;
				}
				$newBase[] = $part;
			}
			$base = $newBase;
		}
		$newArray = array();
		$basePath = join('/', $base);
		foreach ($array as $name => $value) {
			$name = preg_replace('|^' . $basePath . '/|', '', $name);
			$newArray[$name] = $value;
		}
		return $newArray;
	}
}

class Coverage_Metrics
{
	public $coveredStatements = 0;
	public $coveredConditionals = 0;
	public $coveredMethods = 0;

	public function fromXml(SimpleXMLElement $xml)
	{
		$attributes = $xml->attributes();

		$coveredStatements = 0;
		$countStatements = intval($attributes->statements);
		$countCoveredStatements = intval($attributes->coveredstatements);
		if ($countCoveredStatements == $countStatements) {
			$coveredStatements = 1;
		} else if ($countCoveredStatements) {
			$coveredStatements = $countCoveredStatements / $countStatements;
		}

		$coveredConditionals = 0;
		$countConditionals = intval($attributes->conditionals);
		$countCoveredConditionals = intval($attributes->coveredconditionals);
		if ($countCoveredConditionals == $countConditionals) {
			$coveredConditionals = 1;
		} else if ($countCoveredConditionals) {
			$coveredConditionals = $countCoveredConditionals / $countConditionals;
		}

		$coveredMethods = 0;
		$countMethods = intval($attributes->methods);
		$countCoveredMethods = intval($attributes->coveredmethods);
		if ($countCoveredMethods == $countMethods) {
			$coveredMethods = 1;
		} else if ($countCoveredMethods) {
			$coveredMethods = $countCoveredMethods / $countMethods;
		}

		$this->coveredStatements = $coveredStatements;
		$this->coveredConditionals = $coveredConditionals;
		$this->coveredMethods = $coveredMethods;
	}
}

class Coverage_File
{
	protected $_name = null;

	protected $_metrics = null;
	protected $_classes = array();

	public function fromXml(SimpleXMLElement $xml)
	{
		$name = strval($xml->attributes()->name);
		$metrics = new Coverage_Metrics();
		$metrics->fromXml($xml->metrics);
		$this->_name = $name;
		$this->_metrics = $metrics;
	}

	public function getName()
	{
		return $this->_name;
	}

	public function getMetrics()
	{
		return $this->_metrics;
	}
}