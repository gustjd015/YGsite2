<?php
define("DBMS_ADDR","localhost");
define("DBMS_USER_ID","root");
define("DBMS_PASSWD","1234");
define("DB_NAME","YG");//����� ����
function mysql_make_connection(){
    if(!$connect= @mysql_connect(DBMS_ADDR,DBMS_USER_ID,DBMS_PASSWD))
    {
        return -1;
    }
    if(!mysql_select_db(DB_NAME))
    {
        return 1;
    }
    return $connect;//����� ������ ��ȣ�� �Ѿ
}
function insert_data($id,$name,$passwd,$sex,$age,$tel,$address,$hobby){//insert���� �ۼ��� ����
    $db_connection = mysql_make_connection();
    $query = "insert into memberjoin VALUES";
    $query.="('$id','$name','$passwd','$sex','$age','$tel','$address','$hobby')";
    if(!mysql_query($query, $db_connection)){
        echo "Query ����<br>{$query}<br><br>";
        echo mysql_error($db_connection);
    }
}
