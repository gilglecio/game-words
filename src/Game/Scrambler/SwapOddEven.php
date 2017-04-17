<?php

namespace Game\Scrambler;

class SwapOddEven implements ScramblerInterface
{
	public function shuffle($word)
	{
		$chars = str_split($word);
		$output = [];

		foreach ($chars as $key => $value) {
			if ($key % 2 != 0) {
				$output[] = $chars[$key];
				$output[] = $chars[$key-1];
			} else if ($key == count($chars)-1) {
				$output[] = $chars[$key];
			}
		}

		return implode('', $output);
	}
}