<?php

class MagicMethod
{
	private function foo(string $name)
	{
		echo $name;
	}

	public static function __callStatic($name, $arguments)
	{
		if ('foo' === $name) { self::foo($arguments[0]);
		} else {
			throw new Error(sprintf('Undefined method %s on class %s', $name, __CLASS__));
		}
	}
}


MagicMethod::foo('Surya'); 
echo PHP_EOL;