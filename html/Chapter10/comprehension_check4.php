<?php
interface Animal
{
	function outputVoice(): string;
}

class Cat implements Animal
{
	public final function outputVoice(): string
	{
		return 'ニャァ';
	}
}

class Dog implements Animal
{
	public final function outputVoice(): string
	{
		return 'バゥ';
	}
}

$cat = new Cat();
print $cat->outputVoice();
$dog = new Dog();
print $dog->outputVoice();
