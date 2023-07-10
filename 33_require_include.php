<?php
    // include '_dbconnect.php';

    //require is better as it stops further execution is there's any issue
    require '_dbconnect.php';

    $sql = "SELECT * FROM `phptrip`";
    $result = mysqli_query($conn, $sql);

    //find the numbers of record return
    $num_rows_returned = mysqli_num_rows($result);
    echo $num_rows_returned;
    echo " number of records found in database. <br>";
    echo "<br>";

    foreach($result as $row)
    {
        echo $row['sno'].". Hello, ".$row['name']."! Your destination is ".$row['dest']. ".<br>";
    }
?>