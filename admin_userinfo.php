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
<h1 align="center">고객정보</h1><br/>
<center>
	<table border="1px" width="800px">
		<tr>
		<td align="center" width="20px"></td>
		<td align="center" width="200px">고객아이디</td>
		<td align="center" width="150px">고객이름</td>
		<td align="center" width="200px">고객전화번호</td>
		<td align="center" width="150px">고객주소</td>
		</tr>			<ul class='showuser'>
			    
				<?php
                $query = "select * from user";
                $result = mysqli_query($db,$query);
                
                while ($row = mysqli_fetch_row($result))
                { 
                 ?>
                 <tr>
		<td align="center" width="20px"></td>
		<td align="center" width="200px"><?=$row[0]; ?></td>
		<td align="center" width="150px"><?=$row[3]; ?></td>
		<td align="center" width="200px"><?=$row[2]; ?></td>
		<td align="center" width="150px"><?=$row[4]; ?></td>
	            </tr>
    
                <?php 
                }//end of while
			    ?>    
			</ul>
			
			</table>
			    </center>
</section>


<? include 'footer.html'?>
</body>
</html>