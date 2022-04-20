<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("Eko");
addTodolist("Kurniawan");
addTodolist("Kannedy");

var_dump($todolist);
