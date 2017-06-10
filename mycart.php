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



<form method="post">
    <input type="submit" name="submit" value="주문하기"/>
</form>
<?php
//start transaction
mysqli_query($db,"BEGIN");

if(isset($_POST['submit']))
{
	
	// 우선 카트의 내용을 한줄 한줄 읽는다.
	$query1 = "select * from cart where id = '$id' order by cart_id";
	$result1 = mysqli_query($db, $query1);
	while($row = mysqli_fetch_row($result1)){
		// product id를 읽어서 거기 stock을 하나 줄인다.
		$product_id = $row[2]; // 이거 확인하기
		$query2 = "select * from product where product_id = $product_id";
		$result2 = mysqli_query($db, $query2);	
		$row2 = mysqli_fetch_row($result2);
		$afterstock = $row2[3] - 1;
		$query3 = "update product set stock=$afterstock where product_id= $product_id"; 
		$result3 = mysqli_query($db, $query3);

		// 그리고 order에 정보를 넣는다.
		$date = date("Y-m-d");
		$query4 = "insert into ordered (id, product_id, date) values ('$id', '$product_id', '$date')";
		$result4 = mysqli_query($db,$query4);
		
		// 주문한거는 cart에서 제거한다.
		$query5 = "delete from cart where product_id = $product_id";
		$result5 = mysqli_query($db, $query5);
	
		if($result2 and $result3 and $result4 and $result5){ // result1,2,3,4 모두 정상적으로 진행되었을때만 commit
		mysqli_query($db,"COMMIT");
		}
		else {
		mysqli_query($db,"ROLLBACK");
		}
	
	}?>
		<script language=javascript>
		alert('주문되셨습니다');
		</script>
		<meta http-equiv='refresh' content='0;url=mypage.php'>
<?php
}
?>
	
<!--
$product_id = $_GET['product_id'];
$query1 = "select * from product where product_id = $product_id ";
$result1 = mysqli_query($db, $query1);
$row1 = mysqli_fetch_row($result1);
//$product_name = $row1[1];
//$price = $row1[2];

$afterstock = $row1[3] - 1;

$querystock = "update product set stock=$afterstock where product_id= $product_id"; 
$result = mysqli_query($db, $querystock);

$date = date("Y-m-d");
$query = "insert into ordered (id, product_id, date) values ('$id', '$product_id', '$date')";
mysqli_query($db,$query);


// 주문하기 버튼 order.php로 ㄱㄱ
while{$row = mysqli_fetch_row($result){
	
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

-->

</html>