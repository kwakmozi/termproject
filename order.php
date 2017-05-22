<!DOCTYPE html>
<html lang="ko-KR">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>주문</title>
</head>

<body>
<?php
include 'header.php';
?>

<?php

$product_id = $_GET['product_id'];

$query = "select * from product where product_id = $product_id ";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_row($result);

//session id 까지 보내야할 듯.
//어떻게 order 에 넣지?? ordernow 참조해야할듯.
// 주문 되었습니다 창 띄우기
// 화면은 mypage로 이동해서 주문 정보 보여주기
// order list에 정보 넣기
$product_id = $row[0];
$member_name=$_POST["member_name"];
$phoneNo=$_POST["phoneNo"];
$address=$_POST["address"];

$query="insert into order (tid,pw,tel,name,address) values ('$userid','$password','$phoneNo','$member_name','$address')";
mysqli_query($db,$query);

?>

<script language=javascript>
alert('주문되셨습니다');
</script>

<meta http-equiv='refresh' content='3;url=login.php'>
</body>
</html>