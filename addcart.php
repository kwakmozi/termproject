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
session_start();


$product_id = $_GET['product_id'];

$query1 = "select * from product where product_id = $product_id "; //--
$result1 = mysqli_query($db, $query1);
$row1 = mysqli_fetch_row($result1); //지금 상품정보 레코드를 읽어옴...

//$afterstock = $row1[3] - 1;

//$querystock = "update product set stock=$afterstock where product_id= $product_id"; 
//$result = mysqli_query($db, $querystock);

$id = $_SESSION['id'];

if(!isset($_SESSION['id'])) {

?>

<script language=javascript>
alert('Login이 필요합니다..');
</script>
<meta http-equiv='refresh' content='0;url=login.php'>
<?php
exit;
}

function error($message) {
 echo"<script language=javascript>
 alert('$message');
 history.go(-1);
 </script>";
 exit;
}

$date = date("Y-m-d");

// ordered에 정보 넣기
//$query="insert into orderlist (user_id, user_name, phoneNo, address, product_id, product_name, price, date) values ('$id', '$user_name','$phoneNo','$address','$product_id','$product_name', '$price','$date')";
$query = "insert into cart (id, product_id) values ('$id','$product_id')";
mysqli_query($db,$query);

?>

<script language=javascript>
alert('장바구니에담았습니다');
</script>

<meta http-equiv='refresh' content='0;url=index.php'>
</body>
</html>