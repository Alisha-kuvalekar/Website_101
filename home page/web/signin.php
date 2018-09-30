<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SIGN IN PAGE</title>
<style>
*{
margin: 0px;
padding: 0px;
}
body{
	margin-left: 10px;
}
#demo{
align-content: center;
background-color: pink;
margin-left:365px;
margin-right:365px ;
}
.first{

font-size:20px;
margin-left: 0;
padding:;
position: relative;
display: block;
}
.sec{
margin-top: 40px;
border-style:;
border-color: red;
text-shadow:1px 1px 2px black;
box-shadow:10px 10px brown;

}
fieldset > label{

text-decoration: underline;
font-size: 30px;
font-style: italic;
margin-top:10px;
margin:10px,10px,10px,10px ;
}
.sidh{
text-align: right;
font-size: 20px;
margin-left: 200px;
margin-bottom: 12px;
}
.error {color: #FF0000;}


</style>
</head>
<body  background="https://images.pexels.com/photos/462118/pexels-photo-462118.jpeg?cs=srgb&dl=bloom-blooming-blossom-462118.jpg&fm=jpg">

<?php
	$UsernameErr = $emailErr = $genderErr = "";
    $Username = $email = $gender = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Username"])) {
    $UsernameErr = "Name is required";
  } else {
   // $name = test_input($_POST["name"]);
  	 $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    //$email = test_input($_POST["email"]);
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
  }
}
  if (empty($_POST["gender"])) {
   $genderErr = "Gender is required";
  } else {
   $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<body>


<form id="demo" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); "pro.php"?>" >
<fieldset class="sec"><label> <marquee bgcolor="whete" direction="right"><B>SIGNIN</B></marquee></label>
<div class="first" style="margin-left: 30px;">
<label for = "Username:"><b>Username</b></label><br><input type="text"  value="Username" placeholder="username"><span class="error">* <?php echo $UsernameErr;?></span><br><br>
<label for="email"><b>email</b></label><br><input type="text" name="email" placeholder="email"><span class="error">* <?php echo $emailErr;?></span></br></br>
<label for="password"><b>password</b></label><br/><INPUT type="password" value="password" name="password" placeholder="password"><br/><br/>
<label for ="confirm password"><b>confirm password</b></label><br/><INPUT type="password" name="password" placeholder="password"><br/><br/>
<label for ="address"><b>address</b></label><br/> <input type="text" name="address" value="address" placeholder="address"></input><br/><br/>
<label for ="gender"><b>gender</b></label><br/> <input type="radio" name="gender" id="visit" value="male">male <input type="radio" name="visit" id="visit" value="female">female</input><span class="error">* <?php echo $genderErr;?></span>
 
 <br/><br/><label for="about you"><b>about you </b></label><textarea rows="5" ></textarea><BR/><BR>
<button type="submit" class="sidh" name="submit" value="submit"> submit</button></BR>
<label>
      <input type="checkbox" checked="checked" name="remember"> Succesfully created account
    </label></br></br>
    <p>if you have already an account login <strong><blink>HERE</blink></STRONG>...</p></br>
<button type="submit" class="sidh" >Login</button>

    	
  
</div>
</fieldset> 
</form>
</body>
</legend>
</fieldset>
</html>
