<?php
require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";

addTodoList("Makan");
addTodoList("Belajar");
addTodoList("Tidur ");
var_dump($todoList);