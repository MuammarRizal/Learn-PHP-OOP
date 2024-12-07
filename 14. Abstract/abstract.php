<?php

abstract class AbstractTaxCalculator
{
	private $previous;

	abstract public function maxPtkp();
	abstract public function minPtkp();
	abstract public function taxPercentage(); 
	public function getPrevious()
	{
		return $this->previous;
	}

	public function setPrevious($taxCalculator)
	{
		$this->previous = $taxCalculator;
	}

	public function calculate($ptkp)
	{
		$previousValue = 0;
		if ($previous = $this->getPrevious()) {
			$previousValue = $this->getPrevious()->calculate($previous->maxPtkp());
			$ptkp -= $previous->maxPtkp();
		}

		return ($this->taxPercentage() * $ptkp) + $previousValue;
	}

	public function isSupportPtkp($ptkp)
	{
		if ($ptkp < $this->maxPtkp() && $ptkp >= $this->minPtkp()) {

			return true;
		}

		return false;
	}
}