<?php

class PPH21Calculator
{
	private function firstRule(float $pkp): float
	{
		if (0 < $pkp && 50000000 >= $pkp) {
			return $pkp * 0.05;
		}
		return 0;
	}

	private function secondRule(float $pkp): float
	{
		if (50000000 < $pkp && 250000000 >= $pkp) {
			$pkp -= 50000000;
			$prev = $this->firstRule(50000000);
			return ($pkp * 0.15) + $prev;
		}
		return 0;
	}

	private function thirdRule(float $pkp): float
	{
		if (250000000 < $pkp && 500000000 >= $pkp) {
			$pkp -= 250000000;
			$prev = $this->secondRule(250000000);
			return ($pkp * 0.25) + $prev;
		}
		return 0;
	}

	private function fourthRule(float $pkp): float
	{
		if (500000000 < $pkp && 10000000000000000 >= $pkp) {//> 500jt
			$pkp -= 500000000;
			$prev = $this->thirdRule(500000000);
			return ($pkp * 0.3) + $prev;
		}
		return 0;
	}

	public function calculate(float $pkp): float
	{
		return $this->firstRule($pkp) ?: $this->secondRule($pkp) ?: $this->thirdRule($pkp) ?: $this->fourthRule($pkp);
	}
}

$pph21 = new PPH21Calculator();

//1250000
echo $pph21->calculate(25000000);
echo PHP_EOL;
//1500000
echo $pph21->calculate(30000000);
echo PHP_EOL;
//2250000
echo $pph21->calculate(45000000);
echo PHP_EOL;
//2500000
echo $pph21->calculate(50000000);
echo PHP_EOL;
//4000000
echo $pph21->calculate(60000000);
echo PHP_EOL;
//6250000
echo $pph21->calculate(75000000);
echo PHP_EOL;
//32500000
echo $pph21->calculate(250000000);
echo PHP_EOL;
//45000000
echo $pph21->calculate(300000000);
echo PHP_EOL;
//82500000
echo $pph21->calculate(450000000);
echo PHP_EOL;
//170000000
echo $pph21->calculate(750000000);
echo PHP_EOL;