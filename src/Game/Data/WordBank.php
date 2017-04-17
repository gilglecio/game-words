<?php

namespace Game\Data;

class WordBank
{
	private $words = ['FRODO', 'GANDALF', 'LEGOLAS', 'ARAGORN', 'SAURON', 'SARUMAN', 'ELFO', 'VALFENDA', 'SAM', 'CONDADO', 'ANÃO', 'HOBBIT', 'GOLUM'];

	public function getRandom()
	{
		$index = rand(0, count($this->words)-1);
		return $this->words[$index];
	}
}