<?php

namespace Game\Mechanics;

class MechanicsFactory
{
	public function get()
	{
		return new FiveEndlessAttemptsOfWords();
	}
}