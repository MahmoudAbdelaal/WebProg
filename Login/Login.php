<!DOCTYPE html>

<html>

<head>
    <title>login screen</title>
    <link rel="stylesheet" href="LoginIn.css">
</head>

<?php
if (isset($_POST['insert']))
{
    require_once('Config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM user WHERE email='$email' and password='$password'";

    $res = mysqli_query($con, $sql);

    $check = mysqli_fetch_array($res);

    $result = mysqli_query($con, "SELECT email  FROM user WHERE email='$email' and password='$password'");
    $row = mysqli_fetch_row($result);
    if (isset($row)) {
        header('Location:../Welcom screen/Welcome screen.html');
    } else {
        echo 'Your username or password is incorrect';
    }

    mysqli_close($con);
}
?>

<body>
<form action="Login.php" method="post">
    <div>
        <h1>Log in</h1>
        <p>Please fill in this form to sign in your account.</p>
        <hr>
    </div>
    <table  align="center">

        <tr>
            <th>
                <label><b>User Name</b></label>
            </th>
            <th>
                <input type="text" placeholder="Enter Your Name" name="email" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Password</b></label>
            </th>
            <th>
                <input type="password" placeholder="Enter password" name="password" required>
            </th>
        </tr>

        <tr>
            <th>
                <br> <button  type="submit"   name="insert"> Log In</button>
            </th>
            <th>
                <br> <button  type="button" onclick="location.href = '../SignUp/SignUp.php';">Sign Up</button>
            </th>
        </tr>

    </table>
</form>


<img src="../logo.png" height="100" width="100" >

<footer>
    <p>Arab Academy for Science & Technology & Maritime Transport<br>
        College of Computing & Information Technology</p>
</footer>

</body>

</html>

