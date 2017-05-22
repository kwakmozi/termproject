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

$product_name=$_POST["product_name"];

$query="delete from product where product_name = '$product_name'";
mysqli_query($db,$query);

?>

<script language=javascript>
alert('삭제되었습니다');
</script>

<meta http-equiv='refresh' content='0;url=admin_productinfo.php'>
</body>
</html>