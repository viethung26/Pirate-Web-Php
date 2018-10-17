<?php
    session_start();
    include("connection.php");
    if(!isset($_POST['username'])){
        die('');
    }
    $username = $_REQUEST['u'];
    $password = md5($_REQUEST['P']);
    $sql = "SELECT username FROM member WHERE username='$username' AND password = '$password';";
    $result = $conn->query($sql);
    if($result->num_rows>0){
//        echo "dang nhap thanh cong";
        $_SESSION['username'] = $username;
        echo "true";
//        header("Location: http://localhost");
    }
    else {
        echo "false";
    }
        

?>
