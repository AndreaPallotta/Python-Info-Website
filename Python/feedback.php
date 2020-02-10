<?php
$path = "./";
$page = 'Feedback Survey';
include "template.php";

require "../../../dbConnect.inc";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($mysqli) {
    if (isset($_GET['name']) && isset($_GET['comment']))
    {
        if( $_GET['name']!='' && $_GET['comment']!='' )
        {
            $name = test_input($_GET['name']);
            $comment = test_input($_GET['comment']);

            //prepare my query
            $stmt=$mysqli->prepare("INSERT INTO python_feedback (name, comment) VALUES(?,?)");
            //bind
            $stmt->bind_param("ss", $name, $comment);
            //execute
            $stmt->execute();
            //close
            $stmt->close();
        }
    }
    //get contents of table and send back...
    $sql = 'SELECT name, comment FROM python_feedback';
    $res = $mysqli->query($sql);
    if($res){
        while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
            $records[] = $rowHolder;
        }
    }
    $size = sizeof($records);
}


$destination_email = "ap4534@g.rit.edu"; //for april 18, use "RITISTprofessor@gmail.com" instead of whateverEmail

$email_subject = "Pythoon Feedback Submission";
$email_body = "Name: $name\n";
$email_body .= "Comment: $comment\n";

mail($destination_email, $email_subject, $email_body);



?>


<div id="wrapper">
    <h1>Leave your feedback, comments, and questions here!</h1>

    <form action="blog.php" method="GET">
        <p>Your First Name</p>
        <input id="name" type="text" name="first_name" placeholder="Your first name" required/>

        <p>Your Last Name</p>
        <input id="name" type="text" name="first_name" placeholder="Your last name" required/>

        <p>Your Email :</p>
        <input id="email" type="email" name="email" placeholder="Valid Email Address" required/>

        <p>Your State<br />
            <select style="width:5em;" name="state" size="1" id="state">
                <option value="Select">Select</option>
                <option value="AK">AK</option>
                <option value="AL">AL</option>
                <option value="AR">AR</option>
                <option value="AZ">AZ</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DC">DC</option>
                <option value="DE">DE</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="IA">IA</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="MA">MA</option>
                <option value="MD">MD</option>
                <option value="ME">ME</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MO">MO</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="NE">NE</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>
                <option value="NV">NV</option>
                <option value="NY">NY</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VA">VA</option>
                <option value="VT">VT</option>
                <option value="WA">WA</option>
                <option value="WI">WI</option>
                <option value="WV">WV</option>
                <option value="WY">WY</option>
            </select>
        </p>

        <p>How much did you like Pythoon?</p>
        <p class="MyValues">0
            <input class="MyValues" name="range" type="range" id="myRange" min="0" max="10" step="1" list="volsettings" required/>
            <datalist id="volsettings">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
            </datalist>
            10
        </p>

        <p>Did this website help you improving your Python skills? </p>
        <select name="selectSkills" required>
            <option value="">-- Choose One --</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Prefer not to answer">I prefer not to answer</option>
        </select>

        <p>Did this website help you having a better undertanding of the topic? </p>
        <select name="selectUnderstand" required>
            <option value="">-- Choose One --</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
            <option value="Prefer not to answer">I prefer not to answer</option>
        </select>

        <p>What was your favorite section? </p>
        Variables <input type="checkbox" name="favorite" value="Variables" />
        Operations <input type="checkbox" name="favorite" value="Operations" />
        Comments <input type="checkbox" name="favorite" value="Comments" />
        Conditional Logic <input type="checkbox" name="favorite" value="Conditional Logic" />
        Loops <input type="checkbox" name="favorite" value="Loops" />
        Functions <input type="checkbox" name="favorite" value="Functions" />
        Classes <input type="checkbox" name="favorite" value="Classes" />
        Modules <input type="checkbox" name="favorite" value="Modules" />
        Others <input type="checkbox" name="favorite" value="Others" onclick="OthersInput(this)"/>
        <p id="InsertOther"></p>


        <p>Comment</p>
        <textarea id="comment" maxlength="500" name="comment" rows="5" cols="50" placeholder="Please leave your comment here..."></textarea>
        <input id="button" type="submit" class="button" value="Send" /> &nbsp;

    </form>

    <h1>These are others' comments:</h1>
    <table>
        <tbody>
        <tr>
            <th>Fist Name</th>
            <th>Last Name</th>
            <th>Comment</th>
        </tr>
        <?php
        for ($i = 0; $i < $size; $i++)
        {
            ?>
            <tr>
                <td>
                    <?php echo $records[$i]['name'] ?>
                </td>
                <td>
                    <?php echo $records[$i]['comment'] ?>
                </td>
            </tr>

        <?php } ?>

        </tbody>
    </table>
</div>
</body>

</html>



