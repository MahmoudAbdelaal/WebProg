<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Endorsement</title>
    <link rel="stylesheet" href="Endorsement.css">
</head>

<?php
if (isset($_POST['insert']))
{
    $servername = "localhost";
    $username = "root";
    $password = "Hadeel123Mahmoud";
    $dbname = "quality";

    $Endorsement_Name = $_POST['Endorsement_Name'];
    $Prescribed = $_POST['Prescribed'];
    $Prescribed_Code = $_POST['Prescribed_Code'];
    $Semester = $_POST['Semester'];
    $Name = $_POST['Name'];
    $Signature = $_POST['Signature'];
    $DayDate = $_POST['DayDate'];

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO endorsement (Endorsement_Name,Prescribed,Prescribed_Code,Semester,Name,Signature,DayDate)
            VALUES ('$Endorsement_Name','$Prescribed','$Prescribed_Code','$Semester','$Name','$Signature','$DayDate')";

    if ($conn->query($sql) == TRUE) {
        header('Location:../Welcom screen/Welcome screen.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<body>
<form action="Endorsement.php" method="post">
<table>
    <tr>
        <th>
            <img src="../logo.png" width="150" height="150">
        </th>

        <th>
            <h1>الأكاديمية العربية للعلوم والتكنولوجيا والنقل البحري<br>
                كلية الحاسبات وتكنولوجيا المعلومات<br>
                الأقسام التعليمية
            </h1>
        </th>
        <th>
            <img src="../aast2.jpg" height="150" width="150">
        </th>
    <tr>
        <th colspan="3" >
            <h1>اقرار</h1>
        </th>
    </tr>
</table>

<div>
    <p>
        <label>
            <input  class="name" type="text" name="Endorsement_Name" required>
        </label>
        / أقر أنا
    <br>

        <label>
            <input type="text" name="Prescribed" required>
        </label>
     محاضر مقرر
        <label>
            <input type="text" name="Prescribed_Code" required>
        </label>
        كود&nbsp; <br>
        <label>
            <input  type="date" name="Semester" required>
        </label>

   عن الفصل الدراسي&nbsp;  </p>
    <p>
        .بأنه لا يوجد لي أقارب حتي الدرجة الثانية ضمن مجموعة الطلاب اللذين أقوم بالتدريس لهم
    </p>

<p class="end">.وهذا إقرار مني بذلك</p>

    <table>
        <tr>
            <th> <input type="text" name="Name" required> </th>
            <th> :الإسم</th>
        </tr>
        <tr>
            <th> <input type="text" name="Signature" required> </th>
            <th> :التوقيع</th>
        </tr>
        <tr>
            <th> <input type="date" name="DayDate" required> </th>
            <th> :التاريخ</th>
        </tr>
    </table>
    <br>

    <table class="button">
        <tr>
            <th>
                <button type="submit" name="insert" onclick="location.href = '../Welcom screen/Welcome screen.html'" >Save</button>
            </th>
            <th>
                <button type="button" onclick="location.href = '../Welcom screen/Welcome screen.html';">Cancel</button>
            </th>
            <th>
                <button onclick="document.getElementById('myInput').value = ''">Clear</button>
            </th>
        </tr>
    </table>

</form>

</form>

</body>

</html>