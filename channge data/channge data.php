<!DOCTYPE html>

<html>

<head>
    <title>Change User Setting</title>
    <link rel="stylesheet" href="channge%20data.css">
    <script src="channge%20data.js"></script>

</head>

<?php
if (isset($_POST['insert']))
{
    $servername = "localhost";
    $username = "root";
    $password = "Hadeel123Mahmoud";
    $dbname = "quality";

    $email = $_POST['email'];
    $password = $_POST['password'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Address = $_POST['Address'];
    $MobilNumber = $_POST['MobilNumber'];

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "UPDATE user
            SET  password='$password', FirstName='$FirstName', LastName='$LastName', Address='$Address', MobilNumber='$MobilNumber'
            WHERE  email='$email'";



    if ($conn->query($sql) == TRUE) {
        header('Location:../Welcom screen/Welcome screen.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<script type = "text/javascript">
    <!--
    // The event handler function for password checking

    function chkPasswords () {
        var init = document.getElementById("initial");
        var sec = document.getElementById("second");
        if (init.value == "") {
            alert ("You did not enter a password \n" +
                "Please enter one now");
            init.focus();
            return false;
        }

        if (init.value != sec.value) {
            alert("The two passwords are not the same \n" +
                "Please re-enter both now");
            init.focus();
            init.select();
            return false;
        } else
            return true;
    }
    // -->
</script>

<body>
<form action="channge data.php" method="post">
    <div>
        <h1>Change User Setting</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    </div>

    <table align="center" >
        <tr>
            <th>
                <label><b>Email</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter Email" name="email" required >
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Password</b></label>
            </th>
            <th colspan="2">
                <input id="initial" type="password" placeholder="Enter Password" name="password" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Repeat Password</b></label>
            </th>
            <th colspan="2">
                <input id="second" type="password" placeholder="Repeat Password" name="psw-repeat" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>First Name</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter First Name" name="FirstName" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Last Name</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter Last Name" name="LastName" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Address</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter Address" name="Address" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Mobil Number</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter Mobil Number" name="MobilNumber" required>
            </th>
        </tr>

        <tr>
            <th>
                <button type="submit" name="insert" onclick="location.href = '../Welcom screen/Welcome screen.html'" >Sign Up</button>
            </th>
            <th>
                <button type="button" onclick="location.href = '../Login/Login.php';">Cancel</button>
            </th>
            <th>
                <button onclick="document.getElementById('myInput').value = ''">Clear</button>
            </th>
        </tr>
        <script type = "text/javascript">
            <!--
            // Set submit button onsubmit property to the event handler

            document.getElementById("second").onblur = chkPasswords;
            document.getElementById("myForm").onsubmit = chkPasswords;
            // -->
        </script>


    </table>

</form>


</body>

</html>