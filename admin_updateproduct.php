<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
       <link rel="stylesheet" type="text/css" href="css/style.css"/>
<style>
.ct-btn.large {
	width: 600px;
	height: 46px;
	padding: 0 1em;
	font-size: 18px;
	font-weight: 600;
	line-height: 46px;
}
  fieldset{
    margin-bottom:15px;
  }
  ul {
    list-style:none;
  }
  ul li {
    margin-bottom:5px;
  }
  ul li>label {
     width:150px;
     float:left;
  }
</style>
</head>
<body>

  <?php
   include 'admin.php'
   ?>

  <section>
	<h1>상품수정</h1>
<form method="post" action="admin_updateproduct2.php">
	<fieldset>
		<ul>
		  <li>
			<label for="itemname">가격 수정할 상품명</label>
			<input type="text" id="productName" size="20" name="product_name">
		  </li>
		  <li>
			<label for="amount">수정할 가격</label>
			<input type="text" id="updatePrice" size="20" name="update_price">
		  </li>
		</ul>
	  </fieldset>
	  <center>
      <input type="submit" class="ct-btn white large" value="가격 수정하기">
      </center>
	</fieldset>
</form>
  </section>

</body>

</html>