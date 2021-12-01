<?php
class Person
{
	public $firstName;
	public $lastName;

	public function __construct(string $firstName, string $lastName)
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	public function __toString()
	{
		return $this->lastName . $this->firstName;
	}

	public function show()
	{
		print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
	}
}
