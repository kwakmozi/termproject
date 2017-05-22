<? 
// 상품 추가, 수정, 제거 기능 넣기
// 버튼 만들어서 각 버튼 마다 쿼리 주면 될듯.
// 수정은 가격 수정.
// 추가는 따로 9번 만 넣는다고 하면 index를 for문 이용해야할 듯.??
// ㄴㄴ 그냥 db에 추가하는 query만 만들어주면 된다.

session_start() ?>
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


<section>
			
			<ul class='showitem'>
				<a href = 'admin_updateproduct.php'>
                    <input type="submit" class="ct-btn white large" value="수정">
                </a>
                </br>
                <a href = 'admin_insertproduct.php'>
                    <input type="submit" class="ct-btn white large" value="추가">
                </a>
                </br>
                <a href = 'admin_deleteproduct.php'>
                    <input type="submit" class="ct-btn white large" value="삭제">
                </a>
                </br>
                
                
				<?php
                $query = "select * from product";
                $result = mysqli_query($db,$query);
                
                while ($row = mysqli_fetch_row($result))
                {	?>

					<li id = '#' class='#' >
					<div class='box' >
						<a><img src = 'img/<?=$row[0];?>.jpg' /></a>
						<p style = 'color: #555555;' > <?=$row[1]; ?> <strong><?=number_format($row[2]); ?></strong >원</p >
						
					</div >
				</li >
			
				<?php }//end of while
					?>

			</ul>

</section>

<? include 'footer.html'?>
</body>