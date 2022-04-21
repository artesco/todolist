<?php

require_once "../View/ViewAddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("Samurai");
addTodolist("Ferry");
addTodolist("Mbah Man");

viewAddTodolist();

showTodolist();
