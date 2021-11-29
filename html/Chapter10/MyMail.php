<?php
class MyMail
{
	// to（宛先）、subject（件名）、message（本文）プロパティを定義
	public $to;
	public $subject;
	public $message;
	// その他のヘッダ情報を格納するためのプライベート変数（連想配列）
	private $headers = [];
	// 未定義のプロパティを設定すると、$headersにその値をセット
	public function __set($name, $value)
	{
		$this->headers[$name] = $value;
	}

	// 未定義のプロパティを取得しようとすると、$headersから該当する値を取得
	public function __get($name)
	{
		return $this->headers[$name];
	}

	// 未定義のプロパティをisset関数で判定すると、$headersのキーをチェック
	public function __isset($name)
	{
		return isset($this->headers[$name]);
	}

	// 未定義のプロパティをunset関数で処理すると、$headersのキーを削除
	public function __unset($name)
	{
		unset($this->headers[$name]);
	}

	// プロパティ情報を基にメールを送信
	public function send()
	{
		// $headersの内容を基にヘッダ情報（改行区切り）を生成
		foreach ($this->headers as $key => $value) {
			// プロパティ名に含まれる「_」は「-」に変換
			$key = str_replace('_', '-', $key);
			$others .= "{$key}: {$value}\n";
		}
		// メールを送信
		mb_send_mail($this->to, $this->subject, $this->message, $others);
	}
}
