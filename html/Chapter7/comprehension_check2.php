<?php
$dt1 = new DateTime();
print $dt1->format('Y年m月d日');
print '<br />';
print $dt1->format('Y年m月t日');
print '<br />';
$dt2 = $dt1;
$dt2->add(new DateInterval('P1M10D'));
print $dt2->format('Y年m月d日');
print '<br />';
