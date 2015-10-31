<html>
<head>
    <title>회원가입</title>
</head>
<body>
<center><h1>회원가입<h1></center>
<form action="../../controller/mainCTL.php" method="post">
    <center>아이디: <input type="text" name="id"><br></center>
    <center>이름: <input type="text" name="name"><br></center>
    <center>비밀번호: <input type="text" name="password"><br>
        <tr>
            <td align="right">성별 :</td>
            <td><input type="radio" name="sex" value="1">남
                <input type="radio" name="sex" value="2">여</td>
        </tr>
        <center>나이: <input type="text" name="age"><br></center>
        <center>전화번호: <input type="text" name="tel"><br></center>
        <center>주소: <input type="text" name="address"><br></center>
        <center>취미: <input type="text" name="hobby"><br></center>
        <input type="hidden" name="action" value="121">
        <center><input type="submit" value="가입하기"></center>

        <img src="../../../img/logintitle.jpg">
</form>

</body>
</html>