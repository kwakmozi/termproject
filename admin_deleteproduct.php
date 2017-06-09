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




try {
    // First of all, let's begin a transaction
    $db->query("START TRANSACTION");

    // A set of queries; if one fails, an exception should be thrown
    $db->query('first query');
    $db->query('second query');
    $db->query('third query');

    // If we arrive here, it means that no exception was thrown
    // i.e. no query has failed, and we can commit the transaction
    $db->commit();
} catch (Exception $e) {
    // An exception has been thrown
    // We must rollback the transaction
    $db->rollback();
}
[출처] php transaction처리 방법|작성자 Claude