<?php
define("DBMS_ADDR",     "localhost");
define("DBMS_USER_ID",  "root");
define("DBMS_PASSWD",   "1234");
define("DB_NAME",        "yg");

// MYSQL DB ����, DB ����
function mysql_make_connection() {
    if(!($db_connection = @mysqli_connect(DBMS_ADDR, DBMS_USER_ID, DBMS_PASSWD))) {
        echo "DBMS ���� ����<br>";
        exit("��ũ��Ʈ ����-DBMS ���� ����");
    }

    if(!@mysqli_select_db($db_connection,DB_NAME )) {
        echo "DB ���� ����<br>";
        echo mysqli_error($db_connection);
        exit("��ũ��Ʈ ����-DB ���� ����");
    }

    return $db_connection;
}
?>
