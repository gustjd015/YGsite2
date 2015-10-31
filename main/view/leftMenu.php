<?php
//엑션 파라미터 처리
$action = $_REQUEST['action'];
if($action == null){
    $action = 100;
}
$mainMenuShortNum = intval($action/100);
$subMenuShortNum = intval($action%100);

for($cnt = 1; $cnt <=5; $cnt++){
    // 서브메뉴 코드 생성, ex) 110,120,130,140,150
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