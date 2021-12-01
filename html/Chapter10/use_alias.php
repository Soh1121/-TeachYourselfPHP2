<?php
require_once './wings/selfphp/Chapter10/MyClass.php';
require_once './wings/selfphp/Chapter10/sub/MyClass.php';

use wings\selfphp\Chapter10\MyClass;
use wings\selfphp\Chapter10\sub\MyClass as SubClass;

print MyClass::showClass();
print SubClass::showClass();
