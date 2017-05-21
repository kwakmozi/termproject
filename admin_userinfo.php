<? session_start() ?>
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
			<ul class='showuser'>
			    
				<?php
                $query = "select * from user";
                $result = mysqli_query($db,$query);
                
                while ($row = mysqli_fetch_row($result))
                {   // 나중에 표로 바꾸자  ?>
					<p style = 'color: #555555;' > userID : <?=$row[0]; ?> userName : <?=$row[3]; ?> userPhone : <?=$row[2]; ?> userAddress : <?=$row[4]; ?></p>
                    
                <?php 
                }//end of while
			    ?>    
			</ul>
</section>


<? include 'footer.html'?>
</body>
</html>