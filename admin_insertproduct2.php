<!DOCTYPE html>
<html lang="ko-KR">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>

<body>
<?php
include 'admin.php';
?>

<?php

$product_id=$_POST["product_id"];
$product_name=$_POST["product_name"];
$price=$_POST["price"];
$stock=$_POST["stock"];

$query="insert into product (product_id,product_name,price,stock) values ('$product_id','$product_name','$price','$stock')";
mysqli_query($db,$query);

?>

<script language=javascript>
alert('추가되었습니다');
</script>

<meta http-equiv='refresh' content='0;url=admin_productinfo.php'>
</body>
</html>