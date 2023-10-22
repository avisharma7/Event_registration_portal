<!--image 9-->
<?php
    $date=strtotime("Dec 15, 2023");
    $time=time();
    if ($time<$date)
    {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registeration Form</title>
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
      <h1>REGISTERATION</h1>
      <h1>ENTER TEAM LEADER'S DETAILS</h1>
      <form action="fetch.php" method="POST">
        <input type="text" name="firstname" placeholder="Enter your first name" size="50"><br><br>
        <input type="text" name="lastname" placeholder="Enter your last name" size="50"><br><br>
        <input type="email" name="mail" placeholder="Enter your mail id" size="50"><br><br>
        <input type="tel" name="phone" placeholder="Enter your whatsapp number" size="50"><br><br>
        <input type="text" name="city" placeholder="Enter your city name" size="50"><br> <br> <br>
        <!--<a href="register2.html">-->
        <button class="button" type="save" name="save">NEXT</button> <br> <br>
        </a>
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
        <li><a href="register1.php">Register</a></li>
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
      <p>Time to register your film has already passed.  </p>
      <p>We look forward to your participation next year. Check out our event page and buy tickets for your team. </p>
      <form method="get" action="index.html">
      <button class="go-home">
      go home
      </button>
    </div>
    <div class="footer-like">
      <p>
       <a href="ticket.php">Click here to go to ticket page</a>
      </p>
    </div>
</div>
</div>
</body> 
</html>
<?php
}
?>