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
        <li><a href="mainapppage.php">Current Projects</a></li> 
  
          <li><button style="margin-top:12px; margin-left:13px;">Post Issue</button></li>  

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
    
    <div class="searchbar" style="margin-top: 10px; margin-left:10px; margin-right:10px; z-index=100;">
        
    <form action="/action_page.php">
      <input type="search" placeholder="Search.." name="search" style="width:165px;">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        </div>
    
  <a class="active" href="mainapppage.php"><i class="fa fa-home"></i> Home</a>
  <a href="#about"><i class="fa fa-address-card"></i> My Profile</a>  
  <a href="#news"><i class="fa fa-bug"></i> My Reports</a>
  <a href="#contact"><i class="fa fa-file"></i> My Comments</a>
  <a href="#contact"><i class="fa fa-envelope"></i> Replies</a>
 
</div>

    
    <div class="actual form" style="margin-left:250px;margin-right:0px;margin-top:60px; position:absolute; z-index:1;
        ">
        
        <textarea 
        id="names" name="w3" rows="1" cols="10" required  maxlength="50">
        </textarea>
 
        <br>

        <textarea 
        id="w3review" name="w3review" rows="4" cols="50" required maxlength="50" minlength="30">
        </textarea>
        
           <script>
               
        function minimumLength(){
            if(textOne.length<1||textTwo.length<1)
        {
        window.alert ("This field cant be left empty");
        return true;
        }
        else
        {
        return false;
        }
            
            
        }
        var textOne= document.getElementById("names").innerHTML =minimumLength();
        var textTwo=document.getElementById("w3review").innerHTML =minimumLength();
               
               
   
        </script>



<br>
  <select id="selection" name="severityStatus">  
  <option value="Mild">Mild</option> 
  <option value="Moderate">Moderate</option>
  <option value="Severe">Severe</option>
  </select>
  
  
   <select id="selectionTwo" name="bugState">  
  
  <option value="Needs Fixing" >Needs Fixing</option> 
  <option value="Fixed" >Fixed</option>
 
  </select>


<br>
<br>

<table class="table table-hover table-fixed">

  <!--Table head-->
  <thead>
    <tr>
      <th>Email</th>
      <th>Comment</th>
      <th>Severity</th>
      <th>Date</th>
     
    </tr>
  </thead>
    </table>

<table id="myTable" class="table table-striped w-auto">

<thead>
    
  <th>
      
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
  <tr> </tr>
 
  </th>
    
</thead>
 
</table>
<br>

<button type="button" onclick="myFunction()">Post Issue</button>
        
<button type="button" onclick="deleteIssue()">Delete Last Issue</button>
        
<script>
function deleteIssue(){
   
  var table = document.getElementById("myTable");
  var row = table.deleteRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3= row.insertCell(2);
  var cell4= row.insertCell(3);
  var cell5= row.insertCell(4);
  
  var x = document.getElementById("w3review").value;
  var y = document.getElementById("names").value;
  var z= document.getElementById("selection").value;
  var a= document.getElementById("selectionTwo").value;
  var d= new Date();
  
  
  if (x==""||y=="" || x.match(/^ *$/) !== null|| y.match(/^ *$/) !== null){
   cell1.innerHTML = "Not a bug!";
   cell2.innerHTML = "Not a bug!";
      
   document.getElementById("myTable").deleteRow(0); 
  }
 
  else{

  cell1.innerHTML = y;
  cell2.innerHTML = x;
  cell3.innerHTML= z;
  cell4.innerHTML= d.toUTCString();
  cell5.innerHTML= a;
  
  }
}
    

    
</script>
        


<script>
function myFunction() {
    
  var table = document.getElementById("myTable");
  var row = table.insertRow(0);
  var cell1 = row.insertCell(0);
  var cell2 = row.insertCell(1);
  var cell3= row.insertCell(2);
  var cell4= row.insertCell(3);
  var cell5= row.insertCell(4);
  
  var x = document.getElementById("w3review").value;
  var y = document.getElementById("names").value;
  var z= document.getElementById("selection").value;
  var a= document.getElementById("selectionTwo").value;
  var d= new Date();
  
  var patt = /w3schools/i;
  if (x==""||y==""){
   cell1.innerHTML = "Not a bug!";
   cell2.innerHTML = "Not a bug!";
   document.getElementById("myTable").deleteRow(0); 
  }
 
  else{

  cell1.innerHTML = y;
  cell2.innerHTML = x;
  cell3.innerHTML= z;
  cell4.innerHTML= d.toUTCString();
  cell5.innerHTML= a;
  
  }
}


</script>   
    
    </div> 
    

     
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</body>


</html>