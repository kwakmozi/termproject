<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
       <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<body>
<?php
include 'header.php';
session_start();
?>
<section>
<?php
if(!isset($_SESSION['id'])) {
    echo "not login";
    exit;
}
$id = $_SESSION['id'];
echo "<p>안녕하세요 $id 님 </p>";
?>
<h1 align="center">장바구니</h1><br/>
<center>
	<table border="1px" width="800px">
		<tr>
		<td align="center" width="20px"></td>
		<td align="center" width="50px">카트번호</td>
		<td align="center" width="50px">상품번호</td>
		<td align="center" width="100px">상품이름</td>
		<td align="center" width="100px">가격</td>
		</tr>
<?php
$sql = "select * from cart natural join product where id = '$id' order by cart_id";
$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_row($result)){
	  
    ?>
    <tr>
		<td align="center" width="20px"></td>
		<td align="center" width="50px"><?=$row[1]; ?></td>
		<td align="center" width="50px"><?=$row[0]; ?></td>
		<td align="center" width="100px"><?=$row[3]; ?></td>
		<td align="center" width="100px"><?=$row[4]; ?></td>
	</tr>
    <?php 
    }
	?>	
	</table>
</center><br/>

</body>

// 주문하기 버튼
// 그러면 한줄씩 읽어서 상품번호를 읽고 그 상품번호를 힌트로 ordered에 집어넣자!
// order.php참조

// transaction은 addcart 참조!!!
//여기에 한꺼번에 주문하는거를 transaction으로 구성하기!
// 장바구니에 있는거를 모두???

// 어떻게 cart에 있는거를 ordered에 한꺼번에 다 넣을까....
// cart에 정보 넣기

//$query = "insert into cart (id, product_id) values ('$id','$product_id')";
//transaction
//mysqli_query($db,"BEGIN");

//$result = mysqli_query($db,$query);
//if(!$result)
//    mysqli_query($db,"ROLLBACK");
//else 
 //   mysqli_query($db,"COMMIT");



</html>