<?php
    include("connection.php");
    if($conn->connect_error){
        die("Connect failed: ".$conn->connect_error);
    }
    if(!isset($_POST['username'])){
        die ('');
    }
    $username = $_POST['username'];
    $password = md5($_POST['passwd']);
    $sql = "SELECT username FROM member WHERE username='$username';";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        echo "Da co nguoi dung roi";
        exit;
    }
    @$addmember = $conn->query("INSERT INTO member(username, password, bounties) VALUES ('{$username}','{$password}',0)");
    if($addmember)
        echo "succesfully";
    else
        echo "Insert failed";
 ?>
