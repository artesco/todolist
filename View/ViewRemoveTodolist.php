<?php

require_once __DIR__ ."/../Helper/Input.php";
require_once __DIR__ ."/../BusinessLogic/RemoveTodolist.php";

function viewRemoveTodolist() {

    echo "Menghapus TODO (x untuk batal)" . PHP_EOL;

    $pilihan = input("Nomor");

    if($pilihan == "x") {
        echo "Batal menghapus Todo" . PHP_EOL;
    } else {
        $success = removeTodolist($pilihan);

        if ($success) {
            echo "Sukses menghapus Todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus Todo $pilihan" . PHP_EOL;
        }
    }
}
