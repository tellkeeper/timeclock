<?php
$db_host = "localhost";
$db_user = "timeclock1";
$db_pass = "clockin";
$db_name = "timeclock";
$con = mysql_connect($db_host, $db_user, $db_pass) or die(mysql_error());
mysql_select_db($db_name);
//establish variables
$clockit = $_POST['clockit'];
$username = $_POST['username'];
$password = $_POST['password'];
//get date and time
$clock_date = date("m.d.y");
$clock_time = date('H:m:s');
$row = array();
//find user in database of users
$sql1 = "SELECT username FROM users WHERE username = '$username' AND password = '$password'";
mysql_query($sql1, $con);

$query = ("SELECT employee_id, lastname, firstname, middlename FROM users WHERE username = '$username'");
$row = mysql_fetch_array(mysql_query($query));
//breakup array to use in the times table
$employee_id = $row[0];
$lastname = $row[1];
$firstname = $row[2];
$middlename = $row[3];
//post new time record into database
$query = "INSERT INTO times (employee_id, clock, lastname, firstname, middlename, date, time) VALUES ('$employee_id', '$clockit', '$lastname', '$firstname', '$middlename',  '$clock_date', '$clock_time')";
mysql_query($query,$con);


?>
<html>
<body>
<br /><br />
<center>
<img src="picclock.png"><br />
<center><span>_______________________________________________________________________________________________</span></center><br />
<span>Thank you <?php echo $firstname ?>, your time has been logged.</span>
</body>
</html>