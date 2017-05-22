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
	<h1>상품삭제</h1>
<form method="post" action="admin_deleteproduct2.php">
	<fieldset>
		<ul>
		  <li>
			<label for="itemname">삭제할 상품명</label>
			<input type="text" id="productName" size="20" name="product_name">
		  </li>
		</ul>
	  </fieldset>
	  <center>
      <input type="submit" class="ct-btn white large" value="상품 삭제하기">
      </center>
	</fieldset>
</form>
  </section>

</body>

</html>