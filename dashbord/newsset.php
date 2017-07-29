<?php
if(empty($_POST["notii"])){
//header("location:in.php?err=91");
echo "rijwan";
}
else{
    $notifi=$_POST["notii"];
	$x=1;
	include("enter.php");
	$rs=mysql_query("select * from notification where flag=1");
	while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	$date=date("d.m.y");
	
	$img=$name.$x.".pdf";
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


        if(mysql_query("insert into notification values($x,'$notifi','$date','$photo',1)")){
		header("location:in.php?succ=1");
		}
		}
		?>