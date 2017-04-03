<html>
<head>
<style>
.button {
    background:url(btn.png) no-repeat;
    color:bbbbbb;
    font-family:calibri;
    font-size:11pt;
    cursor:pointer;
    width: 110px;
    height: 30px;
    border: none;
    text-shadow: 0.1em 0.1em #000
}
a{
  text-decoration:none;
  color:black;
  font-family:calibri;
  font-size:11pt;
  text-shadow: 0.1em 0.1em #ccc
}
span{
  color:black;
  font-family:calibri;
  font-size:11pt;
  text-shadow: 0.1em 0.1em #ccc
}
select {
   width:145px;	
}
</style>
</head>
<body>
<br /><br />
<center>
<img src="picclock.png"><br /><center><span>Admin Panel</span></center>
<center><span>_______________________________________________________________________________________________</span></center>
<br /><br />
<table width="780" height="300" border="0">
<tr><td>
<form action=".php" method="post">
<table width="150" height="65" border="0">
<tr><td><center>Get 7 day Report</center></td></tr>
<td><center><input class="button" type=button src="btn.png" value="Submit" /></center></td></tr>
</table>
</form>
</td><td>
<form action=".php" method="post">
<table width="150" height="65" border="0">
<tr><td><center>Get 14 day Report</center></td></tr>
<td><center><input class="button" type=button src="btn.png" value="Submit" /></center></td></tr>
</table>
</form>
</td><td>
<form action=".php" method="post">
<table width="150" height="65" border="0">
<tr><td><center>Get 30 day Report</center></td></tr>
<td><center><input class="button" type=button src="btn.png" value="Submit" /></center></td></tr>
</table>
</form>
</td><td>
<form action=".php" method="post">
<table width="150" height="65" border="0">
<tr><td><center>Get Annual Report</center></td></tr>
<td><center><input class="button" type=button src="btn.png" value="Submit" /></center></td></tr>
</table>
</form>
</td><td>
<form action=".php" method="post">
<table width="175" height="65" border="0">
<tr><td><center>Get Annual Long Report</center></td></tr>
<td><center><input class="button" type=button src="btn.png" value="Submit" /></center></td></tr>
</table>
</form>
</td></tr>
<tr><td colspan="2"></center>
<form action=".php" method="post">
	<table width="350" height="150" border="0">
	<tr><td colspan="2"><center><span>Add User</span></center></td></tr>
	<tr><td><span id="login"><center>First Name:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Middle Name:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Last Name:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Employee ID#:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Username:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Password:</center></span></td><td><input type=password name=""></td></tr>
	<tr><td><span id="login"><center>Confirm Password:</center></span></td><td><input type=password name=""></td></tr>
	<tr><td><span id="login"><center>Clock in without camera?</center></span></td><td><center><input type=checkbox name=""></center></td></tr>
	<tr><td><span id="login"><center>Mobile/Smartphone user?</center></span></td><td><center><input type=checkbox name=""></center></td></tr>
	<tr><td colspan="2"><center><input class="button" type=button src="btn.png" value="Submit" /></center></td></tr>
	</table>
</form>
</center></td><td colspan="3" align="right">
<form action=".php" method="post">
	<table width="350" height="150" border="0">
	<tr><td colspan="2"><center><span>Add Organization</span></center></td></tr>
	<tr><td><span id="login"><center>Organization Name:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Contact Name:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Contact Email:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Admin Username:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Password:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Confirm Password:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Public IP Range Start:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td><span id="login"><center>Public IP Range End:</center></span></td><td><input type=text name=""></td></tr>
	<tr><td colspan="2"><center><input class="button" type=button src="btn.png" value="Submit" /></center></td></tr>
	</table>
</form>
</td></tr></table>
<br /><br />
<center><span>_______________________________________________________________________________________________</span></center><br />
</body>
</html>