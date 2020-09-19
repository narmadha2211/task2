<html>
<body>
<body bgcolor="pink"></body>
<<h1><b><center>HOSPITAL REGISTRATION FORM</CENTER></B></H1>
</body>
</html>
<form method="POST" action="login.php">
<center><b>FIRSTNAME:<input type="text" name="firstname"/><br><br></center>
<center><b>LASTNAME:<input type="text" name="lastname"/><br><br></center>
<center><b>FATHERNAME:<input type="text" name="fathername"><br><br></center>
<center><b>MOTHERNAME:<input type="text"name="mothername"><br><br></center>
<center><b>DOB:<input type="date"name="dob"><br><br></center>
<center><b>AGE:<input type="number"name="age"><br><br></center>

<center><b>WEIGHT:<input type="number"name="weight"><br><br></center>

<center><b>PATIENTADDRESS:<input type="text"name="patientaddress"><br/><center>
<center><b>CITY:<input type="text" name="city"/></center><br>
<center><b>STATE:<input type="text" name="state"/><BR><BR></center>
<center><b>ZIP CODE:<input type="number"name="zipcode"><br><br><center>
<center><b>EMAIL ID:<input type="text" name="emailid"/><BR><BR></center>
<center><b>PASSWORD:<input type="password"name="password"/><br><br></center>


<center><input type="submit" value="Submit">
</form>
<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "narmam";
$a = $_POST['firstname'];
$b = $_POST['lastname'];
$c = $_POST['fathername'];
$d = $_POST['mothername'];
$e = $_POST['dob'];
$f= $_POST['age'];

$h = $_POST['weight'];

$j = $_POST['patientaddress'];
$k = $_POST['city'];
$l = $_POST['state'];
$m = $_POST['zipcode'];
$n = $_POST['emailid'];
$o=$_POST['password'];

try {
  $conn = NEW PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "insert into hospital(firstname,lastname,fathername,mothername,dob,age,weight,patientaddress,city,state,zipcode,emailid,password)  VALUES ('$a','$b','$c','$d','$e','$f','$h','$j','$k','$l','$m','$n','$o')";
  $conn->exec($sql);
  echo "New record created successfully";
   }
 catch(PDOException $f) {
  echo $sql . "<br>" . $f->getMessage();
   }

$conn = null;
}
?>
