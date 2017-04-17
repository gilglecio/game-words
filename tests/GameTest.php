<?php

use PHPUnit\Framework\TestCase;

class ScramblersTest extends TestCase
{
	public function testWordInverter()
	{
		$inverter = new Game\Scrambler\WordInverter();
		$result = $inverter->shuffle('GILGLECIO');

		$this->assertEquals('OICELGLIG', $result);
	}

	public function testSwapOddEven()
	{
		$inverter = new Game\Scrambler\SwapOddEven();
		$result = $inverter->shuffle('GILGLECIO');

		$this->assertEquals('IGGLELICO', $result);
	}
}