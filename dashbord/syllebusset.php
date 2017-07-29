<?php
if(empty($_POST["ye"])){
header("location:in.php?err=1");
}
else{
	$x=1;
	include("enter.php");
	
	$date=date("d.m.y");
	$time=date("h.m.s");
	
	$img=$date.$time.".pdf";
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

       if(mysql_query("update syllebus set date ='$date' AND pdf='$photo' AND time='$time' where sn=1")){
		header("location:in.php?succ=1");
		}
		else{
		header("location:in.php?errrr=1");
		}
		}
		?>