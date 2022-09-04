<?php
require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/RemoveTodoList.php";

$todoList[1]="makan bang";
$todoList[2]="tidur bang";
$todoList[3]="sare bang";
$todoList[4]="main hp bang";

echo var_dump($todoList);
removeTodoList(1);
echo var_dump($todoList);
removeTodoList(3);
echo var_dump($todoList);
removeTodoList(1);
echo var_dump($todoList);
removeTodoList(1);
echo var_dump($todoList);