<?php

namespace Game;

class Main
{
	public function run()
	{
		$factory = new \Game\Mechanics\MechanicsFactory;
		$mechanic = $factory->get();

		echo "\n\n::::: Bem Vindo ao PALAVRAS DIVERTIDAS :::::\n\n";
		echo "Você vai jogar no modo: " . $mechanic->getName() . "\n";
		echo "Descrição: " . $mechanic->getDescription() . "\n\n";

		while (!$mechanic->gameOver()) {
			
			$word = $mechanic->getWord();
			$scrambler = (new \Game\Scrambler\ScramblerFactory)->getRandom();
			$word_suffler = $scrambler->shuffle($word);
			$input = readline("Adivinhe qual a palavra: {$word_suffler} -> ");
			$result = $mechanic->attempt($word, strtoupper($input));

			echo "{$result}\n\n";
		}

		echo "{$mechanic->finalResult()}\n\n";
	}
}