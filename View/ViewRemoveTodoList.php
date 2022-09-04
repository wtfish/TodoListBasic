<?php
require_once __DIR__."/../Helper/Input.php";
require_once __DIR__."/../BusinessLogic/RemoveTodoList.php";
function viewRemoveTodoList(){
    while(true){
        echo "MENGHAPUS TODO". PHP_EOL;
        $pilihan = input("Nomor : ");
        if($pilihan==="x"||$pilihan==="X"){
            echo "Batal Menghapus". PHP_EOL;
            break;
        }
        else{
            $Success=removeTodoList($pilihan);
            if($Success){
                echo "Sukses menghapus nomer {$pilihan}". PHP_EOL;
            }
            
            else{
                echo "Gagal Menghapis nomer {$pilihan}". PHP_EOL;
            }

        }
        
    }
}