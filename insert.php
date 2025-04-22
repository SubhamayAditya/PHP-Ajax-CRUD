<?php
include('connection.php');


$name = $_POST['stuname'];

$mail = $_POST['stuemail'];
$loc = $_POST['stuloc'];


$imageName = $_FILES['stuimg']['name'];
$imageTemp = $_FILES['stuimg']['tmp_name'];
$imagePath = './uploads/' . $imageName;

if (move_uploaded_file($imageTemp, $imagePath)) {
    $query = "insert into crud (stname,stemail,stlocation,st_image) values ('$name','$mail','$loc','$imageName')";
    $res = mysqli_query($conn, $query);
    if ($res) {
        echo "Data Inserted successfully";
    } else {
        echo "Data inserted Failed";
    }
} else {
    echo "Image inserted Failed";
}
