<?php
session_start();

include "myDB.php";

function select(){
    $db_con = mysql_make_connection();
    $select = "select * from memberjoin";
    $sql = mysqli_query($db_con,$select);
    $a = 0;

    while($row = mysqli_fetch_assoc($sql)){ //assoc�� ���ڸ� ��� ���� array�� ���ڿ� ���ڸ� ��� �´�
        $array[$a]=$row;
        $a++;
    }
    return $array;
}