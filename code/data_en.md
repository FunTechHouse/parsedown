# How to include code

Either use the extended markdown syntax like this:
^[index.php, a php file](index.php)

Or like this:

_Filename: [index.php, a php file](index.php)_
```
<?php
$path = "../";
require_once($path."class.page.php");
$page = new page($path, __FILE__);

$page->readFile("data");
?>
```

# This file
^[data_en.md](data_en.md)
