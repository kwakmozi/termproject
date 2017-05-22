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
	<h1>상품추가</h1>
<form method="post" action="admin_insertproduct2.php">
	<fieldset>
		<ul>
		  <li>
			<label for="amount">상품id</label>
			<input type="text" id="productId" size="20" name="product_id">
		  </li>
		  <li>
			<label for="itemname">상품명</label>
			<input type="text" id="productName" size="20" name="product_name">
		  </li>
		  <li>
			<label for="amount">상품가격</label>
			<input type="text" id="productPrice" size="20" name="price">
		  </li>
		  <li>
			<label for="amount">재고</label></label>
			<input type="text" id="productStock" size="20" name="stock">
		  </li>
		</ul>
	  </fieldset>
	  <center>
      <input type="submit" class="ct-btn white large" value="상품 추가하기">
      </center>
	</fieldset>
</form>
  </section>

</body>

</html>