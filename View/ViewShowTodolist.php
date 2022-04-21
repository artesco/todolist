<?php

require_once __DIR__ ."/../Model/Todolist.php";
require_once __DIR__ ."/../Helper/Input.php";
require_once __DIR__ ."/../BusinessLogic/ShowTodolist.php";
require_once __DIR__ ."/../View/ViewAddTodolist.php";
require_once __DIR__ ."/../View/ViewRemoveTodolist.php";

function viewShowTodolist() {

  while(true) {
   showTodolist();

    echo "MENU" . PHP_EOL;
    echo "1. Tambah Todo" . PHP_EOL;
    echo "2. Hapus Todo" . PHP_EOL;
    echo "x. Keluar" . PHP_EOL;

    $pilihan = input("Pilih");

    if($pilihan == "1") {

      viewAddTodolist();

    } else if($pilihan == "2") {

      viewRemoveTodolist(); 

    } else if($pilihan == "x") {

      // Keluar
      break;

    } else {
      echo "Pilihan tidak dimengerti" . PHP_EOL;
    } 
  }

  echo "Sampai Jumpa Lagi." . PHP_EOL;

}


