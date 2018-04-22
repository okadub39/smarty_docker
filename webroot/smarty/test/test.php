<?php

require_once("Smarty/libs/Smarty.class.php");
$smarty = new Smarty();
$smarty->template_dir = "../smarty/templates/";
$smarty->compile_dir = "../smarty/templates_c/";

// 変数名"name"に"World"を格納する
$smarty->assign("name", "World");

// テンプレートを表示する
$smarty->display("hello.tpl");

?>

