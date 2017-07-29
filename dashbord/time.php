<?php
if(empty($_POST["year"])){
header("location:in.php?err=1");
}
else{
    $year=$_POST["year"];
	$x=1;
	include("enter.php");
	
	$date=date("d.m.y");
	$time=date("h.m.s");
	
	$rs=mysql_query("select * from time");
	while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	
	$img=$x.$year.$time.".pdf";
$target="../images/";
$target=$target.$img;
//$pic=($_FILES['photo']['size']);
$photo="no";


 if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } 
	else {
            $photo="no";
    }

       if(mysql_query("update time set published ='$date' AND pdf='$photo' AND time='$time' where year='$year'")){
		header("location:in.php?succ=1");
		}
		}
		?>