<?php
require_once "lib/core/database_dob.php";
require_once "lib/module/manage_dob.php";

$db = new DataBase();
$manage = new Manage($db);

if ($_POST["reg"]) {
    $r = $manage->regUser();
}
elseif ($_POST["add_word_dic"]){
    $r = $manage->addWordIn_dic();
}
elseif ($_POST["auth"]){
    $r = $manage->login();
}
elseif ($_POST["edit_pro_file"]){
    $r = $manage->editLogin();
}
elseif ($_GET["logout"]){
    $r = $manage->logout();
}
elseif ($_GET["hash"]) {
    $r = $manage->checkActivate();
}
elseif ($_POST["rename_pass"]) {
    $r = $manage->renamePass();
}
elseif ($_POST["send_reestab"]) {
    $r = $manage->reestab_access();
}
elseif ($_GET["reestab"] || $_GET["logf"]){
    $r = $manage->hawk();
}
elseif ($_POST["send_postreestab"]) {
    $r = $manage->postreestab_access();
}
else exit;
$manage->redirect($r);
?>