<?php

use TinTran\ImageChecker\ImageChecker;
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {

	public function testInstantiateImageByPath() {
		$path = 'tests/resources/90184.jpg';
		$img = new ImageChecker($path);
		$this->assertInstanceOf(ImageChecker::class, $img);
	}

	public function testCreateImageBySource() {
		$src = 'https://www.w3schools.com/css/img_fjords.jpg';
		$img = new ImageChecker($src);
		$this->assertInstanceOf(ImageChecker::class, $img);
	}

	public function testJPGImage() {
		$src = 'https://pbs.twimg.com/profile_images/54789364/JPG-logo-highres.jpg';
		$img = new ImageChecker($src);
		$this->assertEquals('JPG', $img->getImageFormat());
	}

	public function testPNGImage() {
		$src = 'http://www.pngpix.com/wp-content/uploads/2016/03/Guitar-PNG-Image.png';
		$img = new ImageChecker($src);
		$this->assertEquals('PNG', $img->getImageFormat());
	}	

	public function testGIFImage() {
		$src = 'http://www.thisiscolossal.com/wp-content/uploads/2014/03/120430.gif';
		$img = new ImageChecker($src);
		$this->assertEquals('GIF', $img->getImageFormat());
	}

	public function testBMPImage() {
		$src = 'https://www.janome.com/inspire/Embroidery/fish-bmp-design-from-digitizer-10000/fish-bmp-design-from-digitizer-10000/dig10k_fish.bmp';
		$img = new ImageChecker($src);
		$this->assertEquals('BMP', $img->getImageFormat());
	}

	public function testJPEGImage() {
		$path = 'tests/resources/90204.jpeg';
		$img = new ImageChecker($path);
		$this->assertEquals('JPG', $img->getImageFormat());
	}

	public function testIsJPGFunction() {
		$src = 'https://pbs.twimg.com/profile_images/54789364/JPG-logo-highres.jpg';
		$img = new ImageChecker($src);
		$this->assertEquals(true, $img->isJPG());
	}

	public function testIsPNGFunction() {
		$src = 'http://www.pngpix.com/wp-content/uploads/2016/03/Guitar-PNG-Image.png';
		$img = new ImageChecker($src);
		$this->assertEquals(true, $img->isPNG());
	}

	public function testIsGIFFunction() {
		$src = 'http://www.thisiscolossal.com/wp-content/uploads/2014/03/120430.gif';
		$img = new ImageChecker($src);
		$this->assertEquals(true, $img->isGIF());
	}

	public function testIsBMPFunction() {
		$src = 'https://www.janome.com/inspire/Embroidery/fish-bmp-design-from-digitizer-10000/fish-bmp-design-from-digitizer-10000/dig10k_fish.bmp';
		$img = new ImageChecker($src);
		$this->assertEquals(true, $img->isBMP());
	}

}