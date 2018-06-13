<?php

namespace TinTran\ImageChecker;

class ImageChecker {

	private $image;
	private $version;

	public function __construct($src) {
		if(file_exists($src)) {
			$this->image = $src;	
		} else {
			$this->image = $src;
		}		
		$this->getImageVersion();
	}

	public function getImageVersion() {
		$fp = fopen($this->image, 'rb');
		$data = fread ($fp, 20);
	 	$header_format = 'A6version';
		$header = unpack ($header_format, $data);
		$this->version = ($header['version']);
	}

	public function getImageFormat() {
		if(strpos($this->version, "\xFF\xD8\xFF") !== false) return 'JPG';
		if(strpos($this->version, "\x89\x50\x4e") !== false) return 'PNG';
		if(strpos($this->version, "GIF") !== false) return 'GIF';
		if(strpos($this->version, "BM") !== false) return 'BMP';
		return 'unknown';
	}

	public function isJPG()	{
		if(strpos($this->version, "\xFF\xD8\xFF") !== false) return true;
		return false;
	}

	public function isPNG() {
		if(strpos($this->version, "\x89\x50\x4e") !== false) return true;
		return false;
	}

	public function isGIF() {
		if(strpos($this->version, "GIF") !== false) return true;
		return false;
	}

	public function isBMP() {
		if(strpos($this->version, "BM") !== false) return true;
		return false;
	}

}