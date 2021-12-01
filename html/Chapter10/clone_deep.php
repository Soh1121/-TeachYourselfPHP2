<?php
require_once 'Person4.php';
require_once 'FriendList.php';

// FiriendListオブジェクトにPersonオブジェクトをセット
$list = new FriendList();
$list->add(new Person('太郎', '山田'));
$list->add(new Person('奈美', '掛谷'));
$list->add(new Person('賢', '高江'));

// FriendListオブジェクトの複製を生成
$list2 = clone $list;
var_dump($list2(1) === $list(1));
