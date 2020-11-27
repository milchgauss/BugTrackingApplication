<!DOCTYPE html>

<head>
    <Title>
        BUG TRACKING APPLICATION
    </Title>
    <link rel="stylesheet" href="css/loginstyle.css">

</head>
<body>
    
        
  <form action="mainapppage.php" method="post">
  <div class="imgcontainer">
   <img src="images/BugTrackerAppIconFinal.png"  alt="Avatar" class="avatar">
  </div>

  <div class="container">
      
    <label for="uname"><b>Username</b></label>
    <input type="text" id="usernameid" placeholder="Email Address" name="uname">

<!-- Password validation below. Uses the "lookahead" expression combination ?=.* to see if the password contains at least one digit from 0-9 \d, One capital letter, and one lower case letter. -->
    <label for="psw"><b>Password</b></label>
    <input type="password" id="passwordid" placeholder="Enter Password" name="psw"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}">

      <div class="buttons">  
    <button type="submit" onclick="checkTextField()">Login</button>
          
        
          <script>
          function checkTextField(){
              //Form validation here!  
            // Make sure that both username and password are entered.  
            document.getElementById("usernameid").required=true;    
            document.getElementById("passwordid").required=true; 
              
             
          </script>
          
    <!--Form to sign up and to input user data into the Database.
  MySQL was used in this application, along with password hashing and verification.-->    
          
    <button type="signup" onclick="checkTextFieldTwo()"id="signupid" formaction="signup.php">Sign up</button>

          <script>
          function checkTextFieldTwo(){    
             document.getElementById("usernameid").required=false;                 
             document.getElementById("passwordid").required=false;           
          }
          </script>
      </div>
      
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
      
    <span class="psw">Forgot <a href="#">password?</a></span>

  </div>
</form>
    
</body>

 