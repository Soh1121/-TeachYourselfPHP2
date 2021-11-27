<?php
require_once 'Figure.php';

class Triangle extends Figure
{
	// 三角形の面積を求めるためのgetAreaメソッドを定義
	public function getArea(): float
	{
		return $this->width * $this->height / 2;
	}
}
