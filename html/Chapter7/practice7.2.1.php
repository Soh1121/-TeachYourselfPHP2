<?php
$str = '2016年12月04日';
$fmt = 'Y年m月d日';
$dt = DateTime::createFromFormat($fmt, $str);
print $dt->format('Y/m/d（D）');
