<?php

namespace Game\Scrambler;

class ScramblerFactory
{
	private $scramblers = [];

	public function __construct()
	{
		$this->scramblers = [
			new WordInverter(),
			new SwapOddEven()
		];
	}

	public function getRandom()
	{
		$index = rand(0, count($this->scramblers)-1);
		return $this->scramblers[$index];
	}
}