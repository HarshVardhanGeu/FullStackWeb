<?php
include('config.php');
?>
<?php
if(isset($_POST['submit']))
{

  $username=$_POST['username'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $city=$_POST['city'];

  $sql = "INSERT INTO 'users' ('username','email','gender','city') VALUES ('$username','$email','$gender','$city')";
  mysqli_query($conn,$sql);

}
else {
  echo 'Click on submit to submit the data';
}

 ?>
<html>
<body>
  <form action="add.php" method="POST">

    <br>
    username <input type="text" name="username" value="">
    <br>
    email <input type="text" name="email" value="">
    <br>
    Gender:
    Male <input type="radio" name="gender" value="Male">
    Female <input type="radio" name="gender" value="Female">
    <br>
    City :<select class="" name="city">
      <option value="">Dehradun</option>
      <option value="">Delhi</option>
      <option value="">Mumbai</option>
      <option value="">Pune</option>

    </select>
    <br>
<input type="submit" name="submit" value="Press the button to submit">
  </form>
</body>
</html>
