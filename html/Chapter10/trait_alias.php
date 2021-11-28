<?php
trait MyTrait1
{
	public function hoge()
	{
		print 'MyTrait1';
	}
}

trait MyTrait2
{
	public function hoge()
	{
		print 'MyTrait2';
	}
}

// MyTrait1／MyTrait2を有効化
class MyClass
{
	use MyTrait1, MyTrait2 {
		MyTrait1::hoge insteadof MyTrait2;
		MyTrait2::hoge as foo;
	}
}

$cls = new MyClass();
$cls->hoge();
$cls->foo();
