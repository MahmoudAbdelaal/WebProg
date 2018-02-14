<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Teaching Assistant Evaluation</title>
    <link rel="stylesheet" href="Teaching Assistant Evaluation.css">

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

<h1>Arab Academy for Science & Technology & Maritime Transport<br>
    College of Computing & Information Technology</h1>

<h2>Teaching Assistant Evaluation Form</h2>

<table>
    <tr>
        <th>Course Name:</th>
        <th>
            <form>
                <label>
                    <select>
                        <option value="CS617">Digital Logic Design and Computer Archit</option>
                        <option value="CS602">Discrete Structures</option>
                        <option value="CS611">Introduction to Computing</option>
                        <option value="CS641">Introduction to Programming</option>
                        <option value="CS612">Data Structures and Algorithms</option>
                        <option value="CS643">Object Oriented Programming</option>
                        <option value="CS631">Computer Networks</option>
                        <option value="IS675">Database Management Systems</option>
                        <option value="CS666">Introduction to Artificial Intelligence</option>
                        <option value="CS621">System Programming</option>
                        <option value="CS622">Operating Systems</option>
                        <option value="CS644">Web Programming</option>
                        <option value="CS652">Computer Graphics</option>
                        <option value="SE691">Software Engineering</option>
                        <option value="CS623">Data Security</option>
                        <option value="CS605">Modeling and Simulation</option>
                    </select>
                </label>
            </form>
        </th>
        <th> &ensp; &ensp;Course Code:</th>
        <th>
            <form>
                <label>
                    <select>
                        <option value="CS617">CS617</option>
                        <option value="CS602">CS602</option>
                        <option value="CS611">CS611</option>
                        <option value="CS641">CS641</option>
                        <option value="CS612">CS612</option>
                        <option value="CS643">CS643</option>
                        <option value="CS631">CS631</option>
                        <option value="IS675">IS675</option>
                        <option value="CS666">CS666</option>
                        <option value="CS621">CS621</option>
                        <option value="CS622">CS622</option>
                        <option value="CS644">CS644</option>
                        <option value="CS652">CS652</option>
                        <option value="SE691">SE691</option>
                        <option value="CS623">CS623</option>
                        <option value="CS605">CS605</option>
                    </select>
                </label>
            </form>
        </th>
    </tr>
    <tr>
        <th>Semester:</th>
        <th>
            <form>
                <select>
                    <option value="">September 2016</option>
                    <option value="saab">Febrauary 2017</option>
                    <option value="opel">September 2016</option>
                </select>
            </form>
        </th>
    </tr>
    <tr>
        <th>Lecturer Name:</th>
        <th>
            <form>
                <input type="text">
            </form>
        </th>
    </tr>
    <tr>
        <th>TA Name:</th>
        <th>
            <form>
                <input type="text">
            </form>
        </th>
    </tr>
</table>

<hr>

<p>Rate the course’s TA answering the following questions using a
    scale of 1 to 5, 1 where being the lowest and 5 being the highest.</p>

<table>
    <tr>
        <th>1- technical Knowledge about the course</th>
        <th>
            <form>
                <input type="radio" name="optradio" value="1"> 1<br>
                <input type="radio" name="optradio" value="2"> 2<br>
                <input type="radio" name="optradio" value="3"> 3<br>
                <input type="radio" name="optradio" value="4"> 4<br>
                <input type="radio" name="optradio"  value="5"> 5
            </form>
        </th>
    </tr>
    <tr>
        <th>2-	tutorial follows the agreed upon lesson plan </th>
        <th>
            <form>
                <input type="radio" name="optradio" value="1"> 1<br>
                <input type="radio" name="optradio" value="2"> 2<br>
                <input type="radio" name="optradio" value="3"> 3<br>
                <input type="radio" name="optradio" value="4"> 4<br>
                <input type="radio" name="optradio"  value="5"> 5
            </form>
        </th>
    </tr>
    <tr>
        <th>3- promptness performing administrative duties</th>
    </tr>
    <tr>
        <th>&ensp;&ensp;&ensp;- participate in meeting</th>
        <th>
            <form>
                <input type="radio" name="optradio" value="1"> 1<br>
                <input type="radio" name="optradio" value="2"> 2<br>
                <input type="radio" name="optradio" value="3"> 3<br>
                <input type="radio" name="optradio" value="4"> 4<br>
                <input type="radio" name="optradio"  value="5"> 5
            </form>
        </th>
    </tr>
    <tr>
        <th>&ensp;&ensp;&ensp;- assist in proctoring and grading exams</th>
        <th>
            <form>
                <input type="radio" name="optradio" value="1"> 1<br>
                <input type="radio" name="optradio" value="2"> 2<br>
                <input type="radio" name="optradio" value="3"> 3<br>
                <input type="radio" name="optradio" value="4"> 4<br>
                <input type="radio" name="optradio"  value="5"> 5
            </form>
        </th>
    </tr>
    <tr>
        <th>&ensp;&ensp;&ensp;- grading home works and assignment on time </th>
        <th>
            <form>
                <input type="radio" name="optradio" value="1"> 1<br>
                <input type="radio" name="optradio" value="2"> 2<br>
                <input type="radio" name="optradio" value="3"> 3<br>
                <input type="radio" name="optradio" value="4"> 4<br>
                <input type="radio" name="optradio"  value="5"> 5
            </form>
        </th>
    </tr>
    <tr>
        <th>&ensp;&ensp;&ensp;- attends  tutorial and labs on time and is helpful</th>
        <th>
            <form>
                <input type="radio" name="optradio" value="1"> 1<br>
                <input type="radio" name="optradio" value="2"> 2<br>
                <input type="radio" name="optradio" value="3"> 3<br>
                <input type="radio" name="optradio" value="4"> 4<br>
                <input type="radio" name="optradio"  value="5"> 5
            </form>
        </th>
    </tr>
    <tr>
        <th>&ensp;&ensp;&ensp;- Maintains adequate office hours based on lecturer’s follow up and students feedback </th>
        <th>
            <form>
                <input type="radio" name="optradio" value="1"> 1<br>
                <input type="radio" name="optradio" value="2"> 2<br>
                <input type="radio" name="optradio" value="3"> 3<br>
                <input type="radio" name="optradio" value="4"> 4<br>
                <input type="radio" name="optradio"  value="5"> 5
            </form>
        </th>
    </tr>
    <tr>
        <th>4-	Would you work this TA again for this Course</th>
        <th>
            <form>
                <input type="radio" name="optradio" value="1"> No <br>
                <input type="radio" name="optradio" value="2"> If I have to <br>
                <input type="radio" name="optradio" value="3"> May be <br>
                <input type="radio" name="optradio" value="4"> Yes <br>
            </form>
        </th>
    </tr>
    <tr>
        <th colspan="2">5-	Narrative Comment (please evaluate in your own
            words the TA’s performance,concentrating on strengths and weakness related to this course)</th>
    </tr>
    <tr>
        <th colspan="2" >
            <textarea name="message" rows="10" cols="130"></textarea></th>
    </tr>
    <tr>
        <th colspan="2" style="text-align: right">
            Lecturer Signature
            <input type="text">
    </tr>



</table>

<table class="one">
    <tr>
        <th>
            <button type="submit" name="insert" onclick="location.href = '../Welcom screen/Welcome screen.html'" >Save</button>
        </th>
        <th>
            <button type="button" onclick="location.href = '../Welcom screen/Welcome screen.html';">Cancel</button>
        </th>
    </tr>
</table>

</body>

</html>
