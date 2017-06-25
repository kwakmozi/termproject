<!DOCTYPE html>
<html lang="ko-KR">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<?php
include 'header.php';
?>

<?php

$userid=$_POST["userid"];
$password=$_POST["password"];
$password2=$_POST["password2"];
$username=$_POST["username"];
$phone=$_POST["phone"];
$address=$_POST["address"];

$query="insert into user (id,pw,tel,name,address) values ('$userid','$password','$phone','$username','$address')";
mysqli_query($db,$query);

?>

<script language=javascript>
alert('가입되셨습니다');
</script>

<meta http-equiv='refresh' content='3;url=login.php'>
</body>
</html>