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
                $query = "SELECT * FROM item";
                $result = mysqli_query($db,$query);
                while ($row = mysqli_fetch_row($result))
                {	?>


					<li id = '#' class='#' >
					<div class='box' >
						<a href = 'detail.php?item_id=<?=$row[0];?>' >
							<img src = 'img/<?=$row[0];?>.jpg' />
						</a>
							<p style = 'color: #555555;' > <?=$row[1]; ?></p >

						<p style = 'color: #555555;'><strong><?=number_format($row[2]); ?></strong >원</p >
					</div >
				</li >


				<?php }//end of while
					?>

			</ul>

</section>


<? include 'footer.html'?>
</body>
</html>