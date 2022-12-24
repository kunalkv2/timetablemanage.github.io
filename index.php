<?php
if (isset($_POST['fname'])) {
    
$serverName = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($serverName, $username, $password);

if (mysqli_connect_errno()) {
    echo "Connection to database is failed";
    exit();
} else {
    echo "connection done";
}
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dateofbirth = $_POST['dob'];
    $phonenumber = $_POST['pnumber'];
    $mail = $_POST['mail'];
    $sql = "INSERT INTO `ttdata` . `timetable` (`FIRST NAME`, `LAST NAME`, `DATE OF BIRTH`, `PHONE NUMBER`, `EMAIL ID`)
 VALUES ('$fname', '$lname', '$dateofbirth', '$phonenumber','$mail')";

//INSERT INTO `timetable` (`SNO`, `FIRST NAME`, `LAST NAME`, `DATE OF BIRTH`, `PHONE NUMBER`, `EMAIL ID`) 
//VALUES ('1', 'KUNAL', 'VISHWAKARMA', '20', '0123456789', 'current_timestamp()');

    if ($con->query($sql) == true) {
        echo "Your registration is succesfull";
    } else {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>TT GENERATOR</title>
  </head>
  <body>
    <img class="backimg" src="vackground.png" alt="bakimg">
    <div class="container">
      <h2 style="font-size: 35px">WELCOME TO AUTOMATIC TIME TABLE GENERATOR</h2>
      <p style="font-size: 25px">
        Enter yours details and submit to generate the time table
      </p>

      <form action="index.php" method = "post">
        <input
          type="name"
          name="fname"
          id="fname"
          placeholder="Enter your first name"
        />
        <br />

        <input
          type="name"
          name="lname"
          id="lname"
          placeholder="Enter your last name"
        />
        <br />

        <input type="int" name="age" id="age" placeholder="Enter your age" />
        <br />

        <input
          type="number"
          name="phone"
          id="phone"
          placeholder="Enter your phone number"
        />
        <br />
        <input
          type="email"
          name="mail"
          id="mail"
          placeholder="Enter your mail ID"
        />
        <br />

        <!-- <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Any other details"
        ></textarea> -->
        <button class="btn"> <a href="index.php"></a> Submit</button>
        <button class="btn2">Reset</button>
      </form>
    </div>
  </body>
</html>
