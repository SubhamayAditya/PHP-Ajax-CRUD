<?php

include('connection.php');


$dataId = $_POST['id'];

// echo $dataId;
// die();


$query = "delete from crud where id='$dataId'";

$res = mysqli_query($conn, $query);

if ($res) {
    echo "Data successfully deleted";
} else {
    echo "Data not deleted";
}
