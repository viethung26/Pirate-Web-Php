<?php
    include('connection.php');
    $q = strtolower($_REQUEST['q']);
    $sql = "SELECT username FROM member WHERE username='$q'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        echo "yes";
    }
    else{
        echo "no";
    }

?>
