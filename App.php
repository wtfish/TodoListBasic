<?php
require_once "Model/todoList.php";
require_once "BusinessLogic/AddTodolist.php";
require_once "BusinessLogic/ShowTodolist.php";
require_once "BusinessLogic/RemoveTodolist.php";
require_once "View/ViewAddTodoList.php";
require_once "View/ViewRemoveTodoList.php";
require_once "View/ViewShowTodoList.php";
echo strtoupper("++++ APPLIKASI TODOLIST ++++"). PHP_EOL;
viewShowTodoList();
echo 12;
