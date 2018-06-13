# Package for detacting an image format
This package is used for detacting image formats. Currently supported formats: JPG, JPEG, PNG, BMP, GIF.

## Installation
The package can be installed via composer:
``` bash
$ composer require tintran/image_checker
```

## Usage

Detacting an image format from local path or online sources.

Instantiate a new instance:
```php
$img = new ImageChecker($src);
// $src can be a local path or an online link
```
Get image format:
```php
echo $img->getImageFormat();
// return 'JPG', 'PNG', 'GIF', 'BMP', ...
```
Supporting functions to check whether an image is a specified format
```php
$img->isJPG();
$img->isPNG();
$img->isGIF();
$img->isBMP();
// return true or false
```

