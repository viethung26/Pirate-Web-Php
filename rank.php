<?php
    include("connection.php");
    $sql = "SELECT * FROM member ORDER BY bounties DESC;";
    $result = $conn->query($sql);

    if($result->num_rows>0){
        $i = 0;
        while($row = $result->fetch_assoc()){
            $i++;
            echo "<tr><td>$i</td><td>".$row['username']."</td><td>".$row['bounties']."B</td></tr>";
            if($i >= 10) break;
        }
    }
    $conn->close();
?>
