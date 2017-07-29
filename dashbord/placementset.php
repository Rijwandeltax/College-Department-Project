<?php
if(empty($_POST["year"])){
header("location:in.php?err=1");
}
else{
    $year=$_POST["year"];
	$name=$_POST["name"];
	$cname=$_POST["cname"];
	$x=1;
	include("enter.php");
	
	$date=date("d-m-y");
	$time=date("h:m:s");
	
	
	
	$rs=mysql_query("select * from placement");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}


        if(mysql_query("insert into placement values($x,'$name','$cname','$year',1)")){
		header("location:in.php?succ=1");
		}
		}
		?>