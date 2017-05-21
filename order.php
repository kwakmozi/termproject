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

$orderNo=$_POST["userid"];
$userid=$_POST["password"];
$date=$_POST["member_name"];
$address=$_POST["address"];

$query="insert into order (id,pw,tel,name,address) values ('$userid','$password','$phoneNo','$member_name','$address')";
mysqli_query($db,$query);

?>

<script language=javascript>
alert('주문되었습니다');
</script>

<meta http-equiv='refresh' content='3;url=mypage.php'>
</body>
</html>