<?php
require_once __DIR__."/../Model/TodoList.php";
require_once __DIR__."/../Helper/Input.php";
require_once __DIR__."/../BusinessLogic/AddTodoList.php";
function viewAddTodoList(){
        while(true){
            echo "MENAMBAH TODO".PHP_EOL;
            $todo=input("Todo ('x' untuk batal) : ");
            
            if($todo ==='x'||$todo ==="X"){
                echo "BATAL MENAMBAH TODO". PHP_EOL;
                break;
            }else{
                addTodoList($todo);
            }
        }
}