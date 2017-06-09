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

<form name=search method=get action="<?=$PHP_SELF?>">
<select name=field>
<option value=product_name>상품명</option>   
</select><input type=text name=search_word size=20><input type=submit value="검색">
                
                
			<ul class='showitem'>

				<?php
                if ($_GET['search_word']!="") 
                $add_query = " where $_GET[field] like '%" . $_GET['search_word'] . "%' ";
				
                $query = "select * from product";
                $query .= $add_query;
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
                <a href = 'addcart.php?product_id=<?=$row[0];?>'>
                    <input type="submit" class="ct-btn white large" value="담기">
                </a>
                        
					</div >
				</li >

				<?php }
					?>

			</ul>

</section>

<? include 'footer.html'?>
</body>