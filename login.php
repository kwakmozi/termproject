<!DOCTYPE html>
<html lang="ko-KR" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8"/>
    <meta name="description" content="kwakinmo" />
    <meta name="author" content="anthlife79@gmail.com" />
    <title>interior item shoppingmall</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<body>

<?php
include 'header.php';
//session_start();

$id = $_POST['id'];
$pw = $_POST['password']; 
$query = "select id from user where id = '$id' and pw = '$pw'";
$result = mysqli_query($db, $query);

$login=mysqli_fetch_row($result);

if($login[0] != null )
{
    $_SESSION['id']=$login[0]; // session id로는 내 아이디를 이용.
}

if(!isset($_SESSION['id'])) { //session이 없으면 계속 로그인 하게끔 만듬.

?>

<section>

    <form method="POST" action="login.php">
        <ul style="margin-left: 100px;">
            <li><input type="text" name="id" placeholder="id"/></li>
            <li><input type="password" name="password" placeholder="password"/></li>
            <li><input type="submit" value="login"/></li>
        </ul>
    </form>

</section>
<?php
}

else{
    if(strstr($_SESSION['id'],'admin'))
        echo "<meta http-equiv='refresh' content='0;url=admin.php'>";
    else
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}

?>
</body>
</html>
