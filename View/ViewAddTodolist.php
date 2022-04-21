<?php

require_once __DIR__ ."/../Model/Todolist.php";
require_once __DIR__ ."/../Helper/Input.php";
require_once __DIR__ ."/../BusinessLogic/AddTodolist.php";

function viewAddTodolist() {

  echo "MENAMBAH TODO" . PHP_EOL;

  $todo = input("Todo (x untuk batal) ");

  if ($todo == "x") {
    //batal
    echo "Batal menambah";
  } else {
    addTodolist($todo);
  }

}
