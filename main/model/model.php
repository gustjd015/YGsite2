<?php
session_start();

include "myDB.php";

function select(){
    $db_con = mysql_make_connection();
    $select = "select * from memberjoin";
    $sql = mysqli_query($db_con,$select);
    $a = 0;

    while($row = mysqli_fetch_assoc($sql)){ //assoc은 문자만 들고 오고 array는 문자와 숫자를 들고 온다
        $array[$a]=$row;
        $a++;
    }
    return $array;
}