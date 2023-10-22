<?php
session_start();
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$mail=$_SESSION['email'];
$phone=$_SESSION['number'];
$city=$_SESSION['cit'];
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "bbbb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['submit']))
{
    if(!empty($_POST['scriptwritername']) && !empty($_POST['directorname'])&& !empty($_POST['editorname'])&& !empty($_POST['actorname'])){
        $scriptwritername=$_POST['scriptwritername'];
        $directorname=$_POST['directorname'];
        $editorname=$_POST['editorname'];
        $actorname=$_POST['actorname'];


        $query="insert into form(firstname,lastname,mail,phone,city,scriptwritername,directorname,editorname,actorname) values ( '$fname','$lname','$mail','$phone','$city','$scriptwritername','$directorname','$editorname','$actorname')";
        $run=mysqli_query($conn,$query)
        or
        die(mysqli_error($conn));

        $subject = "Team Registration for DWFF";
         $body = "Hi, DWFF thanks you for registering your and your team details for our flagship event of filmmaking in DWFF and we will be further contacting you for the rules of the compitetion and submission of the film.";
         $headers = "From: pradyumn.tendulkar2020@vitstudent.ac.in";
 
         if (mail($mail, $subject, $body, $headers))
 
         {
            echo "Thank You for getting in contact with us";
         }
 
         else
 
         {
            echo "Email sending failed!";
         }
    

    if($run){
        header("location:register1.php");
        }
    else{
            echo "Oops ! Something happened ";
        }
    

    }
    else{
        echo "all fields required";
    }
}
?>