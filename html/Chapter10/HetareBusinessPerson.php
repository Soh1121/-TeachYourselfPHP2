<?php
require_once 'BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson
{
	// BusinessPersonクラスのworkメソッドをオーバライド
	public function work()
	{
		parent::work();
		print 'ただし、ボチボチと…';
	}
}
