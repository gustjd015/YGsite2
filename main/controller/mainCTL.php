<?php
//엑션 파라미터 처리
session_start();
$action = $_REQUEST['action'];

if($action == null)
{
    $action = 100;
}

if($action == 121) {
    include "../memberModel/memberDAO.php";
    $postValues['id'] = isset($_POST['id']) ? $_POST['id'] : null;
    $postValues['name'] = isset($_POST['name']) ? $_POST['name'] : null;
    $postValues['password'] = isset($_POST['password']) ? $_POST['password'] : null;
    $postValues['sex'] = isset($_POST['sex']) ? $_POST['sex'] : null;
    $postValues['age'] = isset($_POST['age']) ? $_POST['age'] : null;
    $postValues['tel'] = isset($_POST['tel']) ? $_POST['tel'] : null;
    $postValues['address'] = isset($_POST['address']) ? $_POST['address'] : null;
    $postValues['hobby'] = isset($_POST['hobby']) ? $_POST['hobby'] : null;

    insert_data($postValues['id'],$postValues['name'],$postValues['password'],$postValues['sex'],$postValues['age'],$postValues['tel'],$postValues['address'],$postValues['hobby']);
    $action = 120;
}
if($action==130){
    include "../model/model.php";
    $board =select();
    $_SESSION['result']=$board;

}
if($action==141){
    include "../memberModel/memberDAO.php";
    $postValues['id'] = isset($_POST['id']) ? $_POST['id'] : null;
    $postValues['name'] = isset($_POST['name']) ? $_POST['name'] : null;
    $postValues['password'] = isset($_POST['password']) ? $_POST['password'] : null;
    $postValues['sex'] = isset($_POST['sex']) ? $_POST['sex'] : null;
    $postValues['age'] = isset($_POST['age']) ? $_POST['age'] : null;
    $postValues['tel'] = isset($_POST['tel']) ? $_POST['tel'] : null;
    $postValues['address'] = isset($_POST['address']) ? $_POST['address'] : null;
    $postValues['hobby'] = isset($_POST['hobby']) ? $_POST['hobby'] : null;

    insert_data($postValues['id'],$postValues['name'],$postValues['password'],$postValues['sex'],$postValues['age'],$postValues['tel'],$postValues['address'],$postValues['hobby']);
    $action = 140;
}

header("location:../view/MainView.php?action=$action");//받은 액션을 mainView한테 주겠다