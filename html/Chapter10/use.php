<?php
require_once './wings/selfphp/Chapter10/MyClass.php';
require_once './wings/selfphp/Chapter10/MyClass2.php';
require_once './wings/selfphp/Chapter10/MyClass3.php';

// MyClassクラスをインポート（showClassは現在の完全クラス名を表示）
use wings\selfphp\Chapter10\MyClass;

print MyClass::showClass();

use wings\selfphp\Chapter10\MyClass2, wings\selfphp\Chapter10\MyClass3;

print MyClass2::showClass();
print MyClass3::showClass();
