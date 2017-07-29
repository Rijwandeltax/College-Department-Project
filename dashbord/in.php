<!DOCTYPE >
<html>
  <head>
    <title>Education & Entertainment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
	<link href="css/w3.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){   
   $("a").click(function(){
   var t=$(this).attr("class"); 
    
   $("#"+t).fadeIn(1000);
   if(t=="noti"){
   $("#time").hide();
   $("#syllebus").hide();
    $("#placement").hide();
   }
   else if(t=="time"){
   $("#noti").hide();
   $("#syllebus").hide();
    $("#placement").hide();
   }
   else if(t=="syllebus"){
   $("#noti").hide();
   $("#time").hide();
    $("#placement").hide();
   } 
   else if(t=="placement"){
   $("#noti").hide();
   $("#syllebus").hide();
    $("#time").hide();
   }
    
   });   
});
</script>
	
	

<style>
#noti,#time,#placement,#syllebus,#notiii{
display:none;
}
</style>
    
  </head>
  
  
  
  <body>
  
  <?php
// if(!isset($_COOKIE["user"])){
 // header("location:404.asp");
//}

//else{

if(isset($_GET["err"])){
	?>
	 <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p> try again</p>
                            </div>
	<?php
	
	}
?>
  
  
	
	
	<nav class="navbar navbar-default navbar-fixed-top" style="background:#1f8dc1">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="in.php" id="navbar" style="text-transform:uppercase; font-family:Arial, Helvetica, sans-serif; font-weight:800; font-style:oblique; color:#bab4b4; font-size-adjust:none">Edutainment</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="logout.php" style="background:rgba(0, 0, 0, .5); color:#FFFFFF">Logout</a></li>
          </ul>
        </div>
	
	</div></nav>
	
	
    <div class="page-content" style="padding-top:50px">
    	<div class="row">
		  <div class="col-md-2">
		  <div class="w3-card-4">
		  	<div class="sidebar content-box">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="in.php"> Home</a></li>
                    <li><a href="#" class="noti">Notification</a></li>
					<li><a href="#" class="time"> time-table</a></li>
					<li><a href="#" class="placement"> placements</a></li>
					<li><a href="#" class="syllebus">Syllebus</a></li>
		  </ul></div></div></div>
		  
		  
		  <div class="col-md-8">
					
					
					<!-- NOTIFICATION -->
				
					<div id="noti">
					<div class="w3-card-2" style="height:380px">
					<form method="post" enctype="multipart/form-data" action="newsset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Notification heading</label></div>
					<div class="col-sm-7">
					<input type="text" name="notii" class="form-control" placeholder="notification heading"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">notification pdf</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					
					
					
					<!-- TIME_TABLE -->
					
					<div id="time">
					<div class="w3-card-2" style="height:380px">
					<form method="post" enctype="multipart/form-data" action="time.php" style="padding-top:30px">
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Year</label></div>
					<div class="col-sm-7">
					<select name="year" class="form-control">
					<option value="">Select Year</option>
					<option value="2nd">2nd</option>
					<option value="3rd">3rd</option>
					<option value="4th">4th</option></select></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					
					<label class="label label-success">time table pdf</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					 
					<!-- SYLLEBUS -->
					
					<div id="syllebus">
					<div class="w3-card-2" style="height:380px">
					<form method="post" enctype="multipart/form-data" action="syllebusset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Heading</label></div>
					<div class="col-sm-7">
					<input type="text" class="form-control" name="ye"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Syllebus pdf</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
										
						<!-- PLACEMENT -->				
										
										
										
										<div id="placement">
					<div class="w3-card-2" style="height:380px">
					<form method="post" enctype="multipart/form-data" action="placementset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Name of Student</label></div>
					<div class="col-sm-7">
					<input type="text" name="name" class="form-control" required="required"></div></div><br>

					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">year of placement</label></div>
					<div class="col-sm-7">
					<input type="text" class="form-control" name="year"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">company</label></div>
					<div class="col-sm-7">
					<input type="text" name="cname" class="form-control" required="required"></div></div><br>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
										
										
										
										
				<!--	
					<div id="delete">
					<div id="s">
					<table class="table-condensed">
					<tr>
					<th>Type Containt</th>
					<th>Containt</th>
					<th>Delete</th>
					</tr>
					
</div></div>
-->
</div></div></div>
		  
	<?php
	?>	  
		  
		  
		  
		  
		  
		  </body></html>