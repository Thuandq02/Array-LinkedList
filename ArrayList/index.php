<?php
include_once ('Arrlist.php');

$mylist = new Arrlist();
$mylist->add(100);
$mylist->add(200);
$mylist->add(300);
$mylist->insert(1, 222);
$mylist->insert(3, 333);
$mylist->addAll([1000,2222]);


echo $mylist->indexOf(1000);
echo $mylist->reset();


print("<pre>" . print_r($mylist, true) . "</pre>");