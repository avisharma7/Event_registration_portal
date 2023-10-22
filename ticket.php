<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "bbbb";
$i=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$query="select * from ticket";
$run=mysqli_query($conn,$query)
or
    die(mysqli_error($conn));
  foreach($run as $r): $i++;
endforeach;
if ($i<=2)
{
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registeration page</title>
  <link rel="stylesheet" href="style.css">
  <style>
    a {
      text-decoration: none;
      color: #fff;
      text-transform: uppercase;
    }

    input {
      width: 800px;
      height: 30px;
      background-color: white;
    }

    .button {
      background-color: red;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .container {
      margin: auto;
      height: 450px;
      width: 840px;
      border: 5px solid rgb(10, 10, 10);
      border-radius: 20px;
      padding: 20px;
      background-color: rgb(132, 210, 234);

    }
  </style>
</head>

<body>
  <div class="banner">
    <div class="navbar1">
      <!-- <img src="logo2.png" class="logo" alt="DWFF"> -->
      <a href="index.html">
        <h3>DWFF</h3>
      </a>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="speakers/speakers.html">Event</a></li>
        <li><a href="schedule/schedule.html">Schedule</a></li>
        <li><a href="register1.php">Register</a></li>
        <li><a href="ticket.php">Ticket</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="faq.html">FAQ</a></li>
      </ul>
    </div>
    <div class="container">
      <h1>GET YOUR PASSES</h1>
      <form method="POST" action="php/sendEmail.php">
        <input type="text" name="firstname" placeholder="Enter your first name" size="50"><br><br>
        <input type="text" name="lastname" placeholder="Enter your last name" size="50"><br><br>
        <input type="email" name="mail" placeholder="Enter your mail id" size="50"><br><br>
        <input type="tel" name="phone" placeholder="Enter your whatsapp number" size="50"><br><br>
        <input type="text" name="city" placeholder="Enter your city name" size="50"><br> <br> <br>
        <button class="button" type="mail" name="reserve">Reserve your seat</button> <br> <br>
      </form>
    </div>
  </div>
</body>
</html>
<?php
}
else
{
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registeration page</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="thank.css">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Source+Sans+Pro" rel="stylesheet">

  <style>
    a {
      text-decoration: none;
      color: #fff;
      text-transform: uppercase;
    }

    input {
      width: 800px;
      height: 30px;
      background-color: white;
    }

    .button {
      background-color: red;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    .container {
      margin: auto;
      height: 450px;
      width: 840px;
      border: 5px solid rgb(10, 10, 10);
      border-radius: 20px;
      padding: 20px;
      background-color: rgb(132, 210, 234);

    }
  </style>
</head>

<body>
  <div class="banner">
    <div class="navbar1">
      <!-- <img src="logo2.png" class="logo" alt="DWFF"> -->
      <a href="index.html">
        <h3>DWFF</h3>
      </a>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="speakers/speakers.html">Event</a></li>
        <li><a href="schedule/schedule.html">Schedule</a></li>
        <li><a href="register1.">Register</a></li>
        <li><a href="ticket.php">Ticket</a></li>
        <li><a href="contact.html">Contact Us</a></li>
        <li><a href="faq.html">FAQ</a></li>
      </ul>
    </div>
  </div>
  <div class=content>
  <div class="wrapper-1">
    <div class="wrapper-2">
      <h1>Sorry!</h1>
      <p>All the seats are fully occupied at the moment.  </p>
      <p>The ticket page wll open again in case of any vacancies. </p>
      <form method="get" action="index.html">
      <button class="go-home">
      go home
      </button>
    </div>
    <div class="footer-like">
      <p>
       <a href="speakers/speakers.html">Click here to check our event page</a>
      </p>
    </div>
</div>
</div>
</body>
</html>
<?php
}
?>