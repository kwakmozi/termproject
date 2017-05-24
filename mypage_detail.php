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
$order_id = $_GET['order_id'];
                
echo "<p>안녕하세요 $id 님 </p>";
?>
<h1 align="center">구매상세내역</h1><br/>
<center>
	<table border="1px" width="800px">
		<tr>
		<td align="center" width="20px"></td>
		<td align="center" width="120px">고객id</td>
		<td align="center" width="150px">고객이름</td>
		<td align="center" width="200px">고객전화번호</td>
		<td align="center" width="100px">배송지</td>
		<td align="center" width="100px">상품이름</td>
		<td align="center" width="100px">상품가격</td>
		<td align="center" width="100px">주문일자</td>
		
		</tr>
<?php
$sql = "select * from user natural join product natural join ordered where user.id = ordered.id and order_id='$order_id' and id = '$id' order by order_id";
$result = mysqli_query($db,$sql);

while($row = mysqli_fetch_row($result)){
	 // 나중에 테이블로 바꾸자. 그다음에 orderid 누르면 정보 자세히 보이게!!  
    ?>
    <tr>
		<td align="center" width="20px"></td>
		<td align="center" width="120px"><?=$row[0]; ?></td>
		<td align="center" width="150px"><?=$row[4]; ?></td>
		<td align="center" width="200px"><?=$row[3]; ?></td>
		<td align="center" width="100px"><?=$row[5]; ?></td>
		<td align="center" width="100px"><?=$row[6]; ?></td>
		<td align="center" width="100px"><?=$row[7]; ?></td>
		<td align="center" width="100px"><?=$row[10]; ?></td>
	</tr>
    <?php 
    }
	?>	
	</table>
</center><br/>

</body>

</html>