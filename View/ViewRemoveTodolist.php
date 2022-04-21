<?php

require_once "../Helper/Input.php";
require_once "../BusinessLogic/RemoveTodolist.php";

function viewRemoveTodolist() {

    echo "Menghapus TODO" . PHP_EOL;

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
