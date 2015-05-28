# Hur inkludera kod

Man kan använda utökand markdown syntax:
^[index.php, a php file](index.php)

Eller så här:

_Filename: [index.php, a php file](index.php)_
```
<?php
$path = "../";
require_once($path."class.page.php");
$page = new page($path, __FILE__);

$page->readFile("data");
?>
```

# Denna fil
^[data_sv.md](data_sv.md)
