<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
</head>
<body>
    <a href="index.php">Go to home</a>
    <form action="add.php" method="post">
    <table width="25%" border="0">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="number" name="mobile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
    </form>
    <?php 
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        
        include_once("config.php");
        
        $result = mysqli_query($conn, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
        
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>