<?php 

    $connect = mysqli_connect("localhost","root","","it-store");

    function query($query) {
        global $connect;
        $result = mysqli_query($connect, $query);
        $row = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

?>