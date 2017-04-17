<?php

namespace Game\Data;

class WordBank
{	
	private $words = ['BALEIA', 'BOLA', 'BOCA', 'CARRO', 'CASA', 'FILTRO'];

	public function getRandom()
	{
		$index = rand(0, count($this->words)-1);
		return $this->words[$index];
	}
}