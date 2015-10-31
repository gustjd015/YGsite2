<?php
include "../model/memberDAO.php";
if(mysql_make_connection()==-1){
    echo "DBMS 연결 오류<br>";
    exit("스크립트 중지-DBMS 선택 오류");
}

else if(myslq_make_connection()==1){
    echo "DB 선택 오류<br>";
    echo mysql_error($connect);
    exit("스크립트 중지-DB 선택 오류");
}
?>