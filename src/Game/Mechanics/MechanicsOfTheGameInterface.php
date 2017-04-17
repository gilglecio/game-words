<?php

namespace Game\Mechanics;

interface MechanicsOfTheGameInterface
{
	public function getName();

	public function getDescription();

	public function attempt($word, $input);

	public function gameOver();

	public function getWord();

	public function finalResult();
}