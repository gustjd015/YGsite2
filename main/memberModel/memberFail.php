<?php
include "../model/memberDAO.php";
if(mysql_make_connection()==-1){
    echo "DBMS ���� ����<br>";
    exit("��ũ��Ʈ ����-DBMS ���� ����");
}

else if(myslq_make_connection()==1){
    echo "DB ���� ����<br>";
    echo mysql_error($connect);
    exit("��ũ��Ʈ ����-DB ���� ����");
}
?>