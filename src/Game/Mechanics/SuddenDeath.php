<?php

namespace Game\Mechanics;

class SuddenDeath implements MechanicsOfTheGameInterface
{
	private $hits = 0;
	private $has_error = false;
	private $word_bank;

	public function __construct()
	{
		$this->word_bank = new \Game\Data\WordBank;
	}

	public function getName()
	{
		return 'MORTE SÚBITA';
	}

	public function getDescription()
	{
		return 'Tente adivinhar a palavra até errar';
	}

	public function attempt($word, $input)
	{
		if ($word == $input) {
			$this->hits++;
			return "Acertou! Quero ver se acerta a proxima";
		}

		$this->has_error = true;

		return 'Errou feio!!!';
	}

	public function gameOver()
	{
		return $this->has_error;
	}

	public function getWord()
	{
		return $this->word_bank->getRandom();
	}

	public function finalResult()
	{
		return "Você conseguiu acertar {$this->hits} palavras";
	}
}