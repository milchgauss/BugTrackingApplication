<!DOCTYPE html>
<html>
<head>

    <Title>
        BUG TRACKING APPLICATION
    </Title>

    <link rel="stylesheet" href="css/mainapp.css">
    

</head>
<body>
    

 
    <nav class="navbar navbar-inverse  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="mainapppage.php">BugTrack</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Current Projects</a></li> 
  
        
      <li><a href="postissuepage.php" class="button" >Post Issue</a>
          </li>
      
       
      </ul>
        
        
        
      <ul class="nav navbar-nav navbar-right">
    
      
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> User Profile</a></li>
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>
    
    <!-- The sidebar -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<div class="sidebar">
    
    <div class="searchbar" style="margin-top: 10px; margin-left:10px; margin-right:10px;">
        
    <form action="/action_page.php">
      <input type="search" placeholder="Search.." name="search" style="width:165px;">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        </div>
    
  <a class="active" href="#home"><i class="fa fa-home"></i> Home</a>
  <a href="#about"><i class="fa fa-address-card"></i> My Profile</a>  
  <a href="#news"><i class="fa fa-bug"></i> My Reports</a>
  <a href="#contact"><i class="fa fa-file"></i> My Comments</a>
  <a href="#contact"><i class="fa fa-envelope"></i> Replies</a>
 
</div>

    
    
<!--Table-->
  
    
<table class="table table-striped w-auto" 
 style="position:absolute;width:100%; padding-left:270px; margin-top:90px; max-width:950px; margin-bottom: auto; margin-left: 270px; padding-right:100px; margin-right: 100x; z-index: -1;" >


  <!--Table head-->
  <thead >
    <tr>
      <th>#</th>
      <th>Issue</th>
      <th>Poster</th>
      <th>Date Created</th>
      <th>Status</th>
      <th>Updated</th>
      <th>Severity</th>
    </tr>
  </thead>
  <!--Table head-->

  <!--Table body-->
<!-- I used my own application here to track bugs in the application itself-->
  <tbody>
    <tr class="table-info">
      <th scope="row">1</th>
      <td>Update: You seemed to have fixed it! Why was z-index at -1? That was the reason it was unclickable. Can you please fix the text area in the table of "Post Issue?" Thank you!</td>
      <td>Moss</td>
      <td>24/06/2020</td>
      <td>Fixed</td>
      <td>24/06/2020</td>
      <td>MILD</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Please Hash your passwords? When you're allowing users to sign up in MySQL, please use the password_hash function to encrypt your passwords. You can use the password_verify function when you want to log them in!</td>
      <td>Wintour</td>
      <td>24/06/2020</td>
      <td>Fixed</td>
      <td>24/06/2020</td>
      <td>SEVERE</td>
    </tr>
   <tr class="table-info">
      <th scope="row">3</th>
      <td>Understand how to place all of your bug report information in to the table of the home page. They will be fixed!</td>
      <td>Moss</td>
      <td>24/06/2020</td>
      <td>Fixed</td>
      <td>24/06/2020</td>
      <td>SEVERE</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Implementing an interface?</td>
      <td>Wintour</td>
      <td>24/06/2020</td>
      <td>Fixed</td>
      <td>24/06/2020</td>
      <td>SEVERE</td>
    </tr>
  <tr class="table-info">
      <th scope="row">5</th>
      <td>Errors and Exceptions</td>
      <td>Moss</td>
      <td>24/06/2020</td>
      <td>Fixed</td>
      <td>24/06/2020</td>
      <td>SEVERE</td>
    </tr>
    <tr>
        
      <th scope="row">6</th>
      <td>This table here is just a test for the developer to place information. This is how we'll test the application. Yes, all of these reports were made by the developer themselves with different names as Alibi.</td>
        
      <td>Wintour</td>
      <td>24/06/2020</td>
      <td>Fixed</td>
      <td>24/06/2020</td>
      <td>SEVERE</td>
    </tr>
     

  </tbody>
  <!--Table body-->
</table>

  -->  
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>
</html>
   