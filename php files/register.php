<?php
//Linking the configuration file
require 'config.php';
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h3>Input Student Data </h3>



<table>
   <tr>
    <td><label>Name :</label></td>
    <td><input type="text" name="username" required class="text-bar"></td>
   </tr>
   <tr>
    <td><label>Password :</label></td>
    <td><input type="password" name="password" required class="text-bar"></td>
   </tr>
   <tr>
    <td><label>Gender :</label></td> 
    <td><label>
     <input type="radio" name="gender" value="m" required >Male
     <input type="radio" name="gender" value="f" required >Female</label>
    </td>
   </tr>
   <tr>
    <td><label>Email :</label></td>
    <td><input type="email" name="email" required class="text-bar"></td>
   </tr> 
   <tr>
    <td><label>Select birth year</label></td>
    <td>
     <select name="Year" required>
      <option selected hidden value="" class="text-bar"><label>Select birthyear</label></option>
      <option value="2015">2015</option>
      <option value="2014">2014</option>
      <option value="2013">2013</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2015">2009</option>
      <option value="2015">2008</option>
      <option value="2015">2007</option>
      <option value="2015">2006</option>
      <option value="2015">2005</option>
      <option value="2015">2004</option>
      <option value="2015">2003</option>
      <option value="2015">2002</option>
      <option value="2015">2001</option>
      <option value="2015">2000</option>
      <option value="2015">1999</option>
      <option value="2015">1998</option>
      <option value="2015">1997</option>
      <option value="2015">1996</option>
      <option value="2015">1995</option>
      <option value="2015">1994</option>
      <option value="2015">1993</option>
      <option value="2015">1992</option>
      <option value="2015">1991</option>
      <option value="2015">1990</option>
      <option value="2015">1989</option>
      <option value="2015">1988</option>
      <option value="2015">1987</option>
      <option value="2015">1986</option>
      <option value="2015">1985</option>
      <option value="2015">1984</option>
      <option value="2015">1983</option>

     </select>
   </td>
 </tr>
 <tr>
  <td><label>Enter Your Phone :</label></td>
  <td>
     <input type="phone" name="phone" required class="text-bar">
    </td>
   </tr>
   <tr><td>
   	<label>Enter Your Address : </label></td>
   	<td>
   		<input type="text" name="address" required class="text-bar">
   	</td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit" name="btnSubmit" id="Submit"></td>
    <td><input type="reset" value="Reset"></td>
   </tr>
  </table>

</form>
<?php
if(isset($_POST["btnSubmit"])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $gender = $_POST['gender'];
 $email = $_POST['email'];
 $Year = $_POST['Year'];
 $phone = $_POST['phone'];
 $address = $_POST['address'];
$sql= "INSERT INTO register(username,password, gender, email, Year, phone, address)VALUES('$username','$password','$gender','$email', $Year, $phone, '$address')";
if($con->query($sql)){
echo "Inserted successfully";
}
else{
echo "Error:". $con->error;
}
}
$con->close();
?>