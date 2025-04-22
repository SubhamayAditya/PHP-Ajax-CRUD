<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Table</title>

    <link rel="stylesheet" href="displaystyle.css">
</head>

<body>

    <h2>Student List</h2>

    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Location</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('connection.php');
            $query = 'select * from crud';
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
            ?>
                    <tr>
                        <td><img src="./uploads/<?php echo htmlspecialchars($row['st_image']); ?>" alt="Student Image"></td>
                        <td><?php echo $row['stname']; ?></td>
                        <td><?php echo $row['stemail']; ?></td>
                        <td><?php echo $row['stlocation']; ?></td>
                        <td><button>Edit</button></td>
                        <td><button>Delete</button></td>
                    </tr>

            <?php
                }
            }
            ?>




        </tbody>
    </table>

</body>

</html>