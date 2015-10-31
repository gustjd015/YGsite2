<style type="text/css">
    @import url(/css/aLinkNoUnderLine.css);
</style>

<?php
$action = $_REQUEST['action'];
if($action == null){
    $action = 110;

}
//레프트 메뉴 액션 코드를 메인메뉴 코드로 통합 정리
$mainMenuShortNum = intval($action/100);

for($cnt = 1; $cnt <=5; $cnt++){
    $codeNum = $cnt * 100;//메인 메뉴 코드 생성
    echo "<a href ='../controller/mainCTL.php?action=$codeNum' class='mainM'>";
    if($mainMenuShortNum == $cnt){
        echo "*Menu$cnt*";
    }
    else{
        echo "Menu$cnt";
    }
    echo"</a>";
}