<style type="text/css">
    @import url(/css/aLinkNoUnderLine.css);
</style>

<?php
$action = $_REQUEST['action'];
if($action == null){
    $action = 110;

}
//����Ʈ �޴� �׼� �ڵ带 ���θ޴� �ڵ�� ���� ����
$mainMenuShortNum = intval($action/100);

for($cnt = 1; $cnt <=5; $cnt++){
    $codeNum = $cnt * 100;//���� �޴� �ڵ� ����
    echo "<a href ='../controller/mainCTL.php?action=$codeNum' class='mainM'>";
    if($mainMenuShortNum == $cnt){
        echo "*Menu$cnt*";
    }
    else{
        echo "Menu$cnt";
    }
    echo"</a>";
}