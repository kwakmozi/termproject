<?php  // 디비를 가져온다. 
    
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306; // mySQL local 

    // Create connection
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    } 
    
    //echo "Connected successfully (".$db->host_info.")";

    mysqli_set_charset($db,"utf8");
   
    //session
    session_start(); 
   
    if(isset($_SESSION['id'])) {  // 세션을 userid로 확인
    $userid = $_SESSION['id'];
    }
    ?>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>

</head>
<header>
    <a><h1>INTERIOR ITEM SHOP</h1></a>
    <div>
        <nav id="topMenu">
            <ul>
                <?php
                
                if(isset($_SESSION['id']))  // 세션이 형성됐으면, 
                {?>

                    <li><a class="menuLink" href="logout.php" style="width:600px">LOGOUT</a></li>

                    <?php
                }
                else  //세션이 형성안됐으면,
                {?>
                    <li><a class="menuLink" href="login.php">LOGIN</a></li>
                    <li><a class="menuLink" href="join.php">JOIN</a></li>
                <?php
                }
                ?>
                
                <li><a class="menuLink" href="cart.php">SHOPPING CART</a></li>
                <li><a class="menuLink" href="mypage.php">MY PAGE</a></li>
                <!--<li><a class="menuLink" href="info.php">INFO</a></li>-->
            </ul>
        </nav>
    </div>
</header>