<?php
abstract class Figure
{
	// プロパティを定義（protected修飾子で制限）
	protected $width;
	protected $height;
	// コンストラクタ（プロパティを初期化）
	public function __construct(float $width, float $height)
	{
		$this->width = $width;
		$this->height = $height;
	}

	protected abstract function getArea(): float;
}
