<?php
    $conn = mysqli_connect(
        'docker-mysql-test.cchokfyhjcbo.ap-northeast-2.rds.amazonaws.com',
        'user',
        'password',
        'TEST',
        '3306'
    );

    if(mysqli_connect_errno()) {
       echo "Failed to connect to MySQL".mysqli_connect_error();
    }
    
    $sql = "SELECT VERSION()";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    print_r($row["VERSION()"]);

    // mysqli_connect([아이피], [아이디], [비밀번호], [DB명], [포트]);
    // $conn = mysqli_connect("127.0.0.1", "root", "1234", "test_db");
    

?>