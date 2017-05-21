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
   
    if(isset($_SESSION['id'])) {  // session_id를 이용해 쿠키를 활용.
    $session_id = $_SESSION['id'];
    }
    ?>

<header>
    <a><h1>INTERIOR ITEM SHOP</h1></a>
    <div>
        <nav id="topMenu">
            <ul>
                <?php
                
                if(isset($_SESSION['id']))  // 세션이 형성됐으면, 
                {?>

                    <li><a class="menuLink" href="logout.php" style="width:400px">LOGOUT</a></li>

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