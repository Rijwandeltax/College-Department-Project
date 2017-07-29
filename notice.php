<html>
<head>
<title>ECE DEPARTMENT</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/w3.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="University Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.js"></script>

<style>
.top-menu ul li.active a,.top-menu ul li a:hover{
	color:#FFFFFF;
	background-color:#009933;
}
p{
font-family:"Arial Unicode MS", "Bauhaus 93", "Berlin Sans FB";
}
li{
list-style:none;
font-size:17px;
font-family:"Arial Unicode MS", "Bauhaus 93", "Berlin Sans FB";

}
@media (max-width:600px){
.container-fluid{
padding-right:1px;
padding-left:1px;
}
.col-sm-8{
padding-top:5px;
}
}

</style>
</head>
<body style="background:url(images/bg.png)">

<div class="pages">
		<div class="container-fluid" style="margin-bottom:100px; margin-top:40px">
		<div style="margin-bottom:40px">
		<h1 class="text-center" style="font-family:'Ubuntu-Medium';">ECE DEPARTMENT </h1>
		<hr style="border-top:2px solid #50d150; margin-left:44%; margin-right:44%">
		<p style="color:#000000; text-align:center; margin-left:24%; margin-right:24%" >Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p></div>
		
		<div class="row">
		<div class="col-sm-3">
		<div class="banner-grid w3-card-2">
		<h3 style="text-align:center">Quick Links</h3></div>
		<div class="w3-card-2 w3-white" style="margin-top:5px; padding:10px 10px 10px 40px; border-radius:3px">
		<ul>
					 <li style="margin-bottom:8px"><a href="index.php"><span></span>HOME</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="labs.php"><span></span>LABS</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="faculty.php"><span></span>FACULTY</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="syllabus.php"><span></span>SYLLABUS</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="time-table.php"><span></span>TIME-TABLE</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="notice.php"><span></span>IMPORTANT NOTICE</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="blog.php"><span></span>SYLLABUS</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="gallery.php"><span></span>TIME-TABLE</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="blog.php"><span></span>IMPORTANT NOTICE</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="blog.php"><span></span>SYLLABUS</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="gallery.php"><span></span>TIME-TABLE</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 <li style="margin-bottom:8px"><a href="blog.php"><span></span>IMPORTANT NOTICE</a></li>
					 <hr style="margin-top:1.5px; margin-bottom:1.5px; border-color:#CCCCCC">
					 </ul>
		
		
		</div></div>
		
		
		<div class="col-sm-8">
		
		<div class="banner-grid w3-card-2">
				 <h3 style="text-align:center">Notice</h3></div>
				 <div style="overflow-x:auto;">	
				 <div class="w3-card-2 w3-white" style="margin-top:5px; padding:10px 10px 10px 10px;">
				 
		<div style="overflow-x:auto;">
  <table class="w3-table w3-striped" style="width:100%">
  <tr>
     <th style="text-align:center">SN</th>
	 <th style="text-align:center">NOTICE TITLE</th>
	 <th style="text-align:center">PUBLISHED DATE</th>
     <th style="text-align:center">DOWNLOAD</th>
	 </tr>
	 <?php
	 $i=0;
	 include("enter.php");
	 $rs=mysql_query("select * from notification");
	 while($r=mysql_fetch_array($rs)){
	 ?>
	 <tr>
	 <td style="text-align:center"><?=$r[0]?></td>
	 <td style="text-align:center"><?=$r[1]?></td>
	 <td style="text-align:center"><?=$r[2]?></td>
	 <td style="text-align:center"><a href="images/<?=$r[1]?><?=$r[0]?>.pdf">Download</a></td>
	 </tr>
	 <?php
	 }
	 ?>
	 </table></div>

				
				</div><br><br><br>
				 
				 </div></div></div></div>

<body>
</body>
</html>
