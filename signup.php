<!DOCTYPE html>
<head>
   <Title>
        BUG TRACKING APPLICATION
    </Title>
    

    <link rel="stylesheet" href="css/signup.css">
    

</head>
<body>
    
        
<form action="mainapppage.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    

    <label for="psw"><b>Password</b></label>
    <input type="password" id="passFirst" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" id="passSecond" placeholder="Repeat Password" name="psw-repeat" required>

         <script>
        
        var a= document.getElementById('passFirst');
        var b= document.getElementById('passSecond');
            
            if(a!=b){
               // alert("Password wrong!")
  
            }          
            
        </script>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
        
      <button type="submit" class="signupbtn">Sign Up</button>
        
     
        
      <button type="button" class="cancelbtn"  onclick="window.location.href='index.php';">Cancel</button>   
     
    </div>
  </div>
</form>

    <?php
    
session_start();
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
//This is a test form for registering a user.
// Create connection
    

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Email = $_POST['email'];
$Password = $_POST['psw'];
$PasswordConfirm=$_POST['psw-repeat'];
    
//Generating a salt here.
//The log in page will check if the hashed password
//matches the signup password
    
$hashed_password = password_hash($Password, PASSWORD_DEFAULT);
if($Password==$PasswordConfirm){
$sql = "INSERT INTO myguests (email,Password)
VALUES ('$Email','$hashed_password')";
 
}
else{
     echo "Your passwords must match!";
}
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
    
    //This will output the hash of the password. To make sure the hash function works!
    echo $hashed_password;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
    

$conn->close();
?>
    
    
    
</body>