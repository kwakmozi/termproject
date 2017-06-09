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
		<td align="center" width="120px">카트번호</td>
		<td align="center" width="150px">상품번호</td>
		<td align="center" width="100px">상품이름</td>
		<td align="center" width="50px">가격</td>
		</tr>
<?php
$sql = "select * from cart natural join ordered where id = '$id' order by cart_id";
$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_row($result)){
	 // 나중에 테이블로 바꾸자. 그다음에 orderid 누르면 정보 자세히 보이게!!  
    ?>
    <tr>
		<td align="center" width="20px"></td>
		<td align="center" width="120px"><?=$row[0]; ?></td>
		<td align="center" width="150px"><?=$row[1]; ?></td>
		<td align="center" width="100px"><?=$row[2]; ?></td>
		<td align="center" width="50px"><?=$row[3]; ?></td>
	</tr>
    <?php 
    }
	?>	
	</table>
</center><br/>

</body>


//여기에 한꺼번에 주문하는거를 transaction으로 구성하기!
</html>