<h2>회원 정보</h2>
<table width="700" border="1">
    <tr>
    <td>아이디</td><td>이름</td><td>비밀번호</td><td>성별</td><td>나이</td><td>전화번호</td><td>주소</td><td>취미</td>
    </tr>

<?php
$result=$_SESSION['result'];
for($a=0; $a<count($_SESSION['result']); $a++){
    echo "<tr>";
    echo"<td>".$result[$a]['id']."</td>";

    echo"<td>".$result[$a]['name']."</td>";

    echo"<td>".$result[$a]['passwd']."</td>";

    echo"<td>".$result[$a]['sex']."</td>";

    echo"<td>".$result[$a]['age']."</td>";

    echo"<td>".$result[$a]['tel']."</td>";

    echo"<td>".$result[$a]['address']."</td>";

    echo"<td>".$result[$a]['hobby']."</td>";

    echo "<tr>";

}
?>
    </table>
