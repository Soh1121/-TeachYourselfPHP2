<?php
require_once 'MachineTrait.php';

class Fax
{
	// MachineTraitトレイトをインポート
	use MachineTrait;

	// Faxを送信
	public function send()
	{
		print 'sending Fax...sended!';
	}
}

$fx = new Fax();
$fx->run();
$fx->send();
