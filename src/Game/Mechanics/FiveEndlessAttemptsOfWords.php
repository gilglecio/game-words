<?php

namespace Game\Mechanics;

class FiveEndlessAttemptsOfWords implements MechanicsOfTheGameInterface
{
	private $number_of_words_played = 0;
	private $current_word;
	private $points = 0;
	private $word_bank;

	public function __construct()
	{
		$this->word_bank = new \Game\Data\WordBank;
		$this->current_word = $this->word_bank->getRandom();
	}

	public function getName()
	{
		return 'TENTE A VONTADE COM CINCO PALAVRAS';
	}

	public function getDescription()
	{
		return 'Tente fazer o máximo de pontos com 5 palavras';
	}

	public function attempt($word, $input)
	{
		if ($word == $input) {
			$this->up();
			$this->current_word = $this->word_bank->getRandom();
			$this->number_of_words_played++;

			return 'Acertou| Você ganhou 100 pontos';
		}

		$this->down();

		return 'Não deu. Perdeu 50 pontos... Tente de novo!';
	}

	private function up()
	{
		$this->points += 100;
	}

	private function down()
	{
		if ($this->points > 0) {
			$this->points -= 50;
		}
	}

	public function gameOver()
	{
		return $this->number_of_words_played == 5;
	}

	public function getWord()
	{
		return $this->current_word;
	}

	public function finalResult()
	{
		return "Você conseguiu {$this->points} pontos";
	}
}