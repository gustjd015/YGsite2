<?php
//���� �Ķ���� ó��
$action = $_REQUEST['action'];
if($action == null){
    $action = 100;
}
$mainMenuShortNum = intval($action/100);
$subMenuShortNum = intval($action%100);

for($cnt = 1; $cnt <=5; $cnt++){
    // ����޴� �ڵ� ����, ex) 110,120,130,140,150
    $codeNum = $mainMenuShortNum * 100 +$cnt * 10;
    echo "<a href='../controller/mainCTL.php?action=$codeNum'class='leftM'>";
    if($subMenuShortNum == $cnt * 10 || $subMenuShortNum == $cnt*10 + 1) {
        echo "*SubMenu$codeNum*";
    }
    else{
        echo "SubMenu$codeNum";
    }
    echo "</a>";
    echo "<br/><br/>";
}