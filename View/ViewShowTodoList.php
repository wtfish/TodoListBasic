<?php
require_once __DIR__."/../Model/todoList.php";
require_once __DIR__."/../BusinessLogic/ShowTodoList.php";
require_once __DIR__."/../view/ViewAddTodoList.php";
require_once __DIR__."/../view/ViewRemoveTodoList.php";
require_once __DIR__."/../Helper/Input.php";
function viewShowTodoList(){
    while (true) {
    showTodoList();
    echo "MENU". PHP_EOL;
    echo "1. Tambah Todo". PHP_EOL;
    echo "2. Hapus Todo". PHP_EOL;
    echo "x. Keluar". PHP_EOL;
    $pilihan=input("Pilih : ");
    if ($pilihan==="1") {
        viewAddTodoList();
    }
    else if ($pilihan==="2") {
        viewRemoveTodoList();
    }
    else if ($pilihan==="x") {
        break;
    }
    else {
        echo "PILIHAN TIDAK DIMENGERTI!". PHP_EOL;
    }
}
echo "Sampai Jumpa !". PHP_EOL;
}