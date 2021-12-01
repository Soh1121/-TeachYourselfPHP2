<?php

class MyClass
{
	public $test1 = 1;
	public $test2 = 2;

	public function __get($name)
	{
		return "{$name}プロパティは存在しません。";
	}
}

$mc = new MyClass();
print $mc->test1;
print $mc->test11;
print $mc->test2;
