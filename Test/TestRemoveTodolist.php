<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/RemoveTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";

addTodolist("Samuri");
addTodolist("Fery");
addTodolist("Ibnu");
addTodolist("Mbah man");
addTodolist("Johan");

showTodolist();

removeTodolist(3);

showTodolist();

removeTodolist(4);

showTodolist();

$success = removeTodolist(5);
var_dump($success);

showTodolist();
