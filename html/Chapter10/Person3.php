<?php
class Person
{
	public $firstName;
	public $lastName;

	public function show()
	{
		print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。</p>";
	}
}
