<h2>ȸ�� ����</h2>
<table width="700" border="1">
    <tr>
    <td>���̵�</td><td>�̸�</td><td>��й�ȣ</td><td>����</td><td>����</td><td>��ȭ��ȣ</td><td>�ּ�</td><td>���</td>
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
