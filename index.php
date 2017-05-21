<? session_start() ?>
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


<section>
			<ul class='showitem'>

				<?php
                $query = "select * from product";
                $result = mysqli_query($db,$query);
                
                while ($row = mysqli_fetch_row($result))
                {	?>

					<li id = '#' class='#' >
					<div class='box' >
						<a><img src = 'img/<?=$row[0];?>.jpg' /></a>
						<p style = 'color: #555555;' > <?=$row[1]; ?> <strong><?=number_format($row[2]); ?></strong >원</p >
						
                        // input 한 값이 아니라 이 기존의 값(상품 id 등등)을 넘기려면 어떻게 해야하나????
                        <form method="post" action="cart.php">
                            <input type='submit' value='ADD TO CART' onclick='Submit(1)'>
                        </form>
                        <form method="post" action="order.php">
                            <input type='submit' value=' BUY IT NOW ' onclick='Submit(2)'>
                        </form>
					</div >
				</li >

				<?php }//end of while
					?>

			</ul>

</section>

<? include 'footer.html'?>
</body>
</html>

<script type="text/javascript">
  function Submit(index) {
    if (index == 1) {
      document.Form.action='cart.php';
    }
    if (index == 2) {
      document.Form.action='order.php';
    }
    document.Form.submit();
  }
</script>