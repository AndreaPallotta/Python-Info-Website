<?php
	$path = "./";
    $page = 'Feedback, Comments, and Questions';
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
        <p>Your Name</p>
        <input id="name" type="text" name="first_name" placeholder="Your first name" required/>
        <p>Comment</p>
        <textarea id="comment" maxlength="500" name="comment" rows="5" cols="50" placeholder="Please leave your comment here..."></textarea>
        <input id="button" type="submit" class="button" value="Send" /> &nbsp;

    </form>
    
    <h1>These are others' comments:</h1>
    <table>
        <tbody>
            <tr>
                <th>Fist Name</th>
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



