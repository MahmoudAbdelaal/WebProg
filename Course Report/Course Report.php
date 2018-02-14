<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Course Report</title>
    <link rel="stylesheet" href="Course Report.css">

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


    $sql = "INSERT INTO user (email, password, FirstName,LastName,Address,MobilNumber)
VALUES ('$email', '$password', '$FirstName' , '$LastName','$Address','$MobilNumber')";

    if ($conn->query($sql) == TRUE) {
        header('Location:../Welcom screen/Welcome screen.html');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<body>

<h1><br>Arab Academy for Science & Technology & Maritime Transport<br>
    College of Computing & Information Technology</h1>
<hr>

<h2>
    Form No. (16)<br>
    Course Report
</h2>

<h4>
    University / Academy: Arab Academy for Science & Technology and Maritime Transport<br>
Faculty / Institute: College of Computing and Information Technology<br>
    Department:
</h4>

<p><strong>A- Basic information</strong></p>

<table>
    <tr>
        <th>1. Course title and course code</th>
        <th><input type="text"></th>
    </tr>
    <tr>
        <td>2. Specialization</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>3. Year/Level</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>4. Units/Credit hours</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>5. The system used to select the exams committee</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>6. External reviewing system of exam </td>
        <td>
            <input type="checkbox">Available
            <input type="checkbox">Not available
        </td>
    </tr>
    <tr>
        <td>7. Number of teaching staff</td>
        <td><input type="text"></td>
    </tr>
</table>

<p><strong>B- Specialized information</strong></p>

<table>
    <tr>
        <td colspan="2">1- Statistics: </td>
    </tr>
    <tr>
        <td>No. of students enrolled in this course</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>No. of students who took the exam</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Exam results </td>
        <td>No. passed&nbsp;<input type="text">% &nbsp No. Failed &nbsp <input type="text">% </td>
    </tr>
    <tr>
        <td>Percentage of successful students according to grades obtained</td>
        <td>Excellent <input type="text"> Very good  <input type="text"> <br> Good    &nbsp &nbsp &nbsp <input type="text">  Pass    &nbsp &nbsp &nbsp &nbsp &nbsp <input type="text">  </td>
    </tr>
    <tr>
        <td colspan="2">2- Course teaching:</td>
    </tr>
    <tr>
        <td>Topics that have been taught</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Percentage of what has been taught from the syllabus</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>Commitment of instructors towards the syllabus</td>
        <td>> 85% <input type="checkbox"> 60-85%  <input type="checkbox"> < 60%    <input type="checkbox"></td>
    </tr>
    <tr>
        <td>The extent to which the exam covers the course content</td>
        <td>> 85% <input type="checkbox"> 60-85%  <input type="checkbox"> < 60%    <input type="checkbox"></td>
    </tr>
    <tr>
        <td>Teaching and learning methods</td>
        <td>Lectures <input type="checkbox"> Practical training  <input type="checkbox"><br> Case study <input type="checkbox" >
            Class activity <input type="checkbox"><br>Class work (to be mentioned):
            Problem solving, presentations & discussions, reports ….
        </td>
    </tr>
    <tr>
        <td>Student assessment method</td>
        <td>Theoretical  <input type="checkbox">Practical<input type="checkbox"> Oral<input type="checkbox">Class work<input type="checkbox"></td>
    </tr>
    <tr>
        <td colspan="2">3- Facilities available for teaching: </td>
    </tr>
    <tr>
        <td>- Scientific reference books</td>
        <td>> Available   <input type="checkbox">  Available to limited extent <input type="checkbox"><br> Not available    <input type="checkbox"></td>
    </tr>
    <tr>
        <td>- Specific media</td>
        <td>> Available   <input type="checkbox">  Available to limited extent <input type="checkbox"><br> Not available    <input type="checkbox"></td>
    </tr>
    <tr>
        <td>- Requisites and materials </td>
        <td>> Available   <input type="checkbox">  Available to limited extent <input type="checkbox"><br> Not available    <input type="checkbox"></td>
    </tr>
    <tr>
        <td>4-	Administration and organization constraints</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>5- Student evaluation of the course (%)</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>6-	Suggestions for improving the course</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>7-	External reviewer comments (if any)</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>8-	The implementation of the previous year’s suggestions</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td>9-	Previous suggestions not implemented (What are they? Why?)</td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td colspan="2">10-	Course development action plan for next year  </td>
    </tr>
    <tr>
        <td>Areas of development</td>
        <td>Description of development</td>
        <td>Timing of development</td>
        <td>Person responsible for the implementation</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
<br>

<form>
    Course coordinator name: <input type="text">
    Signature: <input type="text">
    Date: <input type="text">
</form>

<br>
<form>
            <button type="submit" name="insert" onclick="location.href = '../Welcom screen/Welcome screen.html'" >Save</button>
            <button type="button" onclick="location.href = '../Welcom screen/Welcome screen.html';">Cancel</button>
</form>
</body>

</html>
