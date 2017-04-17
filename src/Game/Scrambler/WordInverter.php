<?php

namespace Game\Scrambler;

class WordInverter implements ScramblerInterface
{
	public function shuffle($word)
	{
		return strrev($word);
	}
}