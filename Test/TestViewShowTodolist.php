<?php

require_once "../View/ViewShowTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("Samurai");
addTodolist("PNS");
addTodolist("Anak Pangs");

viewShowTodolist();
