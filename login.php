<form action="login.php" method="post">
  

  <div class="container">
    <label for="emailid"><b>emailid</b></label>
    <input type="text" placeholder="Enter emailid" name="emailid" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
<?php
if($_POST){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "narmam";
$n=$_POST['emailid'];
$o=$_POST['password'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);  
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "select * from hospital where emailid='$n' && password='$o'";
  $res = $conn->query($sql);
   if ($res)
{                               
  echo 'succesfully logged';
}}
catch(PDOException $f) {
  echo $sql . "<br>" . $f->getMessage();
   }

$conn = null;
}
?>
