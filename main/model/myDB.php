<?php
define("DBMS_ADDR",     "localhost");
define("DBMS_USER_ID",  "root");
define("DBMS_PASSWD",   "1234");
define("DB_NAME",        "yg");

// MYSQL DB 연결, DB 선택
function mysql_make_connection() {
    if(!($db_connection = @mysqli_connect(DBMS_ADDR, DBMS_USER_ID, DBMS_PASSWD))) {
        echo "DBMS 연결 오류<br>";
        exit("스크립트 중지-DBMS 연결 오류");
    }

    if(!@mysqli_select_db($db_connection,DB_NAME )) {
        echo "DB 선택 오류<br>";
        echo mysqli_error($db_connection);
        exit("스크립트 중지-DB 선택 오류");
    }

    return $db_connection;
}
?>
