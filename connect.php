<?php
    // A simple PHP script demonstrating how to connect to MySQL.
    // Press the 'Run' button on the top to start the web server,
    // then click the URL that is emitted to the Output tab of the console.

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
    
    echo "Connected successfully (".$db->host_info.")";
    
    // 만든 , 만들 table 이름.
    $sql = "INSERT INTO dep (dept_no, dept_name)  
    VALUES (3, 'database3')";
    
    if($db->query($sql) === TRUE ) {
        echo "New record created successfully";
    } else { 
        echo "Error: " . $sql . "<br>" . $db->error;
    }
    $db->close();

?>
    
    