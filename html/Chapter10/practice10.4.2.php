<?php
class MyClass
{
	protected $data;
	public function __construct(string $data)
	{
		$this->data = $data;
	}
	public function getData(): string
	{
		return $this->data;
	}
}

class MySubClass extends MyClass
{
	public function getData(): string
	{
		return '[' . parent::getData() . ']';
	}
}

$msc = new MySubClass('テスト');
echo $msc->getData();
