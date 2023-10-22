<?php
$conn = mysqli_connect("localhost:3306", "root", "", "bbbb");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        if(isset($_POST["sub"]))
        { 
        // Taking all 4 values from the form data(input)
        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject =  $_REQUEST['subject'];
        $message = $_REQUEST['message'];
         
        // Performing insert query execution
        // here our table name is contact
        $sql = "INSERT INTO contact  VALUES ('$name',
            '$email','$subject','$message')";
         mysqli_query($conn, $sql);
         $subject = "Contact Confirmation";
         $body = "Hi, DWFF thanks you for coming forward with your message and we will get back to you regarding the same as soon as possible ";
         $headers = "From: aviral.sharma2020@vitstudent.ac.in";
 
         if (mail($email, $subject, $body, $headers))
 
         {
            echo "Thank You for getting in contact with us";
         }
 
         else
 
         {
            echo "Email sending failed!";
         }
        }
        if(isset($_POST["reserve"]))
        {
         $fname =  $_REQUEST['firstname'];
         $lname = $_REQUEST['lastname'];
         $email =  $_REQUEST['mail'];
         $phone = $_REQUEST['phone'];
         $city =  $_REQUEST['city'];
         $sql = "INSERT INTO ticket(firstname,lastname,mail,phone,city)  VALUES ('$fname',
            '$lname','$email','$phone','$city')";
         mysqli_query($conn, $sql);
         $last_id= mysqli_insert_id($conn);
$subject = "Ticket Registration details";
$body = "Thank you for registering for our events. Your participation id is ". $last_id .". Please keep this id safe and we look forward to your participation in our events.";
$headers = "From: aviral.sharma2020@vitstudent.ac.in";
 
if (mail($email, $subject, $body, $headers))
 
{
    echo "Email successfully sent to $email...";
    header("location:../ticket.php");
}
 
else
 
{
    echo "Email sending failed!";
}
        }
        // Close connection
        mysqli_close($conn);

?>