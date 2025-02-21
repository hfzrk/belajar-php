<?php

include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <a href="add.php">Add New User</a><br/><br/>

    <table width='80%' border=1>
        <thead>
            <tr>
                <th>Name</th> <th>Email</th> <th>Mobile</th><th>Update</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['name']."</td>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['mobile']."</td>";
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
            }
            ?>
        </tbody>
    </table>
</body>
</html>
