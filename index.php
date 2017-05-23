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
						<p style = 'color: #555555;' > <?=$row[1]; ?> <strong><?=number_format($row[2]); ?></strong >원</p>
                <a href = 'order.php?product_id=<?=$row[0];?>'>
                    <input type="submit" class="ct-btn white large" value="주문">
                </a>
                <a href = 'cart?product_id=<?=$row[0];?>.php'>
                    <input type="submit" class="ct-btn white large" value="담기">
                </a>
                        
					</div >
				</li >

				<?php }//end of while
					?>

			</ul>

</section>

<? include 'footer.html'?>
</body>
<!--
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
-->