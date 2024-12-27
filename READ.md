# StrTool

StrTool is a powerful string manipulation library designed to simplify and enhance your text processing tasks.

## Installation

To install StrTool, use Composer:

```sh
composer require naelf/strtool
```

## Usage

Here is a basic example of how to use StrTool:

```php
require 'vendor/autoload.php';

use Src\StrTool;

$string = "Hello, World!";
$part = StrTool::get($string, 1, 5);

echo $part; // Output: "Hello"
```
