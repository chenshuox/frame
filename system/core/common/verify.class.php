<?php

class Verify {

	private $image;

	private $textSzie;

	private $length;

	private $width;

	private $height;

	private $fontfile;

	private $code;

	private $padding;

	private $text = "AaBCDDcsdFERTsdfEdsfRsdfTJKHKJAHFsdfKJHSDKJFH112233445566778899SDFASDFASDF";

	//初始化
	public function __construct($size, $padding, $length) {
		$this->textSzie = $size;
		$this->length = $length;
		$this->padding = $padding;
		$this->width = $this->textSzie * $this->length + ($this->padding * 2);
		$this->height = ($this->textSzie) + ($this->padding) * 2;
		$this->fontfile = "monaco.ttf";
	}

	//创建图像
	private function createimg() {
		$this->image = imagecreatetruecolor($this->width, $this->height);
		$backgorund = imagecolorallocate($this->image, rand(100, 200), rand(100, 200), rand(100, 200));
		imagefilledrectangle($this->image, 0, 0, $this->width, $this->height, $backgorund);
	}

	//产生随机码
	private function createcode() {
		$textlength = strlen($this->text) - 1;
		for ($i = 0; $i < $this->length; $i++) {
			$this->code .= $this->text[rand(0, $textlength)];
		}
		return $this->code;
	}

	//生成文字
	private function createtext() {
		$color = imagecolorallocate($this->image, 255, 255, 255);
		imagettftext($this->image, $this->textSzie, 0, 0 + $this->padding, $this->height - $this->padding, $color, $this->fontfile, $this->code);

	}

	//添加干扰
	private function createobst() {
		$string = "oooo";
		$color = imagecolorallocate($this->image, rand(250, 255), rand(250, 255), rand(250, 255));
		for ($i = 0; $i < 10; $i++) {
			imagestring($this->image, 5, rand(0, $this->width), rand(0, $this->textSzie), $string, $color);
			imageline($this->image, rand(0, $this->width), rand(0, $this->textSzie), rand(0, $this->width), rand(0, $this->textSzie), $color);
		}
	}

	//输出图像
	private function outimage() {
		header('content-type:image/png');
		imagepng($this->image);
		imagedestroy($this->image);
	}

	//外部接口
	public function doimage() {
		$this->createimg();
		$this->createcode();
		$this->createobst();
		$this->createtext();
		$this->outimage();
	}

	public function getverify() {
		return strtolower($this->code);
	}

}

?>