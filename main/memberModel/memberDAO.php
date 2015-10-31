<?php
define("DBMS_ADDR","localhost");
define("DBMS_USER_ID","root");
define("DBMS_PASSWD","1234");
define("DB_NAME","YG");//상수를 지정
function mysql_make_connection(){
    if(!$connect= @mysql_connect(DBMS_ADDR,DBMS_USER_ID,DBMS_PASSWD))
    {
        return -1;
    }
    if(!mysql_select_db(DB_NAME))
    {
        return 1;
    }
    return $connect;//연결된 고유의 번호가 넘어감
}
function insert_data($id,$name,$passwd,$sex,$age,$tel,$address,$hobby){//insert쿼리 작성후 전송
    $db_connection = mysql_make_connection();
    $query = "insert into memberjoin VALUES";
    $query.="('$id','$name','$passwd','$sex','$age','$tel','$address','$hobby')";
    if(!mysql_query($query, $db_connection)){
        echo "Query 실패<br>{$query}<br><br>";
        echo mysql_error($db_connection);
    }
}
