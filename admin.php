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

<header>
    <a><h1>INTERIOR ITEM SHOP</h1></a>
    <div><head>
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

        <nav id="topMenu">
            <ul>
                <?php
                
                if(isset($_SESSION['id']))  // 세션이 형성됐으면, 
                {?>

                    <li><a class="menuLink" href="logout.php" style="width:600px">LOGOUT</a></li>
                    <li><a class="menuLink" href="admin/userinfo.php">userinfo</a></li>
                    <li><a class="menuLink" href="admin/productinfo.php">productinfo</a></li>
                    <li><a class="menuLink" href="admin/orderinfo.php">orderinfo</a></li>
                
                    <?php
                }
                else  //세션이 형성안됐으면,
                {?>
                    <li><a class="menuLink" href="login.php">LOGIN</a></li>
                <?php
                }
                ?>
                
                <!--<li><a class="menuLink" href="info.php">INFO</a></li>-->
            </ul>
        </nav>
    </div>
</header>